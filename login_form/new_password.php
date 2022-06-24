<?php

include("../conn.php");

$email_id_1 = $_POST["email"];
$new_password = $_POST['password'];

echo $email_id_1;

echo "<br>";

$get_email_id = "select user_email from users where user_email='$email_id_1'";

echo $get_email_id;

echo "<br>";

$run_email_id = mysqli_query($conn, $get_email_id);



while ($row_email_id = mysqli_fetch_array($run_email_id)) {

    print_r($row_email_id);

	$email_id = $row_email['user_email'];
}


	//Query for data updation
	if ($email_id_1 == $email_id) {
		$query = mysqli_query($conn, "update users set user_password='$new_password' where user_email='$email_id_1'");

		if ($query) {
			echo "<script>alert('You have successfully changed the password');</script>";
			echo "<script type='text/javascript'> document.location ='./login.php'; </script>";
		} else {
			echo "<script>alert('Something Went Wrong. Please try again');</script>";
		}
	}

?>






