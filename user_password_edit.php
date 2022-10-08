<?php
//Database Connection
session_start();

include("./conn.php");
include("./function.php");



$user_data = check_login($conn);

$userid = $user_data['user_id'];

if (isset($_POST['submit'])) {
	$eid = $_GET['editid'];
	//Getting Post Values
	$password = $_POST['password'];
	$oldpassword_1 = $_POST['oldpassword'];

	$get_old_password = "select user_password from users where user_id='$userid'";

	$run_old_password = mysqli_query($conn, $get_old_password);

	while ($row_old_password = mysqli_fetch_array($run_old_password)) {

		$oldpassword = $row_old_password['user_password'];
	}

	if ($oldpassword_1 == $oldpassword) {
		//Query for data updation
		$query = mysqli_query($conn, "update users set user_password='$password' where ID='$eid'");

		if ($query) {
			echo "<script>alert('You have successfully update the password');</script>";
			echo "<script type='text/javascript'> document.location ='./login_form/login.php'; </script>";
		} 
	}
	else {
		echo "<script>alert('Sorry Entered Old Password is Wrong!');</script>";
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



	<div class="signup-form" style="zoom:80%">
		<form method="POST">
			<?php
			$eid = $_GET['editid'];
			$ret = mysqli_query($conn, "select * from users where ID='$eid'");
			while ($row = mysqli_fetch_array($ret)) {
			?>
				<h2>Enter New Password</h2>

				<div class="form-group">
					<input type="text" class="form-control" name="oldpassword" required="true" placeholder="Enter Old Password">
				</div>


				<div class="form-group">
					<input type="text" class="form-control" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="true" placeholder="Enter New Password">
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

			<div class="text-center" id="back">Back<a onclick="history.back()"><i class="fa fa-arrow-left"></i></a></div>

		</form>
	</div><br><br>

	<!-- Footer -->

    <footer class="text-center text-lg-start text-dark">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <img class="footerimage" src="./header images/vogue x maniac png.png" alt="brand image">
                        <p class="text-white">
                        VogueXmaniac The Best place to buy your favorite products at affordable prices.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                        <p class="text-white">Mens Accessories</p>
                        <p class="text-white">Womens Accessories</p>
                        <p class="text-white">Smart Watches</p>
                        <p class="text-white">Footwears</p>
                        <p class="text-white">Analog Watches</p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <p class="text-white"><i class="fas fa-home text-white mr-3"></i> Kajamalai,Trichy,620023.</p>
                        <p class="text-white" id="address"><i class="fas fa-envelope text-white mr-3"></i>aslammr.9148@gmail.com </p>
                        <p class="text-white"><i class="fas fa-phone text-white mr-3"></i>+91 8526359590</p>
                        <p class="text-white"><i class="fas fa-phone text-white mr-3"></i>+91 7904860889</p>
                        <p class="text-white"><i class="fas fa-phone text-white mr-3"></i> +91 6383457659</p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-4 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

                        <!-- Facebook -->
                        <a class="mx-1 my-2" id="facebook" href="https://www.facebook.com/voguexmaniac/" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook" role="button"><i class="fab fa-facebook"></i></a>


                        <!-- youtube -->
                        <a class="mx-1 my-2" id="youtube" href="https://youtube.com/channel/UCvST9hfgXqtTiNJ-owE6DZQ" data-bs-toggle="tooltip" data-bs-placement="top" title="youtube" role="button"><i class="fab fa-youtube"></i></a>


                        <!-- Instagram -->
                        <a class="mx-1 my-2" id="instagram" href="https://instagram.com/vogue_x_maniac_me?igshid=YmMyMTA2M2Y=" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram" role="button"><i class="fab fa-instagram"></i></a>

                    </div>
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3">

            <p class="text-dark"> ©2022 Vogue X Maniac.All Rights Reserved
            </p>
            <img class="px-2" src="./payment_pics/2560px-MasterCard_Logo.svg-removebg-preview.png">
            <img class="px-2" src="./payment_pics/1200px-Visa.svg-removebg-preview.png">
            <img class="px-2" src="./payment_pics/paytm.png">
            <img class="px-2" src="./payment_pics/upi.png">
        </div>
        <!-- Copyright -->
    </footer>
    <!-- end of the footer -->
	
    <!-- add external js file -->
	<script src="./user_password_edit.js"></script>
	<!-- j query -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- owl carousel -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</body>

</html>