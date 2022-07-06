<?php

session_start();
include('dbconnection.php');
include("check_login.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // something was posted
    $email = $_POST["Username"];
    $password = $_POST["password"];



    if (!empty($email) && !empty($password)) {
		// read from database

		$query = "select * from admin_login where email_admin='$email'";



		$result = mysqli_query($conn, $query);



		if ($result) {
			if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);
				if ($user_data['password_admin'] === $password) {

					$_SESSION['admin_id'] = $user_data['admin_id'];

					header("location:admin_panel.php");
					die;
				}
			}
		}
		echo "<script>alert('Wrong Email or Password');</script>";
	}else {
		echo  "<script>alert('Please Enter Some Valid Information!');</script>";
	}
}





?>