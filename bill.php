<?php
session_start();

include("./conn.php");
include("./function.php");

$user_data = check_login($conn);

$userid = $user_data['user_id'];

$fullname = isset($_POST['name']) ? $_POST['name'] : "";

$email = isset($_POST['email']) ? $_POST['email'] : "";

$street = isset($_POST['street']) ? $_POST['street'] : "";

$landmark = isset($_POST['landmark']) ? $_POST['landmark'] : "";

$city = isset($_POST['city']) ? $_POST['city'] : "";

$pincode = isset($_POST['pincode']) ? $_POST['pincode'] : "";


$query = "INSERT INTO `users_address`( `user_id`, `user_fullname`, `user_email`, `user_address`, `user_landmark`,`user_city`,`user_pincode`) VALUES ('$userid ','$fullname','$email','$street','$city','$pincode')";


$check = mysqli_query($conn, $query);
