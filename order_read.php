<?php
session_start();

include("./conn.php");
include("./function.php");



$user_data = check_login($conn);

$userid = $user_data['user_id'];


$order_id_1 = $_POST["orderid"];
$order_date = $_POST['date'];
$status = $_POST['status'];

?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Order Bill</title>
    <!-- fav icon -->
    <link rel="icon" type="image/png" href="./favicon/vogue_x_maniac_png_K8m_icon.ico" />
    <!-- bootsstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- link the external stylesheet -->
    <link rel="stylesheet" type="text/css" href="./bill1.css">

</head>

<body>

    <?php

    include "./index.header.php";

    ?>

    <!-- back to top starts -->


    <?php include "./back_to_top.php"; ?>

    <!--back to top ends -->

    <!-- hidden only on xs -->

    <div class="container mt-5 mb-5  d-none d-sm-block">

        <div class="row d-flex justify-content-center">

            <div class="col-md-8">

                <div class="card">

                    <?php


                    $get_useraddress = "select * from users_address where order_id=$order_id_1";

                    $run_useraddress  = mysqli_query($conn, $get_useraddress);

                    while ($row_useraddress = mysqli_fetch_array($run_useraddress)) {

                        $user_name = $row_useraddress['user_fullname'];
                        $user_street = $row_useraddress['user_address'];
                        $user_landmark = $row_useraddress['user_landmark'];
                        $user_city = $row_useraddress['user_city'];
                        $user_pincode = $row_useraddress['user_pincode'];
                        $user_state = $row_useraddress['user_state'];
                    }

                    $get_userorder = "select * from users_order where order_id=$order_id_1";

                    $run_userorder  = mysqli_query($conn,  $get_userorder);

                    while ($row_userorder = mysqli_fetch_array($run_userorder)) {

                        $order_id = $row_userorder['order_id'];
                    }



                    ?>


                    <div class="invoice p-5">

                        <h5 class="placed">Your order Placed!</h5>
                        <span class="font-weight-bold d-block mt-4">Hello,Mr/Mrs. <?php echo $user_name; ?></span>
                        <span>You order has been confirmed and will be shipped in next two days!</span>

                        <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">

                            <table class="table table-borderless">

                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="py-2 text-left">
                                                <span class="d-block text-muted" id="orderdate">Order Date</span>
                                                <span id="date"><?php echo $order_date; ?></span>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="py-2 text-center">
                                                <span class="d-block text-muted" id="orderno">Order No</span>
                                                <span class="font-weight-bold" id="order"><?php echo $order_id; ?></span>
                                            </div>
                                        </td>



                                        <td>
                                            <div class="py-2 text-right">
                                                <span class="d-block text-muted">Shiping Address</span>
                                                <span><?php echo $user_street; ?>,</span><br>
                                                <span><?php echo $user_landmark; ?>,</span><br>
                                                <span><?php echo $user_city . "-" . $user_pincode; ?>.</span>
                                            </div>

                                        </td>
                                    </tr>
                                </tbody>

                            </table>





                        </div>




                        <div class="product border-bottom table-responsive">

                            <table class="table table-borderless">

                                <tbody>

                                    <?php

                                    $total_count = 0;

                                    $get_order_details = "select * from users_order where order_id=$order_id";

                                    $run_order_details = mysqli_query($conn,  $get_order_details);

                                    while ($row_order_details = mysqli_fetch_array($run_order_details)) {

                                        $product_id = $row_order_details["product_id"];

                                        $product_quantity = $row_order_details["product_quantity"];

                                        $product_size = $row_order_details["product_size"];


                                        $get_details = "select * from products_details where ID=$product_id";

                                        $run_details = mysqli_query($conn, $get_details);

                                        while ($row_details = mysqli_fetch_array($run_details)) {

                                            $product_price = $row_details["product_price"];

                                            $product_title = $row_details["product_title"];

                                            $total_price = $product_price *  $product_quantity;

                                            $get_images = "select details_image from  products_images where related_product=$product_id and primary_image=1";

                                            $run_images = mysqli_query($conn, $get_images);

                                            while ($row_images = mysqli_fetch_array($run_images)) {

                                                $details_image = $row_images["details_image"];


                                    ?>




                                                <tr>
                                                    <td width="20%">

                                                        <img src="<?php echo "./admin_panel/products_images/images/$details_image"; ?>" width="90">

                                                    </td>

                                                    <td width="60%">
                                                        <span class="font-weight-bold"><?php echo $product_title; ?></span><br>
                                                        <div class="product-qty">
                                                            <span class="d-block">Quantity:<?php echo $product_quantity; ?></span>
                                                            <?php
                                                            if (!($product_size == 0)) {
                                                                echo "<span id='size' class='d-block'>Size:$product_size</span>";
                                                            }
                                                            ?>
                                                        </div>
                                                    </td>
                                                    <td width="20%">
                                                        <div class="text-right">
                                                            <span class="font-weight-bold"><?php echo "₹" . number_format($total_price, 2); ?></span>
                                                        </div>
                                                    </td>
                                                </tr>


                                    <?php

                                                $total_count +=  $product_price *  $product_quantity;
                                            }
                                        }
                                    }



                                    ?>


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
                                                    <span><?php echo "₹" . number_format($total_count, 2); ?></span>
                                                </div>
                                            </td>
                                        </tr>

                                        <?php

                                        $get_shipping_fee = "select * from shipping_charges where user_state='$user_state'";

                                        $run_shipping_fee = mysqli_query($conn, $get_shipping_fee);

                                        while ($row_shipping_fee = mysqli_fetch_array($run_shipping_fee)) {

                                            $delivery_charges = $row_shipping_fee['shipping_fee'];
                                        }
                                        ?>


                                        <tr>
                                            <td>
                                                <div class="text-left">

                                                    <span class="text-muted">Shipping Fee</span>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <span><?php echo "₹" . number_format($delivery_charges, 2); ?></span>
                                                </div>
                                            </td>
                                        </tr>



                                        <?php

                                        $totalamount = $total_count + $delivery_charges;

                                        $get_amount_paid = "select * from transaction_amount where order_id=$order_id";

                                        $run_amount_paid = mysqli_query($conn, $get_amount_paid);

                                        while ($row_amount_paid = mysqli_fetch_array($run_amount_paid)) {

                                            $amount_to_paid = $row_amount_paid["transaction_amount"];
                                        }
                                        ?>


                                        <tr>
                                            <td>
                                                <div class="text-left">

                                                    <span class="text-muted">Amount To Paid</span>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <span><?php echo  "₹" . $amount_to_paid; ?></span>
                                                </div>
                                            </td>
                                        </tr>

                                        <?php


                                        $get_paid = "select * from payment_info where order_id=$order_id";

                                        $run_paid = mysqli_query($conn, $get_paid);

                                        while ($row_paid = mysqli_fetch_array($run_paid)) {

                                            $amount_paid = $row_paid["transaction_amount"];
                                        }



                                        ?>


                                        <tr>
                                            <td>
                                                <div class="text-left">

                                                    <span class="text-muted">Amount Paid</span>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <span class="text-success"><?php echo  "₹" . $amount_paid; ?></span>
                                                </div>
                                            </td>
                                        </tr>

                                        <?php
                                        $balance_amount =  $amount_to_paid -  $amount_paid;
                                        if ($amount_paid == 250) {
                                            echo "<tr class='border-top border-bottom'>
                                            <td>
                                                <div class='text-left'>

                                                    <span class='font-weight-bold'>Balance Amount</span>

                                                </div>
                                            </td>
                                            <td>
                                                <div class='text-right'>
                                                    <span class='font-weight-bold'>₹$balance_amount.00</span>
                                                </div>
                                            </td>
                                        </tr>";
                                        } else {
                                            echo "<tr class='border-top border-bottom'>
                                            <td>
                                                <div class='text-left'>

                                                    <span class='font-weight-bold'>Full Amount Paided</span>

                                                </div>
                                            </td>
                                            <td>
                                                <div class='text-right'>
                                                    <span class='font-weight-bold'>₹$amount_paid.00</span>
                                                </div>
                                            </td>
                                        </tr>";
                                        }

                                        ?>


                                    </tbody>

                                </table>

                            </div>





                        </div>


                        <p>We will be sending shipping confirmation email when the item shipped successfully!</p>
                        <p class="font-weight-bold mb-0">Thanks for shopping with us!</p>
                        <span>vogue-x-maniac Team</span>

                    </div>


                </div>

            </div>

        </div>

    </div>

    <!-- hide only on xs -->


    <!-- visible only on xs -->

    <div class="container mt-5 mb-5 d-block d-sm-none" style="zoom:70%">

        <div class="row d-flex justify-content-center">

            <div class="col-md-8">

                <div class="card">

                    <?php


                    $get_useraddress = "select * from users_address where order_id=$order_id_1";

                    $run_useraddress  = mysqli_query($conn, $get_useraddress);

                    while ($row_useraddress = mysqli_fetch_array($run_useraddress)) {

                        $user_name = $row_useraddress['user_fullname'];
                        $user_street = $row_useraddress['user_address'];
                        $user_landmark = $row_useraddress['user_landmark'];
                        $user_city = $row_useraddress['user_city'];
                        $user_pincode = $row_useraddress['user_pincode'];
                        $user_state = $row_useraddress['user_state'];
                    }

                    $get_userorder = "select * from users_order where order_id=$order_id_1";

                    $run_userorder  = mysqli_query($conn,  $get_userorder);

                    while ($row_userorder = mysqli_fetch_array($run_userorder)) {

                        $order_id = $row_userorder['order_id'];
                    }



                    ?>


                    <div class="invoice p-5">

                        <h5 class="placed">Your order Placed!</h5>
                        <span class="font-weight-bold d-block mt-4">Hello,Mr/Mrs. <?php echo $user_name; ?></span>
                        <span>You order has been confirmed and will be shipped in next two days!</span>

                        <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">

                            <table class="table table-borderless">

                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="py-2 text-left">
                                                <span class="d-block text-muted" id="orderdate">Order Date</span>
                                                <span id="date"><?php echo $order_date; ?></span>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="py-2 text-center">
                                                <span class="d-block text-muted" id="orderno">Order No</span>
                                                <span class="font-weight-bold" id="order"><?php echo $order_id; ?></span>
                                            </div>
                                        </td>



                                        <td>
                                            <div class="py-2 text-right">
                                                <span class="d-block text-muted">Shiping Address</span>
                                                <span><?php echo $user_street; ?>,</span><br>
                                                <span><?php echo $user_landmark; ?>,</span><br>
                                                <span><?php echo $user_city . "-" . $user_pincode; ?>.</span>
                                            </div>

                                        </td>
                                    </tr>
                                </tbody>

                            </table>





                        </div>




                        <div class="product border-bottom table-responsive">

                            <table class="table table-borderless">

                                <tbody>

                                    <?php

                                    $total_count = 0;

                                    $get_order_details = "select * from users_order where order_id=$order_id";

                                    $run_order_details = mysqli_query($conn,  $get_order_details);

                                    while ($row_order_details = mysqli_fetch_array($run_order_details)) {

                                        $product_id = $row_order_details["product_id"];

                                        $product_quantity = $row_order_details["product_quantity"];

                                        $product_size = $row_order_details["product_size"];


                                        $get_details = "select * from products_details where ID=$product_id";

                                        $run_details = mysqli_query($conn, $get_details);

                                        while ($row_details = mysqli_fetch_array($run_details)) {

                                            $product_price = $row_details["product_price"];

                                            $product_title = $row_details["product_title"];

                                            $total_price = $product_price *  $product_quantity;

                                            $get_images = "select details_image from  products_images where related_product=$product_id and primary_image=1";

                                            $run_images = mysqli_query($conn, $get_images);

                                            while ($row_images = mysqli_fetch_array($run_images)) {

                                                $details_image = $row_images["details_image"];


                                    ?>




                                                <tr>
                                                    <td width="20%">

                                                        <img src="<?php echo "./admin_panel/products_images/images/$details_image"; ?>" width="90">

                                                    </td>

                                                    <td width="60%">
                                                        <span class="font-weight-bold"><?php echo $product_title; ?></span><br>
                                                        <div class="product-qty">
                                                            <span class="d-block">Quantity:<?php echo $product_quantity; ?></span>
                                                            <?php
                                                            if (!($product_size == 0)) {
                                                                echo "<span id='size' class='d-block'>Size:$product_size</span>";
                                                            }
                                                            ?>
                                                        </div>
                                                    </td>
                                                    <td width="20%">
                                                        <div class="text-right">
                                                            <span class="font-weight-bold"><?php echo "₹" . number_format($total_price, 2); ?></span>
                                                        </div>
                                                    </td>
                                                </tr>


                                    <?php

                                                $total_count +=  $product_price *  $product_quantity;
                                            }
                                        }
                                    }



                                    ?>


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
                                                    <span><?php echo "₹" . number_format($total_count, 2); ?></span>
                                                </div>
                                            </td>
                                        </tr>

                                        <?php

                                        $get_shipping_fee = "select * from shipping_charges where user_state='$user_state'";

                                        $run_shipping_fee = mysqli_query($conn, $get_shipping_fee);

                                        while ($row_shipping_fee = mysqli_fetch_array($run_shipping_fee)) {

                                            $delivery_charges = $row_shipping_fee['shipping_fee'];
                                        }
                                        ?>


                                        <tr>
                                            <td>
                                                <div class="text-left">

                                                    <span class="text-muted">Shipping Fee</span>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <span><?php echo "₹" . number_format($delivery_charges, 2); ?></span>
                                                </div>
                                            </td>
                                        </tr>



                                        <?php

                                        $totalamount = $total_count + $delivery_charges;

                                        $get_amount_paid = "select * from transaction_amount where order_id=$order_id";

                                        $run_amount_paid = mysqli_query($conn, $get_amount_paid);

                                        while ($row_amount_paid = mysqli_fetch_array($run_amount_paid)) {

                                            $amount_to_paid = $row_amount_paid["transaction_amount"];
                                        }
                                        ?>


                                        <tr>
                                            <td>
                                                <div class="text-left">

                                                    <span class="text-muted">Amount To Paid</span>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <span><?php echo  "₹" .$amount_to_paid; ?></span>
                                                </div>
                                            </td>
                                        </tr>

                                        <?php


                                        $get_paid = "select * from payment_info where order_id=$order_id";

                                        $run_paid = mysqli_query($conn, $get_paid);

                                        while ($row_paid = mysqli_fetch_array($run_paid)) {

                                            $amount_paid = $row_paid["transaction_amount"];
                                        }



                                        ?>


                                        <tr>
                                            <td>
                                                <div class="text-left">

                                                    <span class="text-muted">Amount Paid</span>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <span class="text-success"><?php  echo  "₹" . $amount_paid; ?></span>
                                                </div>
                                            </td>
                                        </tr>

                                        <?php
                                        $balance_amount =  $amount_to_paid -  $amount_paid;
                                        if ($amount_paid == 250) {
                                            echo "<tr class='border-top border-bottom'>
                                        <td>
                                            <div class='text-left'>

                                                <span class='font-weight-bold'>Balance Amount</span>

                                            </div>
                                        </td>
                                        <td>
                                            <div class='text-right'>
                                                <span class='font-weight-bold'>₹$balance_amount.00</span>
                                            </div>
                                        </td>
                                    </tr>";
                                        } else {
                                            echo "<tr class='border-top border-bottom'>
                                        <td>
                                            <div class='text-left'>

                                                <span class='font-weight-bold'>Full Amount Paided</span>

                                            </div>
                                        </td>
                                        <td>
                                            <div class='text-right'>
                                                <span class='font-weight-bold'>₹$amount_paid.00</span>
                                            </div>
                                        </td>
                                    </tr>";
                                        }

                                        ?>


                                    </tbody>

                                </table>

                            </div>





                        </div>


                        <p>We will be sending shipping confirmation email when the item shipped successfully!</p>
                        <p class="font-weight-bold mb-0">Thanks for shopping with us!</p>
                        <span>vogue-x-maniac Team</span>

                    </div>


                </div>

            </div>

        </div>

    </div>

    <!-- visible only on xs -->



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



</body>