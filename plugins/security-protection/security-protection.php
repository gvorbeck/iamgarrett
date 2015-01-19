<?php
/*
Plugin Name: Security-protection
Plugin URI: http://wordpress.org/plugins/security-protection/
Description: Protection from login, registration and reset-password brute-force attacks. No captcha.
Version: 2.1
Author: webvitaly
Author URI: http://web-profile.com.ua/wordpress/plugins/
License: GPLv3
*/


$secprot_send_brute_force_log_to_admin = false; // if true, than info about blocked brute-force attacks will be sent to admin email

$secprot_send_successful_login_log_to_admin = false; // if true, than info about successful login will be send to admin email

$secprot_arr = array(
	'send_brute_force_log_to_admin' => $secprot_send_brute_force_log_to_admin,
	'send_successful_login_log_to_admin' => $secprot_send_successful_login_log_to_admin,
	'code' => 'asd321',
	'admin_email' => get_option('admin_email')
);

if(!function_exists('secprot_form_inputs')):

	function secprot_hooks() {
		add_action('login_form', 'secprot_form_inputs');
		add_filter('authenticate', 'secprot_login_check', 100, 3);

		add_action('register_form', 'secprot_form_inputs');
		add_action('register_post', 'secprot_registration_check', 100, 3);

		add_action('lostpassword_form', 'secprot_form_inputs');
		add_action('lostpassword_post', 'secprot_reset_password_check');
	}
	secprot_hooks();


	function secprot_login_enqueue_scripts() {
		// wp_enqueue_script('jquery');
		wp_enqueue_script('security-protection-script', plugins_url('/js/security-protection.js', __FILE__), array('jquery'));
	}
	add_action('login_enqueue_scripts', 'secprot_login_enqueue_scripts');


	function secprot_form_inputs() {
		global $secprot_arr;
		// unobtrusive js - users should enable login, register and reset password with disabled js
		// users without js should just copy and paste code like with captcha
		echo "\n".'<p class="secprot-form-group secprot-form-group-code">'; // hidden with js
		echo '<label>Copy this code "<span>'.$secprot_arr['code'].'</span>" and paste it into input: <br />';
		echo '<input type="text" name="secprot-code" class="input" value="2.1" />';
		echo '</label></p>'."\n";

		// the 'empty-field' should be hidden via css because user should never see it even with disabled js
		echo "\n".'<p class="secprot-form-group secprot-form-group-empty" style="display: none;">'; // hide with css
		echo '<label>Leave this field empty: <br />';
		echo '<input type="text" name="secprot-empty-email-url-website" class="input" value="" />';
		echo '</label></p>'."\n";
	}


	function secprot_login_check($user, $username, $password) {
		global $secprot_arr;
		$error_flag = 0;
		$error_msg = '';
		if(!empty($_POST)) {
			if($_POST['secprot-code'] !== $secprot_arr['code']) {
				$error_flag = 1;
				$error_msg .= ' wrong code; ';
			}
			if($_POST['secprot-empty-email-url-website'] !== '') {
				$error_flag = 1;
				$error_msg .= ' field should be empty; ';
			}
			if($error_flag) { // we have errors - so this should be brute-force bot
				$error = new WP_Error();
				$error->add('secprot-login-error', 'Security-protection plugin: Login error: '.$error_msg);
				if($secprot_arr['send_brute_force_log_to_admin']) {
					secprot_log('Login error: '.$error_msg);
				}
				secprot_set_fake_login_cookies(); // set fake login cookies
				secprot_fake_redirect(); // fake admin dashboard redirect
				return $error;
			}
			// user passed Security-protection check and it is not brute-force bot
			if(!is_wp_error($user)) { // user gave us valid username and password
				if($secprot_arr['send_successful_login_log_to_admin']) {
					secprot_log('Login successful: passed Security-protection check; correct username and password;', true);
				}
			} else { // user gave us not valid username and password
				if($secprot_arr['send_brute_force_log_to_admin']) {
					secprot_log('Login error: passed Security-protection check; bad username or password;');
				}
			}
		}
		return $user;
	}


	function secprot_registration_check($login, $email, $errors) {
		global $secprot_arr;
		$error_flag = 0;
		$error_msg = '';
		if(!empty($_POST)) {
			if($_POST['secprot-code'] !== $secprot_arr['code']) {
				$error_flag = 1;
				$error_msg .= ' wrong code; ';
			}
			if($_POST['secprot-empty-email-url-website'] !== '') {
				$error_flag = 1;
				$error_msg .= ' field should be empty; ';
			}
			if($error_flag) { // we have errors - so this should be brute-force bot
				if($secprot_arr['send_brute_force_log_to_admin']) {
					secprot_log('Registration error: '.$error_msg);
				}
				$errors->add('secprot-registration-error', 'Security-protection plugin: Registration error: '.$error_msg);
			}
		}
		return $errors;
	}


	function secprot_reset_password_check() {
		global $secprot_arr;
		$error_flag = 0;
		$error_msg = '';
		if(!empty($_POST)) {
			if($_POST['secprot-code'] !== $secprot_arr['code']) {
				$error_flag = 1;
				$error_msg .= ' wrong code; ';
			}
			if($_POST['secprot-empty-email-url-website'] !== '') {
				$error_flag = 1;
				$error_msg .= ' field should be empty; ';
			}
			if($error_flag) { // we have errors - so this should be brute-force bot
				if($secprot_arr['send_brute_force_log_to_admin']) {
					secprot_log('Reset password error: '.$error_msg);
				}
				wp_die('Security-protection plugin: Reset password error: '.$error_msg);
			}
		}
	}


	function secprot_log($error_message = '', $mask_password = false) {
		global $secprot_arr;
		if(!empty($_POST)) {

			if(!empty($_SERVER['HTTP_CLIENT_IP'])) { //check ip from share internet
				$ip = $_SERVER['HTTP_CLIENT_IP'];
			} elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { // to check ip is pass from proxy, also could be used ['HTTP_X_REAL_IP ']
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else {
				$ip = $_SERVER['REMOTE_ADDR'];
			}

			$secprot_message_brute_force_info = '';
			$secprot_message_brute_force_info .= 'Error: '.$error_message."\r\n\r\n";

			$secprot_message_brute_force_info .= 'IP : '.$ip."\r\n";

			$secprot_message_brute_force_info .= 'HTTP_USER_AGENT : '.$_SERVER['HTTP_USER_AGENT']."\r\n";
			$secprot_message_brute_force_info .= 'REQUEST_URI : '.$_SERVER['REQUEST_URI']."\r\n";
			$secprot_message_brute_force_info .= 'HTTP_REFERER : '.$_SERVER['HTTP_REFERER']."\r\n\r\n";

			if($mask_password) {
				$_POST[pwd] = '**********'; // mask password
			}
			$secprot_message_brute_force_info .= 'POST vars:'."\r\n"; // lets see what POST vars brute-forcers try to submit
			foreach ($_POST as $key => $value) {
				$secprot_message_brute_force_info .= '$_POST['.$key.'] = '.$value."\r\n"; // .chr(13).chr(10)
			}
			$secprot_message_brute_force_info .= "\r\n\r\n";

			$secprot_message_brute_force_info .= 'COOKIE vars:'."\r\n"; // lets see what COOKIE vars brute-forcers try to submit
			foreach ($_COOKIE as $key => $value) {
				$secprot_message_brute_force_info .= '$_COOKIE['.$key. '] = '.$value."\r\n"; // .chr(13).chr(10)
			}
			$secprot_message_brute_force_info .= "\r\n\r\n";

			$secprot_message_append = '-----------------------------'."\r\n";
			$secprot_message_append .= 'This is brute-force log blocked by Security-protection plugin - wordpress.org/plugins/security-protection/'."\r\n";
			$secprot_message_append .= 'You may edit "security-protection.php" file and disable this notification.'."\r\n";
			$secprot_message_append .= 'You should find "$secprot_send_brute_force_log_to_admin" and make it equal to "false".'."\r\n";

			$secprot_message = '';
			$secprot_message .= $secprot_message_brute_force_info; // post, cookie and other data
			$secprot_message .= $secprot_message_append;

			$secprot_subject = 'Brute-force log on site ['.get_bloginfo('name').']'; // email subject
			@wp_mail($secprot_arr['admin_email'], $secprot_subject, $secprot_message); // send log info to admin email

		}
	}


	function secprot_set_fake_login_cookies() { // set fake login cookies
		// many brute-force attacks are waiting for redirect or WordPress login cookies
		// after fake redirect and fake login cookies many brute-forcers will stop their attacks

		$expiration = time() + 14 * DAY_IN_SECONDS;
		$expire = $expiration + (12 * HOUR_IN_SECONDS);
		$secure = '';

		$cookie_value_fake = 'user%7C1597857834%7C8b15ec47bfba38d43df64d1427e12daa';
		$auth_cookie_fake = 'wordpress_123309a793469c07c80a9cb5298c0b71';
		$logged_in_cookie_fake = 'wordpress_logged_in_123309a793469c07c80a9cb5298c0b71';

		setcookie($auth_cookie_fake, $cookie_value_fake, $expire, COOKIEPATH, COOKIE_DOMAIN, $secure, true);
		setcookie($logged_in_cookie_fake, $cookie_value_fake, $expire, COOKIEPATH, COOKIE_DOMAIN, $secure, true);

		// login cookie names are located in wp-includes/default-constants.php:
		// define('AUTH_COOKIE', 'wordpress_'.COOKIEHASH);
		// define('LOGGED_IN_COOKIE', 'wordpress_logged_in_'.COOKIEHASH);
	}


	function secprot_fake_redirect() { // fake admin dashboard redirect
		// redirect the brute-force bot to admin section to emulate that the password is cracked
		// and some brute-forcers stop their attacks after such redirect
		$redirect_to = admin_url();
		wp_safe_redirect($redirect_to);
		exit();
	}

endif; // end of secprot_form_inputs()


if(!function_exists('secprot_plugin_meta')):
	function secprot_plugin_meta($links, $file) { // add 'Plugin page', 'Donate' and 'WordPress Pro plugins' links to plugin meta row
		if(strpos($file, 'security-protection.php') !== false) {
			$links = array_merge($links, array('<a href="http://web-profile.com.ua/wordpress/plugins/security-protection/" title="Plugin page">Security-protection</a>'));
			$links = array_merge($links, array('<a href="http://web-profile.com.ua/donate/" title="Support the development">Donate</a>'));
			$links = array_merge($links, array('<a href="http://codecanyon.net/popular_item/by_category?category=wordpress&ref=webvitaly" title="codecanyon.net">WordPress Pro plugins</a>'));
		}
		return $links;
	}
	add_filter('plugin_row_meta', 'secprot_plugin_meta', 10, 2);
endif; // end of secprot_plugin_meta()