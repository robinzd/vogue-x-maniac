<?php
//Database Connection
include('./conn.php');
if (isset($_POST['submit'])) {
	$eid = $_GET['editid'];
	//Getting Post Values
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];


	$get_email = "select user_email from users where user_email='$email'";

	$run_email = mysqli_query($conn, $get_email);

	while ($row_email = mysqli_fetch_array($run_email)) {

		$email_1 = $row_email['user_email'];
	}
	//Query for data updation

	if ($email == $email_1) {
		$query = mysqli_query($conn, "update users set first_name='$firstname',last_name='$lastname',user_mob_no='$mobile' where ID='$eid'");
		echo "<script>alert('Sorry This Email Address Is already Exsists So we cannot Update Only email');</script>";
		echo "<script type='text/javascript'> document.location ='user_profile.php'; </script>";
	} elseif ($email !== $email_1) {
		$query1 = mysqli_query($conn, "update users set first_name='$firstname',last_name='$lastname',user_email='$email',user_mob_no=' $mobile' where ID='$eid'");
		echo "<script>alert('You have successfully update the profile details');</script>";
		echo "<script type='text/javascript'> document.location ='user_profile.php'; </script>";
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
	<!-- bootsstrap cdn -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- font awesome cdn -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- link the external stylesheet -->
	<link rel="stylesheet" type="text/css" href="./user_profile_edit.css">

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

	<div class="signup-form" style="zoom:80%" id="myform">
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

	<!-- j query -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- owl carousel -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</body>

</html>