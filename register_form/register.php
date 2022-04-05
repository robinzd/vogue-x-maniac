<?php

session_start();


include("./conn.php");
include("./function.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	// something was posted
	$first_name = $_POST["First_Name"];
	$last_name = $_POST["Last_Name"];
	$email = $_POST["email"];
	$password = $_POST["Password"];
	$mobile_no = $_POST["Mobile_No"];

	echo $first_name;
	echo $last_name;
	echo $email;
	echo $password;
	echo $mobile_no;

 if (
		!empty($first_name) && !empty($last_name) && !empty($email)

		&& !empty($password)
	) {
		// save to database
		$user_id = random_num(20);
		$query = "INSERT INTO `users`( `user_id`, `first_name`, `last_name`, `user_email`, `user_password`,`user_mob_no`) VALUES ('$user_id','$first_name','$last_name','$email','$password','$mobile_no')";
        
		

		$check = mysqli_query($conn, $query);

		header("location:../login_form/login.php");
		die;
	} else {
		echo "please enter some valid information!";
	}
}





?>








<!DOCTYPE html>
<html lang="en">

<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../favicon/vogue_x_maniac_png_K8m_icon.ico">

	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
	<link rel="stylesheet" type="text/css" href="css/register1.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<!--===============================================================================================-->
</head>

<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="post" class="login100-form validate-form">

					<span class="login100-form-title p-b-43">
						<img src="../header images/vogue x maniac png.png">
					</span>


					<span class="login100-form-title p-b-43">
						Register Form
					</span>


					<div class="wrap-input100 validate-input" data-validate="first name is required">
						<input class="input100" type="text" name="First_Name">
						<span class="focus-input100"></span>
						<span class="label-input100">First Name</span>

					</div>


					<div class="wrap-input100 validate-input" data-validate="last name is required">
						<input class="input100" type="text" name="Last_Name">
						<span class="focus-input100"></span>
						<span class="label-input100">Last Name</span>

					</div>

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="Password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="mobile number is required">
						<input class="input100" type="number" name="Mobile_No">
						<span class="focus-input100"></span>
						<span class="label-input100">Mobile No</span>
					</div>



					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" value="signup">
							Register
						</button>
					</div>

					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							Already Have an account?<a href="../Login_form/login.php" class="txt1">Login</a>
						</span>
					</div>


					<!-- <div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-google" aria-hidden="true"></i>
						</a>
					</div> -->
				</form>

				<div class="login100-more" style="background-image: url('images/register-pic.jpg');">
				</div>
			</div>
		</div>
	</div>





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