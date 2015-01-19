/*
Security-protection plugin
http://wordpress.org/plugins/security-protection/
*/

jQuery(function($){

	$('.secprot-form-group').hide(); // hide inputs from users

	var code = $('.secprot-form-group-code span:first').text();
	$('.secprot-form-group-code input').val( code ); // answer the captcha instead of the user

});