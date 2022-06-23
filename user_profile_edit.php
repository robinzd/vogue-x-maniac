<?php
//Database Connection
include('./conn.php');
if (isset($_POST['submit'])) {
	$eid = $_GET['editid'];
	//Getting Post Values
	$firstname= $_POST['firstname'];
	$lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
	



	//Query for data updation
	$query = mysqli_query($conn, "update users set first_name='$firstname',last_name='$lastname',user_email='$email',user_mob_no=' $mobile' where ID='$eid'");

	if ($query) {
		echo "<script>alert('You have successfully update the profile details');</script>";
		echo "<script type='text/javascript'> document.location ='user_profile.php'; </script>";
	} else {
		echo "<script>alert('Something Went Wrong. Please try again');</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
	<title>Edit Profile</title>
	<link rel="icon" type="image/png" href="./favicon/vogue_x_maniac_png_K8m_icon.ico" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<style>
		body {
			color: #fff;
			background: lightgray;
			font-family: 'Roboto', sans-serif;
		}

		.form-control {
			height: 40px;
			box-shadow: none;
			color: #969fa4;
		}

		.form-control:focus {
			border-color: #5cb85c;
		}

		.form-control,
		.btn {
			border-radius: 3px;
		}

		.signup-form {
			width: 450px;
			margin: 0 auto;
			padding: 30px 0;
			font-size: 15px;
		}

		.signup-form h2 {
			color: #636363;
			margin: 0 0 15px;
			position: relative;
			text-align: center;
		}

		.signup-form h2:before,
		.signup-form h2:after {
			content: "";
			height: 2px;
			width: 10%;
			background: #d4d4d4;
			position: absolute;
			top: 50%;
			z-index: 2;
		}

		.signup-form h2:before {
			left: 0;
		}

		.signup-form h2:after {
			right: 0;
		}

		.signup-form .hint-text {
			color: #999;
			margin-bottom: 30px;
			text-align: center;
		}

		.signup-form form {
			color: #999;
			border-radius: 3px;
			margin-bottom: 15px;
			background: #f2f3f7;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			padding: 30px;
			margin-top: 50%;
		}

		.signup-form .form-group {
			margin-bottom: 20px;
		}

		.signup-form input[type="checkbox"] {
			margin-top: 3px;
		}

		.signup-form .btn {
			font-size: 16px;
			font-weight: bold;
			min-width: 140px;
			outline: none !important;
		}

		.signup-form .row div:first-child {
			padding-right: 10px;
		}

		.signup-form .row div:last-child {
			padding-left: 10px;
		}

		.signup-form a {
			color: #fff;
			text-decoration: underline;
		}

		.signup-form a:hover {
			text-decoration: none;
		}

		.signup-form form a {
			color: #5cb85c;
			text-decoration: none;
		}

		.signup-form form a:hover {
			text-decoration: underline;
		}

		.fa-arrow-left {
			color: black;
            cursor: pointer;
		}

        button.btn.btn-success.btn-lg.btn-block{
            border-radius:20px;
        }

        button.btn.btn-success.btn-lg.btn-block:hover{
            background-color: black;
            color:white;
        }
	</style>
</head>

<body>
	<div class="signup-form">
		<form method="POST">
			<?php
			$eid = $_GET['editid'];
			$ret = mysqli_query($conn, "select * from users where ID='$eid'");
			while ($row = mysqli_fetch_array($ret)) {
			?>
				<h2>Edit User Profile</h2>

				<div class="form-group">
					<input type="text" class="form-control" name="firstname" value="<?php echo $row['first_name']; ?>" required="true">
				</div>

				<div class="form-group">
					<input type="text" class="form-control" name="lastname" value="<?php echo $row['last_name']; ?>" required="true">
				</div>

                <div class="form-group">
					<input type="text" class="form-control" name="email" value="<?php echo $row['user_email']; ?>" required="true">
				</div>

                <div class="form-group">
					<input type="text" class="form-control" name="mobile" value="<?php echo $row['user_mob_no']; ?>" required="true">
				</div>

				

				<?php
			} ?>
				<div class="form-group">
					<button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
				</div>

				<div class="text-center">Back<a onclick="history.back()"><i class="fa fa-arrow-left"></i></a></div>

		</form>






	</div>
</body>

</html>