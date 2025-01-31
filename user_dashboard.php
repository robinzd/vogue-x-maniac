<?php

session_start();

include("./conn.php");
include("./function.php");

$user_data = check_login($conn);

$userid = $user_data['user_id'];

$order_id = $_POST["order_id"];
$status = $_POST["status"];
$amount = $_POST["amount"];
$dummy_data = "nothing";
$realtime_status = "Ordered";
$real_status_1 = "TXN_SUCCESS";



if (!empty($userid) && !empty($order_id) && !empty($status) && !empty($amount)) {

    $query_address = mysqli_query($conn, "INSERT INTO `order_info`( `user_id`, `order_id`, `current_status`,`transaction_amount`) VALUES ('$userid ','$order_id','$status','$amount')");

    if ($real_status_1 == $status) {
        $query_address1 = mysqli_query($conn, "INSERT INTO status_info(`order_id`, `realtime_status`,`tracking_link`) VALUES ('$order_id','$realtime_status','$dummy_data')");
    }
}


$get_cart_delete = "select * from order_info where current_status='TXN_SUCCESS' AND order_id='$order_id'";

$run_cart_delete = mysqli_query($conn, $get_cart_delete);



while ($row_cart_delete = mysqli_fetch_array($run_cart_delete)) {

    $order_id_2 = $row_cart_delete['order_id'];

    $get_cart = "select * from products_cart where order_id='$order_id_2'";

    $run_cart = mysqli_query($conn, $get_cart);

    while ($row_cart = mysqli_fetch_array($run_cart)) {

        $order_id_3 = $row_cart['order_id'];
    }
}


if ($get_cart) {
    $cart_deletequery = mysqli_query($conn, "delete from products_cart where order_id='$order_id_3'");
}





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
                        <a href="./logout.php">
                            <div class="box me-4 my-1 bg-light d-block d-sm-none">
                                <img src="./logout.png" alt="">
                                <div class="d-flex align-items-center mt-2">
                                    <div class="tag">Logout</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="text-uppercase">My orders</div>
                    <?php

                    $real_status = "TXN_SUCCESS";

                    $cod_payment = 250;

                    $select_rows_1 = mysqli_query($conn, "select * from order_info where user_id='$user_id'");
                    $row_count_1 = mysqli_num_rows($select_rows_1);
                    if ($row_count_1 > 0) {

                        $get_order_no = "select * from order_info where user_id='$userid' ORDER BY ID DESC LIMIT 5 ";

                        $run_order_no = mysqli_query($conn, $get_order_no);



                        while ($row_order_no = mysqli_fetch_array($run_order_no)) {

                            $order_no_1 = $row_order_no['order_id'];

                            $status_1 = $row_order_no['current_status'];

                            $final_amount = $row_order_no['transaction_amount'];


                            $get_order_no1 = "select * from payment_info where order_id=$order_no_1";

                            $run_order_no1 = mysqli_query($conn, $get_order_no1);

                            while ($row_order_no1 = mysqli_fetch_array($run_order_no1)) {

                                $order_number = $row_order_no1['order_id'];


                                $get_orders = "select * from users_order where user_id ='$userid' and order_id='$order_no_1'";

                                $run_orders = mysqli_query($conn, $get_orders);

                                while ($row_orders = mysqli_fetch_array($run_orders)) {

                                    $date_time = $row_orders['created_date_time'];
                                }

                                $get_amount = "select * from transaction_amount where order_id=$order_number";

                                $run_amount = mysqli_query($conn, $get_amount);

                                while ($row_amount = mysqli_fetch_array($run_amount)) {

                                    $full_amount = $row_amount['transaction_amount'];
                                }



                                echo "<div   class='order my-3 bg-light'>
                        <div class='row'>
                            <div class='col-lg-12'>
                                <div class='d-flex flex-column justify-content-between order-summary'>
                                    <div class='d-flex align-items-center'>
                                        <div class='text-uppercase'>Order No:$order_number</div>";
                    ?>
                                <?php
                                if ($final_amount == $cod_payment) {
                                    echo "<div class='yellow-label ms-auto text-capitalize'>COD</div>";
                                } elseif ($status_1 == $real_status) {
                                    echo "<div class='green-label ms-auto text-capitalize'>paid</div>";
                                } else {
                                    echo "<div class='red-label ms-auto text-capitalize'>Failed</div>";
                                }
                                ?>
                                <?php
                                echo "</div>
                                    <div class='fs-8'><strong>Date:$date_time</strong></div>
                                </div>
                            </div>
                            <div class='col-lg-12'>
                                <div class='d-sm-flex align-items-sm-start justify-content-sm-between'>";
                                ?>
                                <?php
                                $get_realtime_status = "select realtime_status from status_info where order_id=$order_number";

                                $run_realtime_status = mysqli_query($conn, $get_realtime_status);

                                while ($row_realtime_status = mysqli_fetch_array($run_realtime_status)) {

                                    $realtime_status_1 = $row_realtime_status['realtime_status'];
                                }
                                $balance_amount = $full_amount - $cod_payment;
                                if ($final_amount == $cod_payment) {
                                    echo "<div class='status'>Status:$realtime_status_1<h6>Balance amount <strong>₹$balance_amount.00</strong> @ your Doorstep</h6></div>";
                                } elseif ($status_1 == $real_status) {
                                    echo "<div class='status'>Status :$realtime_status_1</div>";
                                } else {
                                    echo "<div class='status'>Status :Cancelled</div>";
                                }
                                ?>

                                <?php

                                echo " <form method='Post' action='order_read.php'>
                                <input type='hidden' name='orderid' value='$order_number'>
                                <input type='hidden' name='date' value='$date_time'>
                                <input type='hidden' name='status' value='$status'>";

                                ?>
                                <?php
                                if ($status_1 == $real_status) {
                                    echo "<button class='btn text-capitalize' type='submit'>order info</button>";
                                }
                                ?>
                    <?php
                                echo "</form>
                                </div>
                            </div>
                        </div>
                    </div>";
                                $last_id = $row_order_no['ID'];
                            }
                        }
                    } else {
                        echo "<div id='images'>
                        <img id='noorders' src='./noorders.png'><br>
                        <div class='text-uppercase'>No orders Placed Yet</div>
                        </div>";
                    }

                    ?>
                    <?php
                    if ($row_count_1 > 5) {
                        echo "<div class='d-grid gap-2 col-6 mx-auto'>
                        <button class='btn btn-primary' type='button' id='btnLoad' data-id='$last_id'>See More</button>
                    </div>";
                    }
                    ?>
                </div>
            </div>
        </div>

    </div><br>




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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '#btnLoad', function() {
                var lastid = $(this).data('id');
                $('#btnLoad').html('Loading...');
                $.ajax({
                    url: "load_data.php",
                    method: "POST",
                    data: {
                        lastid: lastid,
                    },
                    dataType: "text",
                    success: function(data) {
                        if (data != "") {
                            $('#btnLoad').remove();
                            $('#main-content').append(data);
                        } else {
                            $('#btnLoad').remove();
                            $('#main-content').append('<h4>No More Data To Show</h4>');
                        }
                    }
                });
            });
        });
    </script>


</body>

</html>