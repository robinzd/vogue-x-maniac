<?php


include('dbconnection.php');

// something was posted
$email = $_POST["Username"];
echo $email; 
echo "<br>";
$password = $_POST["password"];
echo $password;


$get_admin = "select * admin_login where email_admin='$email' and password_admin='$password'";

$run_admin = mysqli_query($conn, $get_admin);



while ($row_admin = mysqli_fetch_array($run_admin)) {

    print_r($row_admin);

    $admin_email = $row_admin['email_admin'];
    $admin_password = $row_admin['password_admin'];
}



if ($admin_email == $email &&  $admin_password == $password) {
    header("location:./admin_panel.php");
    
}
else {
    echo "<script>alert('Entered Email Or Password Wrong');</script>";
}




?>