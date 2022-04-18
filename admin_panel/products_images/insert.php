<?php
//Databse Connection file
include('dbconnection.php');
if (isset($_POST['submit'])) {
	//getting the post values
	$productimage = $_FILES["details_image"]["name"];
	$relatedproduct = $_POST['related'];
	$primaryimage = $_POST['primary'];

	// get the image extension
	$extension = substr($productimage, strlen($productimage) - 4, strlen($productimage));
	// allowed extensions
	$allowed_extensions = array(".jpg", "jpeg", ".png", ".gif");
	// Validation for allowed extensions .in_array() function searches an array for a specific value.
	if (!in_array($extension, $allowed_extensions)) {
		echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
	} else {
		//rename the image file
		$imgnewfile = md5($imgfile) . time() . $extension;
		// Code for move image into directory
		move_uploaded_file($_FILES["details_image"]["tmp_name"], "images/" . $imgnewfile);
		// Query for data insertion
		$query = mysqli_query($conn, "insert into products_images(details_image,related_product,primary_image) value ('$imgnewfile','$relatedproduct','$primaryimage')");
		if ($query) {
			echo "<script>alert('You have successfully inserted the product image');</script>";
			echo "<script type='text/javascript'> document.location ='productsimages.php'; </script>";
		} else {
			echo "<script>alert('Something Went Wrong. Please try again');</script>";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
	<title>Add Product Image</title>
	<link rel="icon" type="image/png" href="../favicon/icons8-admin-settings-male-48.png"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<style>
		body {
			color: #fff;
			background: #63738a;
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

		.fa-home {
			color: black;
		}

		p{
			color: red;
			font-size: 10px;
		}

	</style>
</head>

<body>
	<div class="signup-form">
		<form method="POST" enctype="multipart/form-data">
			<h2>Insert Product Image</h2>
			<div class="form-group">
				<input type="file" class="form-control" name="details_image" required="true">
				<span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
			</div>

			<div class="form-group">
				<!-- <label class="form-control" for="inputGroupSelect01" name="related"></label> -->
				<select class="form-control" id="inputGroupSelect01" name="related">
					<?php

					$get_products = mysqli_query($conn, "select * from products_details");
					$cnt = 1;
					$row = mysqli_num_rows($get_products);
					if ($row > 0) {
						while ($row = mysqli_fetch_array($get_products)){
					?>
							<option selected><?php echo $row['ID']."|".$row['product_title']; ?></option>
					<?php


							$cnt = $cnt + 1;
						}
					} ?>

				</select>
				<span style="color:red; font-size:12px;">*product id (products management) and this number wants to be same</span>
			</div>

	

			<div class="form-group">
				<input type="text" class="form-control" name="primary" placeholder="Enter Your Primary Image No" required="true">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
			</div>

			<div class="text-center">Back To Home <a href="productsimages.php"><i class="fa fa-home"></i></a></div>
		</form>

	</div>
</body>

</html>