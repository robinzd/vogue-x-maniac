<?php
session_start();

include("./conn.php");
include("./function.php");

$user_data = check_login($conn);

$userid = $user_data['user_id'];

echo $userid;

echo "<br>";
$fullname = $_POST["name"];
echo $fullname;
echo "<br>";
$email =  $_POST["email"];
echo $email;
echo "<br>";
$street =  $_POST["street"];
echo $street;
echo "<br>";
$landmark =  $_POST["landmark"];
echo $landmark;
echo "<br>";
$city =  $_POST["city"];
echo $city;
echo "<br>";
$pincode = $_POST["pincode"];
echo $pincode;
echo "<br>";

if(!empty($fullname) && !empty($email ) && !empty($street) && !empty($landmark) && !empty($city)&& !empty($pincode)){
    
    $query_address =mysqli_query ($conn,"INSERT INTO `users_address`( `user_id`, `user_fullname`, `user_email`, `user_address`, `user_landmark`,`user_city`,`user_pincode`) VALUES ('$userid ','$fullname','$email','$street','$city','$pincode')");
  
}

else{
  echo "<script>alert('Please Enter Some Valid Information!');</script>";
}


?>