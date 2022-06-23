<?php
//Database Connection
include('./conn.php');
if (isset($_POST['submit'])) {
	$eid = $_GET['editid'];
	//Getting Post Values
	$password = $_POST['password'];





	//Query for data updation
	$query = mysqli_query($conn, "update users set user_password='$password' where ID='$eid'");

	if ($query) {
		echo "<script>alert('You have successfully update the password');</script>";
		echo "<script type='text/javascript'> document.location ='user_password.php'; </script>";
	} else {
		echo "<script>alert('Something Went Wrong. Please try again');</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Password</title>
	<link rel="icon" type="image/png" href="./favicon/vogue_x_maniac_png_K8m_icon.ico" />
	<!-- bootsstrap cdn -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- font awesome cdn -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- link the external stylesheet -->
	 <link rel="stylesheet" type="text/css" href="./user_password_edit.css">
	
</head>

<body>

	<!-- navbar starts -->


	<?php

	include "./index.header.php";

	?>

	<!-- navbar  ends -->


	<!-- back to top starts -->


	<?php include "./back_to_top.php"; ?>

	<!--back to top ends -->

	<!-- hide only on xs -->

	<div class="signup-form d-none d-sm-block">
		<form method="POST">
			<?php
			$eid = $_GET['editid'];
			$ret = mysqli_query($conn, "select * from users where ID='$eid'");
			while ($row = mysqli_fetch_array($ret)) {
			?>
				<h2>Enter New Password</h2>

				<div class="form-group">
					<input type="password" class="form-control" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="true">
				</div>

				<div id="message">
					<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
					<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
					<p id="number" class="invalid">A <b>number</b></p>
					<p id="length" class="invalid">Minimum <b>8 characters</b></p>
				</div>

			<?php
			} ?>
			<div class="form-group">
				<button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
			</div>

			<div class="text-center">Back<a onclick="history.back()"><i class="fa fa-arrow-left"></i></a></div>

		</form>
	</div>
	<!-- hide only on xs -->

	<!-- visible only on xs -->
	<div class="signup-form d-block d-sm-none" style="zoom:80%">
		<form method="POST">
			<?php
			$eid = $_GET['editid'];
			$ret = mysqli_query($conn, "select * from users where ID='$eid'");
			while ($row = mysqli_fetch_array($ret)) {
			?>
				<h2>Enter New Password</h2>

				<div class="form-group">
					<input type="password" class="form-control" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="true">
				</div>

				<div id="message">
					<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
					<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
					<p id="number" class="invalid">A <b>number</b></p>
					<p id="length" class="invalid">Minimum <b>8 characters</b></p>
				</div>

			<?php
			} ?>
			<div class="form-group">
				<button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
			</div>

			<div class="text-center">Back<a onclick="history.back()"><i class="fa fa-arrow-left"></i></a></div>

		</form>
	</div>

	<!-- visible only on xs -->

	<!-- add external js file -->
	<script src="./user_password_edit.js"></script>
	<!-- j query -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- owl carousel -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</body>

</html>