<?php
session_start();
include("./dbconnection.php");
include("./check_login.php");

// something was posted
$username = $_POST["username"];
$password = $_POST["password"];
if (!empty($username) && !empty($password)) {
    // save to database

    $admin_id = rand(1000000, 5000000);


    $query_admin = mysqli_query($conn, "INSERT INTO `admin_login`( `admin_id`, `email_admin`,`password_admin`) VALUES ('$admin_id','$username','$password')");

    if ($query_admin) {

        header("location:admin_panel_login.php");
        die;
    }
} else {
    echo "<script>alert('Please Enter Some Valid Information!');</script>";
}
?>
