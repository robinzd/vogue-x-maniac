<?php
session_start();

include("./conn.php");
include("./function.php");

$user_data = check_login($conn);

$userid = $user_data['user_id'];

$order_id = $_POST["order_id"];
$status = $_POST["status"];

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dasboard</title>
    <!-- fav icon -->
    <link rel="icon" type="image/png" href="./favicon/vogue_x_maniac_png_K8m_icon.ico" />
    <!-- bootsstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- link the external stylesheet -->
    <link rel="stylesheet" type="text/css" href="user_dashboard.css">

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



    <div class="container mt-4">
        <div class="row">

            <?php

            $get_users = "select * from users where user_id=$userid";

            $run_users = mysqli_query($conn, $get_users);



            while ($row_users = mysqli_fetch_array($run_users)) {
                $firstname = $row_users['first_name'];
                $lastname = $row_users['last_name'];
                $useremail = $row_users['user_email'];
            }

            ?>

            <div class="col-lg-12 my-lg-0 my-1">
                <div id="main-content" class="bg-white border">
                    <div class="d-flex flex-column">
                        <div class="h5">Hello <?php echo $firstname . " " . $lastname ?>,</div>
                        <div>Logged in as:<?php echo $useremail ?></div>
                    </div>
                    <div class="col-12 d-flex my-4 flex-wrap">
                        <a href="./user_profile.php">
                            <div class="box me-4 my-1 bg-light">
                                <img src="./159-1595553_profile-blue-logo-png-removebg-preview.png" alt="">
                                <div class="d-flex align-items-center mt-2">
                                    <div class="tag">Your Profile</div>
                                </div>
                            </div>
                        </a>
                        <a href="./user_password.php">
                            <div class="box me-4 my-1 bg-light">
                                <img src="./reset-password-icon-29.jpg" alt="">
                                <div class="d-flex align-items-center mt-2">
                                    <div class="tag">Password management</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="text-uppercase">My orders</div>
                    <?php

                    $date = date("d M,Y");

                    $time = new DateTime("now", new DateTimeZone('Asia/Calcutta'));

                    $final_time = $time->format('H:i');

                    $real_status = "TXN_SUCCESS";



                    $get_orders = "select * from users_order where user_id = $userid and order_id = $order_id ";

                    $run_orders = mysqli_query($conn, $get_orders);



                    while ($row_orders = mysqli_fetch_array($run_orders)) {
                        $order_no = $row_orders['order_id'];
                        $productid = $row_orders['product_id'];



                        $get_product_name = "select * from products_details where ID = $productid";

                        $run__product_name = mysqli_query($conn, $get_product_name);



                        while ($row_product_name = mysqli_fetch_array($run__product_name)) {

                            $product_title = $row_product_name['product_title'];

                            if ($status ==  $real_status) {
                                echo "<div class='order my-3 bg-light'>
                        <div class='row'>
                            <div class='col-lg-12'>
                                <div class='d-flex flex-column justify-content-between order-summary'>
                                    <div class='d-flex align-items-center'>
                                        <div class='text-uppercase'>Order No:$order_no</div>
                                        <div class='green-label ms-auto text-capitalize'>paid</div>
                                        </div>
                                    <div class='fs-8'>Product Name:$product_title</div>
                                    <div class='fs-8'>$date|$final_time</div>
                                </div>
                            </div>
                            <div class='col-lg-12'>
                                <div class='d-sm-flex align-items-sm-start justify-content-sm-between'>
                            <div class='status'>Status : Ordered</div>
                        <div class='btn text-capitalize'>order info</div>
                                </div>
                            </div>
                        </div>
                    </div>";
                            } else {
                                echo "<div class='order my-3 bg-light'>
                        <div class='row'>
                            <div class='col-lg-12'>
                                <div class='d-flex flex-column justify-content-between order-summary'>
                                    <div class='d-flex align-items-center'>
                                        <div class='text-uppercase'>Order No:$order_no</div>
                                        <div class='red-label ms-auto text-capitalize'>Cancelled</div>
                                        </div>
                                    <div class='fs-8'>Product Name:$product_title</div>
                                    <div class='fs-8'>$date|$final_time</div>
                                </div>
                            </div>
                            <div class='col-lg-12'>
                                <div class='d-sm-flex align-items-sm-start justify-content-sm-between'>
                            <div class='status'>Status : Failed</div>
                        <div class='btn text-capitalize'>order info</div>
                                </div>
                            </div>
                        </div>
                    </div>";
                            }
                        }
                    }

                    ?>
                </div>
            </div>
        </div>

    </div><br>


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