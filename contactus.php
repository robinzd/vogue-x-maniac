<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- fav icon -->
   <link rel="icon" type="image/png" href="./favicon/vogue_x_maniac_png_K8m_icon.ico" />
   <!-- bootsstrap cdn -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- font awesome cdn -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- link css page -->
   <link rel="stylesheet" type="text/css" href="contactus.css">

   <title>Contact Us</title>
</head>

<body>

   <!-- navbar starts -->


   <?php include "./index.header.php"; ?>

   <!-- navbar  ends -->

   <!-- back to top starts -->


   <?php include "./back_to_top.php"; ?>

   <!--back to top ends -->


   <section class="container mt-5">
      <!--Contact heading-->
      <div class="row">
         <!--Grid column-->
         <div class="col-sm-12 mb-4 col-md-5">
            <!--Form with header-->
            <div class="card border-success rounded-0">
               <div class="card-header p-0">
                  <div class="text-center py-2">
                     <h3><i class="fa fa-envelope"></i> Write to us:</h3>
                     <p class="m-0">We’ll write rarely,but only the best content.</p>
                  </div>
               </div>
               <div class="card-body p-3">

                  <div class="form-group">
                     <label> Your name:</label>
                     <div class="input-group">
                        <input type="text" name="name" class="form-control" id="inlineFormInputGroupUsername" placeholder="Your name"  data-validate="first name is required">
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Your email:</label>
                     <div class="input-group mb-2 mb-sm-0">
                        <input type="email" name="email" class="form-control" id="inlineFormInputGroupUsername" placeholder="Email" data-validate="Valid email is required: ex@abc.xyz">
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Subject:</label>
                     <div class="input-group mb-2 mb-sm-0">
                        <textarea type="text" name="subject" class="form-control" id="inlineFormInputGroupUsername" placeholder="Subject"  data-validate="Subject is required"></textarea>
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Message:</label>
                     <div class="input-group mb-2 mb-sm-0">
                        <textarea type="text" class="form-control" name="message" id="inlineFormInputGroupUsername" placeholder="message"  data-validate="Message is required"></textarea>
                     </div>
                  </div>
                  <div class="d-grid gap-2">
                     <button type="submit" name="submit" value="submit" class="btn btn-success rounded-0 py-2 my-2" type="button">Submit</button>
                  </div>
               </div>

            </div>
         </div>
         <!--Grid column-->

         <!--Grid column-->
         <div class="col-sm-12 col-md-7">
            <!--Google map-->
            <div class="mb-4">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d117223.77996815204!2d85.3213263!3d23.3432048!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11b5a9b0042eef56!2sourcita.com!5e0!3m2!1sen!2sin!4v1589706571407!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <!--Buttons-->
            <div class="row text-center">
               <div class="col-md-4">
                  <a class=" px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-map-marker"></i></a>
                  <p class="my-0">Vogue X Maniac,</p>
                  <p class="my-0">Kajamalai,</p>
                  <p>Trichy-620020.</p>
               </div>
               <div class="col-md-4">
                  <a class=" px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
                  <p>+91-6381945168</p>
               </div>
               <div class="col-md-4">
                  <a class="px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
                  <p>voguexmaniac@gmail.com</p>
               </div>
            </div>
         </div>
         <!--Grid column-->
      </div>
   </section>

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
                     Here you can use rows and columns to organize your footer
                     content. Lorem ipsum dolor sit amet, consectetur adipisicing
                     elit.
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
         <p>
            <img class="px-2" src="./payment_pics/2560px-MasterCard_Logo.svg-removebg-preview.png">
            <img class="px-2" src="./payment_pics/1200px-Visa.svg-removebg-preview.png">
            <img class="px-2" src="./payment_pics/paypal-logo-removebg-preview.png">
      </div>
      <!-- Copyright -->
   </footer>
   <!-- end of the footer -->











   <!-- j query -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</body>

</html>