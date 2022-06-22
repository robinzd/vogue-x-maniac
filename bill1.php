<?php

session_start();

include("./conn.php");
include("./function.php");



$user_data = check_login($conn);

$userid = $user_data['user_id'];

$id = $_POST['productid'];
$quantity =  $_POST['quantity'];
$size = $_POST['size'];
$fullname = $_POST["fullname"];
$email =  $_POST["email"];
$street =  $_POST["street"];
$landmark =  $_POST["landmark"];
$city =  $_POST["city"];
$pincode = $_POST["pincode"];
$state = $_POST["state"];



$get_users = "select user_mob_no,user_email from users where user_id=$userid";

$run_users = mysqli_query($conn, $get_users);

while ($row_users = mysqli_fetch_array($run_users)) {

    $mob_no = $row_users['user_mob_no'];
    $user_email = $row_users['user_email'];
}





$order_id = rand(1000000,5000000);

$date = date("d M Y");



if (!empty($fullname) && !empty($email) && !empty($street) && !empty($landmark) && !empty($city) && !empty($pincode)) {


    $query_address = mysqli_query($conn, "INSERT INTO `users_address`( `user_id`, `user_fullname`, `user_email`, `user_address`, `user_landmark`,`user_city`,`user_pincode`,`user_state`,`order_id`) VALUES ('$userid ','$fullname','$email','$street','$landmark','$city','$pincode','$state','$order_id')");


    if ($query_address) {

        $query_order = mysqli_query($conn, "INSERT INTO `users_order`( `user_id`, `order_id`, `product_id`, `product_quantity`, `product_size`,`created_date_time`) VALUES ('$userid ','$order_id','$id','$quantity','$size','$date')");
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



    <!-- back to top starts -->


    <?php include "./back_to_top.php"; ?>

    <!--back to top ends -->

    <!-- hidden only on xs -->

    <div class="container mt-5 mb-5  d-none d-sm-block">

        <div class="text-left"><a onclick="history.back()"><i class="fa fa-arrow-left"></i></a></div><br>

        <div class="row d-flex justify-content-center">

            <div class="col-md-8">

                <div class="card">

                    <?php


                    $get_useraddress = "select * from users_address where user_id=$userid";

                    $run_useraddress  = mysqli_query($conn, $get_useraddress);

                    while ($row_useraddress = mysqli_fetch_array($run_useraddress)) {

                        $user_name = $row_useraddress['user_fullname'];
                        $user_street = $row_useraddress['user_address'];
                        $user_landmark = $row_useraddress['user_landmark'];
                        $user_city = $row_useraddress['user_city'];
                        $user_pincode = $row_useraddress['user_pincode'];

                        $get_userorder = "select * from users_order where order_id=$order_id";

                        $run_userorder  = mysqli_query($conn,  $get_userorder);

                        while ($row_userorder = mysqli_fetch_array($run_userorder)) {

                            $order_id = $row_userorder['order_id'];
                        }
                    }


                    ?>


                    <div class="invoice p-5">

                        <h5>Your order Confirmed!</h5>

                        <span class="font-weight-bold d-block mt-4">Hello,<?php echo $user_name; ?></span>
                        <span>You order has been confirmed and will be shipped in next two days!</span>

                        <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">

                            <table class="table table-borderless">

                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="py-2 text-left">
                                                <span class="d-block text-muted" id="orderdate">Order Date</span>
                                                <span id="date"><?php echo date("d M,Y"); ?></span>
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

                                    $get_cart = "select * from users_order where order_id=$order_id";

                                    $run_cart = mysqli_query($conn, $get_cart);

                                    while ($row_cart = mysqli_fetch_array($run_cart)) {

                                        $product_id = $row_cart["product_id"];

                                        $product_quantity = $row_cart["product_quantity"];

                                        $product_size = $row_cart["product_size"];


                                        $get_details = "select * from products_details where ID=$id";

                                        $run_details = mysqli_query($conn, $get_details);

                                        while ($row_details = mysqli_fetch_array($run_details)) {

                                            $product_price = $row_details["product_price"];

                                            $product_title = $row_details["product_title"];

                                            $total_price = $product_price *  $product_quantity;

                                            $get_images = "select details_image from  products_images where related_product=$id and primary_image=1";

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

                                        $get_shipping_fee = "select * from shipping_charges where user_state='$state'";

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

                                        ?>


                                        <!-- <tr>
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
                                        </tr> -->


                                        <!-- <tr>
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
                                        </tr> -->


                                        <tr class="border-top border-bottom">
                                            <td>
                                                <div class="text-left">

                                                    <span class="font-weight-bold">Subtotal</span>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <span class="font-weight-bold"><?php echo "₹" . number_format($totalamount, 2); ?></span>
                                                </div>
                                            </td>
                                        </tr>




                                    </tbody>

                                </table>

                            </div>





                        </div>


                        <p>We will be sending shipping confirmation email when the item shipped successfully!</p>
                        <p class="font-weight-bold mb-0">Thanks for shopping with us!</p>
                        <span>vogue-x-maniac Team</span>

                        <form method="Post">
                            <input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
                            <input type="hidden" name="txn_no" value="<?php echo  $totalamount; ?>">
                            <input type="hidden" name="cust_id" value="<?php echo $userid; ?>">
                            <input type="hidden" name="mob_no" value="<?php echo  $mob_no; ?>">
                            <input type="hidden" name="email" value="<?php echo  $user_email; ?>">
                            <input type="hidden" name="cod" value="250">



                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-success" type="submit" value="online" formaction="./paytm_php_sample_app/payment-using-paytm/payment.php">Pay On Online</button>
                                <button class="btn btn-success" type="submit" value="online" formaction="./paytm_php_sample_app/payment-using-paytm/payment1.php">Pay On Delivery</button>
                            </div><br>

                            <h6>Note*</h6>
                            <p class="para">You Want to pay one part of the amount for pay on delivery balance amount at your doorstep</p>
                        </form>





                    </div>


                </div>

            </div>

        </div>

    </div>

    <!-- hidden only on xs -->






    <!-- visible only on xs -->

    <div class="container mt-5 mb-5  d-block d-sm-none" style="zoom:70%">

        <div class="text-left"><a onclick="history.back()"><i class="fa fa-arrow-left"></i></a></div><br>

        <div class="row d-flex justify-content-center">

            <div class="col-md-8">

                <div class="card">

                    <?php


                    $get_useraddress = "select * from users_address where user_id=$userid";

                    $run_useraddress  = mysqli_query($conn, $get_useraddress);

                    while ($row_useraddress = mysqli_fetch_array($run_useraddress)) {

                        $user_name = $row_useraddress['user_fullname'];
                        $user_street = $row_useraddress['user_address'];
                        $user_landmark = $row_useraddress['user_landmark'];
                        $user_city = $row_useraddress['user_city'];
                        $user_pincode = $row_useraddress['user_pincode'];

                        $get_userorder = "select * from users_order where order_id=$order_id";

                        $run_userorder  = mysqli_query($conn,  $get_userorder);

                        while ($row_userorder = mysqli_fetch_array($run_userorder)) {

                            $order_id = $row_userorder['order_id'];
                        }
                    }


                    ?>


                    <div class="invoice p-5">

                        <h5>Your order Confirmed!</h5>

                        <span class="font-weight-bold d-block mt-4">Hello,<?php echo $user_name; ?></span>
                        <span>You order has been confirmed and will be shipped in next two days!</span>

                        <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">

                            <table class="table table-borderless">

                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="py-2 text-left">
                                                <span class="d-block text-muted" id="orderdate">Order Date</span>
                                                <span id="date"><?php echo date("d M,Y"); ?></span>
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

                                    $get_cart = "select * from users_order where order_id=$order_id";

                                    $run_cart = mysqli_query($conn, $get_cart);

                                    while ($row_cart = mysqli_fetch_array($run_cart)) {

                                        $product_id = $row_cart["product_id"];

                                        $product_quantity = $row_cart["product_quantity"];

                                        $product_size = $row_cart["product_size"];


                                        $get_details = "select * from products_details where ID=$id";

                                        $run_details = mysqli_query($conn, $get_details);

                                        while ($row_details = mysqli_fetch_array($run_details)) {

                                            $product_price = $row_details["product_price"];

                                            $product_title = $row_details["product_title"];

                                            $total_price = $product_price *  $product_quantity;

                                            $get_images = "select details_image from  products_images where related_product=$id and primary_image=1";

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

                                        $get_shipping_fee = "select * from shipping_charges where user_state='$state'";

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

                                        ?>


                                        <!-- <tr>
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
                                        </tr> -->


                                        <!-- <tr>
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
                                        </tr> -->


                                        <tr class="border-top border-bottom">
                                            <td>
                                                <div class="text-left">

                                                    <span class="font-weight-bold">Subtotal</span>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <span class="font-weight-bold"><?php echo "₹" . number_format($totalamount, 2); ?></span>
                                                </div>
                                            </td>
                                        </tr>




                                    </tbody>

                                </table>

                            </div>





                        </div>


                        <p>We will be sending shipping confirmation email when the item shipped successfully!</p>
                        <p class="font-weight-bold mb-0">Thanks for shopping with us!</p>
                        <span>vogue-x-maniac Team</span>

                        <form method="Post">
                            <input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
                            <input type="hidden" name="txn_no" value="<?php echo  $totalamount; ?>">
                            <input type="hidden" name="cust_id" value="<?php echo $userid; ?>">
                            <input type="hidden" name="mob_no" value="<?php echo  $mob_no; ?>">
                            <input type="hidden" name="email" value="<?php echo  $user_email; ?>">
                            <input type="hidden" name="cod" value="250">



                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-success" type="submit" value="online" formaction="./paytm_php_sample_app/payment-using-paytm/payment.php">Pay On Online</button>
                                <button class="btn btn-success" type="submit" value="online" formaction="./paytm_php_sample_app/payment-using-paytm/payment1.php">Pay On Delivery</button>
                            </div><br>

                            <h6>Note*</h6>
                            <p class="para">You Want to pay one part of the amount for pay on delivery balance amount at your doorstep</p>

                        </form>





                    </div>


                </div>

            </div>

        </div>

    </div>



    <!-- visible only on xs -->




    <!-- j query -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- owl carousel -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


</body>

</html>