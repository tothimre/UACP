<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>Login Page</title>

	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="stylesheet" type="text/css" href="templates/css/style_login_captcha.css" />
</head>

<body>

	<form id="login-form" action="{HandlerUrl}" method="post">
		<fieldset>

			<legend>Log in</legend>

			<label for="login">Email</label>
			<input type="text" id="login" name="{UsernameInputString}"/>
			<div class="clear"></div>

			<label for="password">Password</label>
			<input type="password" id="password" name="{PasswordInputString}"/>
			<div class="clear"></div>
			<label for="captcha_label">Captcha</label>
			{CaptchaImage}
			<div class="clear"></div>
			<label for="captcha_input">Type Captcha</label>
			<input type="text" name="{CaptchaInputString}" class="uacp_captcha_input" id="uacp_captcha_input_id">
			<div class="clear"></div>
			<br />
			<input type="submit" style="margin: -20px 0 0 287px;" class="button" name="{InputSubmitString}" value="Log in"/>
		</fieldset>
	</form>

</body>

</html>