<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="./assets/css/phppot-style.css" type="text/css"rel="stylesheet" />
<link href="./assets/css/user-registration.css" type="text/css"rel="stylesheet" />	
<title> Silahkan Daftar dahulu! </title>
<div class="phppot-container">	
    <div class="sign-up-container">
			<div class="login-signup">
				<a href="signup.php">Sign up</a>
			</div>
			<div class="signup-align">
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading">Login</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
				<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username"
								id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="signup-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="signup-password" id="signup-password">
						</div>
					</div>
					<div class="row">
						<input class="sign-up-btn" type="submit" name="login-btn"
							id="login-btn" value="Login">
					</div>

				</form>
			</div>
		</div>
<footer><center>&copy;Copyright 2020, Designed and Created by Hidayat</center></footer>
</body>
<script>
function loginValidation() {
var valid = true;
$("#username").removeClass("error-field");
$("#password").removeClass("error-field");

var UserName = $("#username").val();
var Password = $('#signup-password').val();

$("#username-info").html("").hide();
$("#email-info").html("").hide();

if (UserName.trim() == "") {
  $("#username-info").html("required.").css("color", "#ee0000").show();
  $("#username").addClass("error-field");
  valid = false;
}
if (Password.trim() == "") {
  $("#signup-password-info").html("required.").css("color", "#ee0000").show();
  $("#signup-password").addClass("error-field");
  valid = false;
}
if (valid == false) {
  $('.error-field').first().focus();
  valid = false;
}
return valid;
}
</script>
</html>
