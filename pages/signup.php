<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Login V18</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../asset/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../asset/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../asset/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../asset/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../asset/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../asset/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../asset/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../asset/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../asset/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../asset/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../asset/login/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="../signup.php" method="post">
					<span class="login100-form-title p-b-43">
						Sign Up
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" id="iniPassword">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" id="confirmPassword">
						<span class="focus-input100"></span>
						<span class="label-input100">Re-Type Password</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="text" name="nama_depan">
						<span class="focus-input100"></span>
						<span class="label-input100">nama depan</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="text" name="nama_belakang">
						<span class="focus-input100"></span>
						<span class="label-input100">nama belakang</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="text" name="alamat">
						<span class="focus-input100"></span>
						<span class="label-input100">alamat</span>
					</div>

						<div class="row">
						    <div class="col-md-4 col-sm-12">
					                <div class="wrap-input100">
						                <input class="input100" type="text" disabled>
				                		<span class="focus-input100"></span>
                						<span class="label-input100">+62</span>
					                </div>
						    </div>
						    <div class="col-md-8 col-sm-12">
						            <div class="wrap-input100 validate-input" data-validate="Password is required">
                						<input class="input100" type="number" name="no_hp">
				                		<span class="focus-input100"></span>
						                <span class="label-input100">no hp</span>
					                </div>
						    </div>
						</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="email" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">email</span>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign Up
						</button>
					</div>
					<script type="text/javascript">
						
						var password = document.getElementById("iniPassword")
						  , confirm_password = document.getElementById("confirmPassword");

						function validatePassword(){
						  if(password.value != confirm_password.value) {
						    confirm_password.setCustomValidity("Passwords Don't Match");
						  } else {
						    confirm_password.setCustomValidity('');
						  }
						}

						password.onchange = validatePassword;
						confirm_password.onkeyup = validatePassword;
					</script>
				</form>

				<div class="login100-more" style="background-image: url('../asset/login/images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="../asset/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../asset/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../asset/login/vendor/bootstrap/js/popper.js"></script>
	<script src="../asset/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../asset/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../asset/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="../asset/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../asset/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../asset/login/js/main.js"></script>

</body>
</html>