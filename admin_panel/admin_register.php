<?php

session_start();


include("./conn.php");
include("./check_login.php");



    // something was posted
    $username = $_POST["username"];
    echo $username;
    echo "<br>";
    $password = $_POST["password"];
    echo $password;

    if (!empty($username) && !empty($password)) {
        // save to database

        $admin_id = random_num(10);


        $query = "INSERT INTO `admin_login`(`admin_id`,`email_admin`,`password_admin`) VALUES ('$admin_id','$username','$password')";



        $check = mysqli_query($conn, $query);



        header("location:admin_panel_login.php");
        die;
    } else {
        echo "<script>alert('Please Enter Some Valid Information!');</script>";
    }






?>