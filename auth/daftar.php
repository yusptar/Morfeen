<?php 
session_start();
require '../fungsi.php';

if(isset($_POST["daftar"]))
{
	if(registrasi($_POST)>0)
	{
		echo "
			<script type='text/javascript'>
			alert('Daftar Berhasil');
			document.location.href='login.php';
			</script>";
	}

	else
	{
		echo mysqli_error($conn);
	}
}

// if(isset($_POST["back"]))
// {
// 	header("location:login.php");
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/logo.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form"  method="post">
					<span class="login100-form-title p-b-50">
						Register Account
					</span>
					<span class="login100-form-avatar">
						<img src="images/logo.png" alt="">
					</span>
					
					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter Username">
						<input class="input100" type="text" name="nama" required="required">
						<span class="focus-input100" data-placeholder="Nama Lengkap"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter Username">
						<input class="input100" type="text" name="username" required="required">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter Password">
						<input class="input100" type="password" name="password" required="required">
						<span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-50" data-validate="Enter Password">
						<input class="input100" type="password" name="password2" required="required">
						<span class="focus-input100" data-placeholder="Confirm Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="daftar"  type="submit">
							Daftar
						</button>
					</div>
					<br><br>
				</form>
				<!-- <form action="" method="post">
						<div class="container-login100-form-btn">
							<button class="login100-form-btn" name="back"  type="submit">
								Back for Login
							</button>
						</div>
					</form> -->
			</div>
		</div>
	</div>

	<div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> by Deny Pratama | All rights reserved
            </p>
          </div>
          
        </div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>