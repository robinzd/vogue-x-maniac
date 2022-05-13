<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Payment Details</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css1/raleway-font.css">
	<link rel="stylesheet" type="text/css" href="fonts1/material-design-iconic-font/css/material-design-iconic-font.min.css">
	 <!-- fav icon -->
	 <link rel="icon" type="image/png" href="./favicon/vogue_x_maniac_png_K8m_icon.ico" />
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	 <!-- font awesome cdn -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css1/style.css"/>
</head>
<body>
	<!-- navbar starts -->


    <?php include "./index.header.php"; ?>

    <!-- navbar  ends -->

	<div class="page-content" style="background-image: url('images/wizard-v1.jpg')">
		<div class="wizard-v1-content">
			<div class="wizard-form">
		        <form class="form-register" id="form-register" action="#" method="post">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
			            	<span class="step-number">Step 1</span>
			            	<span class="step-text">Address Infomation</span>
			            </h2>
			            <section>
			                <div class="inner">
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="username">Username*</label>
										<input type="text" placeholder="Username" class="form-control" id="username" name="username" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="email">Email Address*</label>
										<input type="email" placeholder="Your Email" class="form-control" id="email" name="email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<label for="password">Password*</label>
										<input type="password" placeholder="Password" class="form-control" id="password" name="password" required >
									</div>
									<div class="form-holder">
										<label for="confirm_password">Confirm Password*</label>
										<input type="password" placeholder="Confirm Password" class="form-control" id="confirm_password" name="confirm_password" required>
									</div>
								</div>
							</div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
			            	<span class="step-number">Step 2</span>
			            	<span class="step-text">Payment Infomation</span>
			            </h2>
			            <section>
			                <div class="inner">
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="card-type">Card Type</label>
										<select name="card-type" id="card-type" class="form-control">
											<option value="" disabled selected>Select Credit Card Type</option>
											<option value="Business Credit Cards">Business Credit Cards</option>
											<option value="Limited Purpose Cards">Limited Purpose Cards</option>
											<option value="Prepaid Cards">Prepaid Cards</option>
											<option value="Charge Cards">Charge Cards</option>
											<option value="Student Credit Cards">Student Credit Cards</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-3">
										<label for="card-number">Card Number</label>
										<input type="text" name="card-number" class="card-number" id="card-number" placeholder="ex: 489050625008xxxx">
									</div>
									<div class="form-holder">
										<label for="cvc">CVC</label>
										<input type="text" name="cvc" class="cvc" id="cvc" placeholder="xxx">
									</div>
								</div>
								<div class="form-row form-row-2">
									<div class="form-holder">
										<label for="month">Expiry Month</label>
										<select name="month" id="month" class="form-control">
											<option value="" disabled selected>Expiry Month</option>
											<option value="January">January</option>
											<option value="February">February</option>
											<option value="March">March</option>
											<option value="February">February</option>
											<option value="April">April</option>
											<option value="May">May</option>
										</select>
									</div>
									<div class="form-holder">
										<label for="year">Expiry Year</label>
										<select name="year" id="year" class="form-control">
											<option value="" disabled selected>Expiry Year</option>
											<option value="2018">2018</option>
											<option value="2017">2017</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
										</select>
									</div>
								</div>
							</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
			            	<span class="step-number">Step 3</span>
			            	<span class="step-text">Confirm Your Details</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Comfirm Details</h3>
								<div class="form-row table-responsive">
									<table class="table">
										<tbody>
											<tr class="space-row">
												<th>Username:</th>
												<td id="username-val"></td>
											</tr>
											<tr class="space-row">
												<th>Email Address:</th>
												<td id="email-val"></td>
											</tr>
											<tr class="space-row">
												<th>Card Type:</th>
												<td id="card-type-val"></td>
											</tr>
											<tr class="space-row">
												<th>Card Number:</th>
												<td id="card-number-val"></td>
											</tr>
											<tr class="space-row">
												<th>CVC:</th>
												<td id="cvc-val"></td>
											</tr>
											<tr class="space-row">
												<th>Expiry Month:</th>
												<td id="month-val"></td>
											</tr>
											<tr class="space-row">
												<th>Expiry Year:</th>
												<td id="year-val"></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
			            </section>
		        	</div>
		        </form>
			</div>
		</div>
	</div>

	<!-- Footer -->

    <footer class="text-center text-lg-start text-dark" style="background-color:lightgrey">
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
                           vogue-x-maniac is the one of the leading ecommerce website
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                        <p class="text-white">MDBootstrap</p>
                        <p class="text-white">MDWordPress</p>
                        <p class="text-white">BrandFlow</p>
                        <p class="text-white">Angular</p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <p class="text-white"><i class="fas fa-home text-white mr-3"></i> New York, NY 10012, US</p>
                        <p class="text-white" id="address"><i class="fas fa-envelope text-white mr-3"></i> inf0@text-white@gmail.com
                        </p>
                        <p class="text-white"><i class="fas fa-phone text-white mr-3"></i> + 01 234 567 88</p>
                        <p class="text-white"><i class="fas fa-print text-white mr-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-4 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

                        <!-- Facebook -->
                        <a class="btn pmd-btn-fab pmd-ripple-effect btn-primary pmd-btn-flat mx-1 my-2" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook" role="button"><i class="fab fa-facebook"></i></a>

                        <!-- Twitter -->
                        <a class="btn pmd-btn-fab pmd-ripple-effect btn-info pmd-btn-flat mx-1 my-2" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter" role="button"><i class="fab fa-twitter"></i></a>

                        <!-- youtube -->
                        <a class="btn pmd-btn-fab pmd-ripple-effect btn-secondary pmd-btn-flat mx-1 my-2" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="youtube" role="button"><i class="fab fa-youtube"></i></a>


                        <!-- Instagram -->
                        <a class="btn pmd-btn-fab pmd-ripple-effect btn-danger pmd-btn-flat mx-1 my-2" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram" role="button"><i class="fab fa-instagram"></i></a>

                    </div>
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(255, 255, 255, 0.096)">

            <p class="text-dark"> ©2022 Vogue X Maniac.All Rights Reserved
            </p>
            <img class="px-2" src="./payment_pics/2560px-MasterCard_Logo.svg-removebg-preview.png">
            <img class="px-2" src="./payment_pics/1200px-Visa.svg-removebg-preview.png">
            <img class="px-2" src="./payment_pics/paypal-logo-removebg-preview.png">
        </div>
        <!-- Copyright -->
    </footer>
    <!-- end of the footer -->


	<script src="js1/jquery-3.3.1.min.js"></script>
	<!--budle.js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- bundle.js -->
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script src="js1/jquery.steps.js"></script>
	<script src="js1/main.js"></script>
</body>
</html>