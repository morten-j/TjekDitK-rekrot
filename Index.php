<?php
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Digitalt Kørekort</title>
	<meta charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';

    }
    
    elseif (isset($_POST['register'])) { //user registering

        require 'register.php';

    }
}
?>
<body style="margin: 0px">

	<div>
		<div class="container-login">
			<div class="wrap-login">
				<div class="login-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login-form validate-form">
					<span class="login-form-title">
						Digitalt Kørekort Login
					</span>

					<div class="wrap-input validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input" type="text" name="email" placeholder="E-mail">
						<span class="focus-input"></span>
						<span class="symbol-input">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input validate-input" data-validate = "Password is required">
						<input class="input" type="password" name="pass" placeholder="Kodeord">
						<span class="focus-input"></span>
						<span class="symbol-input">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login-form-btn">
						<button class="login-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Glemt
						</span>
						<a class="txt1" href="#">
							Brugernavn / Kodeord?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt1" href="#">
							Lav en Bruger
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




</body>
</html>