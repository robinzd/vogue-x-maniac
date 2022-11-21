<?php

include("./conn.php");

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Address</title>
  <!-- fav icon -->
  <link rel="icon" type="image/png" href="./favicon/vogue_x_maniac_png_K8m_icon.ico" />
  <!-- bootsstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- font awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <!-- link the external stylesheet -->
  <link rel="stylesheet" type="text/css" href="./address.css">

</head>

<body>
  <!-- navbar starts -->

  <?php

  include "./index.header.php";

  ?>

  <!-- back to top starts -->


  <?php include "./back_to_top.php"; ?>

  <!--back to top ends -->


  <!-- navbar  ends -->
  <!-- hide only on xs -->
  <div class="form-body d-none d-sm-block" id="myaddress">
    <div class="row">
      <div class="form-holder">
        <div class="form-content">
          <div class="form-items">
            <h3 class="text-center">Address Details</h3>
            <p class="text-center">Fill in the data below.</p>
            <form class="requires-validation" novalidate method="POST" action="./bill.php">

              <div class="col col-md-12">
                <input class="form-control" type="text" name="fullname" placeholder="Full Name" required>
                <div class="invalid-feedback">Username field cannot be blank!</div>
              </div>

              <div class="col-md-12">
                <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                <div class="invalid-feedback">Email field cannot be blank!</div>
              </div>

              <div class="col-md-12">
                <input class="form-control" type="text" name="street" placeholder="Address" required>
                <div class="invalid-feedback">Address field cannot be blank!</div>
              </div>

              <div class="col-md-12">
                <input class="form-control" type="text" name="landmark" placeholder="Landmark" required>
                <div class="invalid-feedback">Landmark field cannot be blank!</div>
              </div>

              <div class="col-md-12">
                <input class="form-control" type="text" name="city" placeholder="City" required>
                <div class="invalid-feedback">City field cannot be blank!</div>
              </div>

              <div class="col-md-12">
                <input class="form-control" type="number" name="pincode" placeholder="Pincode" required>
                <div class="invalid-feedback">Pincode field cannot be blank!</div>
              </div>

              <div class="col-md-12">
                <select class="form-control" type="text" name="state" required>
                  <option value="" disabled selected>Select Your State</option>
                  <?php

                  $get_charges = mysqli_query($conn, "select * from shipping_charges");
                  $cnt = 1;
                  $row = mysqli_num_rows($get_charges);
                  if ($row > 0) {
                    while ($row = mysqli_fetch_array($get_charges)) {
                  ?>

                      <option value="<?php echo $row['user_state']; ?>"><?php echo $row['user_state']; ?></option>

                  <?php


                      $cnt = $cnt + 1;
                    }
                  } ?>

                </select>
                <div class="invalid-feedback">Select anyone</div>
              </div><br>


              <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-outline-success" type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- hide only on xs -->

  <!-- visible only on xs -->
  <div class="form-body  d-block d-sm-none" style="zoom:70%" id="myaddress1">
    <div class="row">
      <div class="form-holder">
        <div class="form-content">
          <div class="form-items">
            <h3 class="text-center">Address Details</h3>
            <p class="text-center">Fill in the data below.</p>
            <form class="requires-validation" novalidate method="POST" action="./bill.php">

              <div class="col col-md-12">
                <input class="form-control" type="text" name="fullname" placeholder="Full Name" required>
                <div class="invalid-feedback">Username field cannot be blank!</div>
              </div>

              <div class="col-md-12">
                <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                <div class="invalid-feedback">Email field cannot be blank!</div>
              </div>

              <div class="col-md-12">
                <input class="form-control" type="text" name="street" placeholder="Address" required>
                <div class="invalid-feedback">Address field cannot be blank!</div>
              </div>

              <div class="col-md-12">
                <input class="form-control" type="text" name="landmark" placeholder="Landmark" required>
                <div class="invalid-feedback">Landmark field cannot be blank!</div>
              </div>

              <div class="col-md-12">
                <input class="form-control" type="text" name="city" placeholder="City" required>
                <div class="invalid-feedback">City field cannot be blank!</div>
              </div>

              <div class="col-md-12">
                <input class="form-control" type="number" name="pincode" placeholder="Pincode" required>
                <div class="invalid-feedback">Pincode field cannot be blank!</div>
              </div>

              <div class="col-md-12">
                <select class="form-control" type="text" name="state" required>
                  <option value="" disabled selected>Select Your State</option>
                  <?php

                  $get_charges = mysqli_query($conn, "select * from shipping_charges");
                  $cnt = 1;
                  $row = mysqli_num_rows($get_charges);
                  if ($row > 0) {
                    while ($row = mysqli_fetch_array($get_charges)) {
                  ?>

                      <option value="<?php echo $row['user_state']; ?>"><?php echo $row['user_state']; ?></option>

                  <?php


                      $cnt = $cnt + 1;
                    }
                  } ?>

                </select>
                <div class="invalid-feedback">Select anyone</div>
              </div><br>

              <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-outline-success" type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- visible only on xs -->

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

  <!-- link the external stylesheet -->
  <script src="./address.js"></script>
  <!-- j query -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- owl carousel -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>

</html>