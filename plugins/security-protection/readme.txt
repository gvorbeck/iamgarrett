=== Security-protection ===
Contributors: webvitaly
Donate link: http://web-profile.com.ua/donate/
Tags: brute-force, bruteforce, login, register, registration, reset-password, form, security, protection, protect, block, bot
Requires at least: 3.0
Tested up to: 4.0
Stable tag: 2.1
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl.html

Protection from login, registration and reset-password brute-force attacks. No captcha.

== Description ==

**[WordPress Pro plugins](http://codecanyon.net/popular_item/by_category?category=wordpress&ref=webvitaly "WordPress Pro plugins")** |
**[Security-protection](http://web-profile.com.ua/wordpress/plugins/security-protection/ "Plugin page")** |
**[Donate](http://web-profile.com.ua/donate/ "Support the development")**

**Why humans should prove that they are humans by filling captchas? Lets bots prove that they are not bots with adding javascript to their user-agents!**

Security-protection blocks and stops brute-force attacks.
[Want to read more how Security-protection plugin works](http://wordpress.org/plugins/security-protection/faq/)?

* **no captcha**, because brute-force attacks is not users' problem
* **no options**, because it is great to forget about brute-force attacks completely

Plugin is easy to use: just install it and it just works.

Important: **delete 'admin' username** if you have it on your site. More than 90% of brute-force attacks try to crack the 'admin' username.

Top 10 most commonly used and worst passwords. Do not use them:

* 123456
* password
* qwerty
* abc123
* 111111
* 123123
* 000000
* admin123
* iloveyou
* letmein


= Useful: =
* ["Anti-spam" - block spam in comments](http://wordpress.org/plugins/anti-spam/ "no spam, no captcha")
* ["Anti-spam Pro"](http://codecanyon.net/item/antispam-pro/6491169?ref=webvitaly "Anti-spam Pro")
* ["Page-list" - show list of pages with shortcodes](http://wordpress.org/plugins/page-list/ "list of pages with shortcodes")


== Installation ==

1. install and activate the plugin on the Plugins page
2. enjoy life without login, register and reset-password brute-force attacks

== Frequently Asked Questions ==

= How does Security-protection plugin work? =

The blocking algorithm is based on 2 methods: 'invisible js-captcha' and 'invisible input trap'.
The 'invisible js-captcha' method is based on fact that bots does not have javascript on their user-agents.
The 'invisible input trap' method is based on fact that almost all the bots will fill inputs with name 'email' or 'url'.

= How does Security-protection plugin work in details? =

Two extra hidden fields are added to login, register and reset-password forms.
First field is the invisible captcha (copy and paste the code). Second field should be empty.
If the user visits site, than first field is answered automatically with javascript, second field left blank and both fields are hidden by javascript and css and invisible for the user.
If the brute-forcer tries to submit the form, he will make a mistake with answer on first field or tries to submit an empty field and brute-force attack will be automatically rejected.

= How does Security-protection plugin stop brute-force attacks? =

If Security-protection check was not passed than it is brute-force request and the login attempt (or registration, or reset password) is blocked even if username and password are correct.
Plugin sends fake WordPress login cookies to the brute-force bot and redirects it to the admin section to emulate that the password is cracked and many brute-forcers stop their attacks after this.
It is really awesome :)

= How to test what brute-force attacks are blocked? =

You may enable sending info about blocked brute-force attacks to admin email.
Edit [security-protection.php](http://plugins.trac.wordpress.org/browser/security-protection/trunk/security-protection.php) file and find "$secprot_send_brute_force_log_to_admin" and make it "true".

= How to stop brute-force attacks if plugins does not help? =

If all plugins does not help you to stop brute-force attacks - you can simply rename wp-login.php file (for example 'wp-login-new.php') for now and maybe this can help you to reduce load on your site.
And also create empty wp-login.php file for not raising WordPress 404 error because it will start whole WordPress site again during each wp-login.php access.
While wp-login.php renamed - users cannot login, register and reset password.
If you want to have ability to login while you renamed wp-login.php file you should replace all 'wp-login.php' strings inside of the wp-login.php file to your new filename (for example 'wp-login-new.php').

== Changelog ==

= 2.1 - 2014-08-29 =
* masking password in the email log for successful login
* cleanup code
* update FAQ

= 2.0 - 2014-04-05 =
* completely rewrote all the code and reorganize the logic of the plugin (now plugin adds two hidden fields - aka 'invisible js-captcha')
* added 'send_successful_login_log_to_admin' feature

= 1.1 - 2014-03-01 =
* added sending fake WordPress login cookies to fool the bot

= 1.0 - 2014-02-25 =
* initial release - Protect from login, register and reset-password brute-force attacks using cookie check