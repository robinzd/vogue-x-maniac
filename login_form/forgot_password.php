<?php

include("../conn.php");


if (isset($_POST['submit'])) {
	//Getting Post Values
	$email_id_1 = $_POST['email'];

	$get_email = "select * from users where user_email=$email_id_1";

	$run_email = mysqli_query($conn, $get_email);



	while ($row_email = mysqli_fetch_array($run_email)) {

		$email_id = $row_email['user_email'];
	}

	//Query for data updation
	if ($email_id_1 == $email_id) {
		echo "<script type='text/javascript'> document.location ='./new_password.php';</script>";
	} else {
		echo "<script>alert('Sorry Entered Email Address Is not Matched!');</script>";
	}
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Forgot Password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../favicon/vogue_x_maniac_png_K8m_icon.ico" />

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
	<link rel="stylesheet" type="text/css" href="css/login1.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
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
						Forgot Password
					</span>


					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" value="login">
							Login
						</button>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/login-pic.jpg');">
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