<?php
session_start();

include("./conn.php");
include("./function.php");



$user_data = check_login($conn);

$userid = $user_data['user_id'];

$fullname = $_POST["fullname"];
$email =  $_POST["email"];
$street =  $_POST["street"];
$landmark =  $_POST["landmark"];
$city =  $_POST["city"];
$pincode = $_POST["pincode"];


$get_userscart = "select * from products_cart where user_id=$userid";

$run_userscart = mysqli_query($conn, $get_userscart);


$order_id = random_num(10);



if (!empty($fullname) && !empty($email) && !empty($street) && !empty($landmark) && !empty($city) && !empty($pincode)) {


    $query_address = mysqli_query($conn, "INSERT INTO `users_address`( `user_id`, `user_fullname`, `user_email`, `user_address`, `user_landmark`,`user_city`,`user_pincode`) VALUES ('$userid ','$fullname','$email','$street','$landmark','$city','$pincode')");


    if ($query_address) {



        while ($row_userscart = mysqli_fetch_array($run_userscart)) {

            $product_id = $row_userscart['product_id'];
            $product_quantity = $row_userscart['product_quantity'];
            $product_size = $row_userscart['product_size'];

            $query_order = mysqli_query($conn, "INSERT INTO `users_order`( `user_id`, `order_id`, `product_id`, `product_quantity`, `product_size`) VALUES ('$userid ','$order_id','$product_id','$product_quantity ','$product_size')");
        }
    } else {

        echo "<script>alert('Something Went Wrong!');</script>";
    }
} else {

    echo "<script>alert('Something Went Wrong!');</script>";
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
    <!-- fav icon -->
    <link rel="icon" type="image/png" href="./favicon/vogue_x_maniac_png_K8m_icon.ico" />
    <!-- bootsstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- link the external stylesheet -->
    <link rel="stylesheet" type="text/css" href="./bill.css">
    
</head>

<body>

<?php

  include "./index.header.php";

  ?>

  <!-- back to top starts -->


  <?php include "./back_to_top.php"; ?>

  <!--back to top ends -->

                           
<div class="container mt-5 mb-5">

        <div class="row d-flex justify-content-center">

            <div class="col-md-8">

                <div class="card">


                      

                        <div class="invoice p-5">

                            <h5>Your order Confirmed!</h5>

                            <span class="font-weight-bold d-block mt-4">Hello, Chris</span>
                            <span>You order has been confirmed and will be shipped in next two days!</span>

                            <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">

                                <table class="table table-borderless">
                                    
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="py-2">

                                                    <span class="d-block text-muted">Order Date</span>
                                                <span>12 Jan,2018</span>
                                                    
                                                </div>
                                            </td>

                                            <td>
                                                <div class="py-2">

                                                    <span class="d-block text-muted">Order No</span>
                                                <span>MT12332345</span>
                                                    
                                                </div>
                                            </td>

                                         

                                            <td>
                                                <div class="py-2">

                                                    <span class="d-block text-muted">Shiping Address</span>
                                                <span>414 Advert Avenue, NY,USA</span>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>




                                
                            </div>




                                <div class="product border-bottom table-responsive">

                                    <table class="table table-borderless">

                                    <tbody>
                                        <tr>
                                            <td width="20%">
                                            
                                            <img src="https://i.imgur.com/u11K1qd.jpg" width="90">

                                        </td>
                                    
                                        <td width="60%">
                                            <span class="font-weight-bold">Men's Sports cap</span><br>
                                            <div class="product-qty">
                                                <span class="d-block">Quantity:1</span>
                                               
                                                
                                            </div>
                                        </td>
                                        <td width="20%">
                                            <div class="text-right">
                                                <span class="font-weight-bold">$67.50</span>
                                            </div>
                                        </td>
                                        </tr>


                                        <tr>
                                            <td width="20%">
                                            
                                            <img src="https://i.imgur.com/SmBOua9.jpg" width="70">

                                        </td>
                                    
                                        <td width="60%">
                                            <span class="font-weight-bold">Men's Collar T-shirt</span><br>
                                            <div class="product-qty">
                                                <span class="d-block">Quantity:1</span>
                                               
                                                
                                            </div>
                                        </td>
                                        <td width="20%">
                                            <div class="text-right">
                                                <span class="font-weight-bold">$77.50</span>
                                            </div>
                                        </td>
                                        </tr>
                                    </tbody> 
                                        
                                    </table>
                                    


                                </div>



                                <div class="row d-flex justify-content-end">

                                    <div class="col-md-5">

                                        <table class="table table-borderless">

                                            <tbody class="totals">

                                                <tr>
                                                    <td>
                                                        <div class="text-left">

                                                            <span class="text-muted">Subtotal</span>
                                                            
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-right">
                                                            <span>$168.50</span>
                                                        </div>
                                                    </td>
                                                </tr>


                                                 <tr>
                                                    <td>
                                                        <div class="text-left">

                                                            <span class="text-muted">Shipping Fee</span>
                                                            
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-right">
                                                            <span>$22</span>
                                                        </div>
                                                    </td>
                                                </tr>


                                                 <tr>
                                                    <td>
                                                        <div class="text-left">

                                                            <span class="text-muted">Tax Fee</span>
                                                            
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-right">
                                                            <span>$7.65</span>
                                                        </div>
                                                    </td>
                                                </tr>


                                                 <tr>
                                                    <td>
                                                        <div class="text-left">

                                                            <span class="text-muted">Discount</span>
                                                            
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-right">
                                                            <span class="text-success">$168.50</span>
                                                        </div>
                                                    </td>
                                                </tr>


                                                 <tr class="border-top border-bottom">
                                                    <td>
                                                        <div class="text-left">

                                                            <span class="font-weight-bold">Subtotal</span>
                                                            
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-right">
                                                            <span class="font-weight-bold">$238.50</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                            
                                        </table>
                                        
                                    </div>
                                    


                                </div>


                                <p>We will be sending shipping confirmation email when the item shipped successfully!</p>
                                <p class="font-weight-bold mb-0">Thanks for shopping with us!</p>
                                <span>Nike Team</span>



                            

                        </div>


                        


            
        </div>
                
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


    <!-- j query -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- owl carousel -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


</body>

</html>