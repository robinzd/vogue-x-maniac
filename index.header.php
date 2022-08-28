<?php
session_start();

include("./conn.php");


$user_id = $_SESSION['user_id'];


$get_user = "select * from users WHERE user_id='$user_id'";


if ($get_user) {
	$select_rows = mysqli_query($conn, "select * from products_cart where user_id='$user_id'");

	$row_count = mysqli_num_rows($select_rows);
}

?>




<!doctype html>
<html lang="en">

<head>
	<title>Website menu 07</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- bootsstrap cdn -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="style.css">



</head>

<body>
	<section class="ftco-section py-0">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<!-- <h2 class="heading-section">Website menu #07</h2> -->
				</div>
			</div>
		</div>

		<div class="container-fluid px-md-5">
			<div class="row justify-content-between">
				<div class="col-md-8 order-md-last">
					<div class="row">
						<div class="col-md-6 text-center">
							<a class="navbar-brand" href="./index.php"><img src="./header images/vogue x maniac png.png" id="imageid"></a>
						</div>
						<div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
							<form action="shop.php" method="Post" class="searchform order-lg-last">
								<div class="form-group d-flex">
									<input type="text" name="search" class="form-control pl-3" placeholder="Search">
									<button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex">
					<div class="social-media">
						<p class="mb-0 d-flex">
							<a href="./user_dashboard.php" class="d-flex align-items-center justify-content-center"><span class="fa fa-user"><i class="sr-only">Facebook</i></span></a>
							<?php
							if ($user_id == 0) {
                                echo "<a href='product_cart.php'  class='d-flex align-items-center justify-content-center'><span class='fa fa-cart-shopping'><i class='sr-only'>Twitter</i></span></a>";
							} elseif ($row_count > 0) {

								echo "<a href='product_cart.php'  class='d-flex align-items-center justify-content-center'><span class='fa fa-cart-shopping'><i class='sr-only'>Twitter</i></span><span id='product'>$row_count</span></a>";
							} else {
								echo "<a href='product_cart.php'  class='d-flex align-items-center justify-content-center'><span class='fa fa-cart-shopping'><i class='sr-only'>Twitter</i></span></a>";
							}



							?>

							<a href="./logout.php" class="d-flex align-items-center justify-content-center"><span class="fa fa-sign-out"><i class="sr-only">Instagram</i></span></a>
							<?php
							$get_is_admin = "select is_admin from users where is_admin='1' AND user_id='$user_id'";

							$run_is_admin = mysqli_query($conn, $get_is_admin);



							while ($row_is_admin = mysqli_fetch_array($run_is_admin)) {


								$admin = $row_is_admin['is_admin'];
							}
							if ($admin > 0) {
								echo "<a href='./admin_panel/admin_panel.php' class='d-flex align-items-center justify-content-center'><span class='fa fa-dribbble'><i class='sr-only'>Dribbble</i></span></a>";
							}
							?>
						</p>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
			<div class="container-fluid">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span> Menu
				</button>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav m-auto">
						<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
							<div class="dropdown-menu" aria-labelledby="dropdown04">
								<?php


								$get_product_category = "select product_category from products_details";

								$run_product_category = mysqli_query($conn, $get_product_category);



								while ($row_product_category = mysqli_fetch_array($run_product_category)) {


									$categoryname = $row_product_category['product_category'];

									$category_replace = str_replace(" ", "-", $row_product_category['product_category']);






									echo "<a class='dropdown-item' href='shop.php?category_name=$category_replace'>$categoryname</a>







";
								}


								?>






							</div>
						</li>
						<li class="nav-item"><a href="shop.php" class="nav-link">Shop</a></li>
						<li class="nav-item"><a href="aboutus.php" class="nav-link">About Us</a></li>
						<li class="nav-item"><a href="contactus.php" class="nav-link">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END nav -->

	</section>

	<script src="./js header/bootstrap.min.js"></script>
	<script src="./js header/jquery.min.js"></script>
	<script src="./js header/main.js"></script>
	<script src="./js header/popper.js"></script>


</body>

</html>