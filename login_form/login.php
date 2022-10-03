<?php
session_start();

include("../conn.php");
include("../function.php");
include("../google-api-php-client-2.4.0/google-api-php-client-2.4.0/vendor/autoload.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	// something was posted
	$email = $_POST["email"];
	$password = $_POST["password"];



	if (!empty($email) && !empty($password)) {
		// read from database

		$query = "select * from users where user_email='$email' limit 1";



		$result = mysqli_query($conn, $query);



		if ($result) {
			if ($result && mysqli_num_rows($result) > 0) {

				$user_data = mysqli_fetch_assoc($result);
				if ($user_data['user_password'] === $password) {

					$_SESSION['user_id'] = $user_data['user_id'];

					header("location:../index.php");
					die;
				}
			}
		}
		echo "<script>alert('Wrong Email or Password');</script>";
	} else {
		echo  "<script>alert('Please Enter Some Valid Information!');</script>";
	}
}


$clientId = "428003245396-63d10kjmatp8ubebi6qunbdj6sjvn1t9.apps.googleusercontent.com";
$clientSecret = "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";
$redirectURI = "https://vogue-x-maniac.herokuapp.com/login_form/login.php";


$client = new Google_Client();
$client->setClientId($clientId);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectURI);
$client->addScope("email");
$client->addScope("profile");

if (isset($_GET["code"])) {
	$token = $client->fetchAccessTokenWithAuthCode($_GET["code"]);
	$client->setAccessToken($token["access_token"]);

	$obj = new Google_Service_Oauth2($client);
	$data = $obj->userinfo->get();

	$user_id = random_num(20);
	$email = $_SESSION["email"] = $data->email;
	$first_name = $_SESSION["givenName"] = $data->givenName;
	$last_name = $_SESSION["familyName"] = $data->familyName;
	$name = $_SESSION["name"] = $data->name;

    echo "hai";
	echo "<br>";
	var_dump($data);
	echo "<br>";

	// ID, user_id, first_name, last_name, user_email, user_password, user_mob_no, created_time, is_admin


	$get_users = "select user_email from users where user_email='$email'";

    echo $get_users;
	echo "<br>";

	$run_users = mysqli_query($conn, $get_users);

	while ($row_users = mysqli_fetch_array($run_users)) {

		$user_email = $row_users['user_email'];
		echo $user_email;
	}
	if (!empty($data->email) && !empty($data->name) &&  $user_email !== $data->email) {
		$query_address = mysqli_query($conn, "INSERT INTO `users`( `user_id`, `first_name`, `last_name`, `user_email`,user_password,user_mob_no,is_admin) VALUES ('$user_id','$first_name','$last_name','$email','0','0')");
		if ($query_address) {
			header("location:../index.php");
		}
	} else {
		header("location:../index.php");
	}
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
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
						Login Form
					</span>


					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>




					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100">

							<div>
								<a href="../register_form/register.php" class="txt1">
									Register Here!
								</a>
							</div>
						</div>

						<div>
							<a href="./forgot_password.php" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" value="login">
							Login
						</button>
					</div>

					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							Don't Have an account?<a href="../register_form/register.php" class="txt1">Register</a>
						</span>
					</div>
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
					</div>
					<?php
					echo "<div class='login100-form-social flex-c-m'>
						<!-- <a href='#' class='login100-form-social-item flex-c-m bg1 m-r-5'>
							<i class='fa fa-facebook-f' aria-hidden='true'></i>
						</a> -->

					
						<a href='" . $client->createAuthUrl() . "' class='login100-form-social-item flex-c-m bg2 m-r-5'>
							<i class='fa fa-google' aria-hidden='true'></i>
						</a>
						

					</div>"
					?>
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