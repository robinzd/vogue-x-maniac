<?php


include('dbconnection.php');


// something was posted
$email = $_POST["Username"];
$password = $_POST["password"];



$get_admin = "select * from admin_login where email_admin='$email' and password_admin='$password'";

$run_admin = mysqli_query($conn, $get_admin);



while ($row_admin = mysqli_fetch_array($run_admin)) {

    $admin_email = $row_admin['email_admin'];
    $admin_password = $row_admin['password_admin'];
}



if ($admin_email == $email &&  $admin_password == $password) {
    
    echo "<script type='text/javascript'> document.location ='admin_panel_login.php'; </script>";
    
}
else {
    echo "<script>alert('Entered Email Or Password Wrong');</script>";
}




?>