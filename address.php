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

  <!-- navbar  ends -->
 


  <form class="row g-3 needs-validation" novalidate>
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">First name</label>
      <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 position-relative">
      <label for="validationTooltip02" class="form-label">Last name</label>
      <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 position-relative">
      <label for="validationTooltipUsername" class="form-label">Username</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
        <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
        <div class="invalid-tooltip">
          Please choose a unique and valid username.
        </div>
      </div>
    </div>
    <div class="col-md-6 position-relative">
      <label for="validationTooltip03" class="form-label">City</label>
      <input type="text" class="form-control" id="validationTooltip03" required>
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 position-relative">
      <label for="validationTooltip04" class="form-label">State</label>
      <select class="form-select" id="validationTooltip04" required>
        <option selected disabled value="">Choose...</option>
        <option>...</option>
      </select>
      <div class="invalid-tooltip">
        Please select a valid state.
      </div>
    </div>
    <div class="col-md-3 position-relative">
      <label for="validationTooltip05" class="form-label">Zip</label>
      <input type="text" class="form-control" id="validationTooltip05" required>
      <div class="invalid-tooltip">
        Please provide a valid zip.
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
  </form>

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

  <!-- link the external stylesheet -->
  <script src="./address.js"></script>
  <!-- j query -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- owl carousel -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>

</html>