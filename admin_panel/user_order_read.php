<?php

include('dbconnection.php');


$order_id_1 = $_GET['order_id'];



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
    <link rel="stylesheet" type="text/css" href="./bill2.css">

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

    <div class="text-left"><a onclick="history.back()"><i class="fa fa-arrow-left"></i></a></div><br>

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
                        $order_date= $row_userorder['created_date_time'];
                        $user_id = $row_userorder['user_id'];
                    }

                    $get_mob_no= "select * from users where user_id=$user_id";

                    $run_mob_no  = mysqli_query($conn,$get_mob_no);

                    while ($row_mob_no = mysqli_fetch_array($run_mob_no)) {

                        $mob_no=$row_mob_no['user_mob_no'];
                        
                    }



                    ?>


                    <div class="invoice p-5">

                        <h5>Users order</h5>
                        <span class="font-weight-bold d-block mt-4"><strong>Username</strong>:<?php echo $user_name; ?></span>
                        

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
                                                <span class="font-weight-bold" id="order"><strong><?php echo $order_id; ?></strong></span>
                                            </div>
                                        </td>



                                        <td>
                                            <div class="py-2 text-right">
                                                <span class="d-block text-muted">Shiping Address</span>
                                                <span><?php echo $user_street; ?>,</span><br>
                                                <span><?php echo $user_landmark; ?>,</span><br>
                                                <span><?php echo $user_city . "-" . $user_pincode; ?>,</span><br>
                                                <span><?php echo  $mob_no; ?>.</span>
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

                                                        <img src="<?php echo "products_images/images/$details_image"; ?>" width="90">

                                                    </td>

                                                    <td width="60%">
                                                        <span class="font-weight-bold"><strong><?php echo $product_title; ?></strong></span><br>
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
                                                            <span class="font-weight-bold"><strong><?php echo "₹" . number_format($total_price, 2); ?></strong></span>
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
                                                    <span><?php echo $amount_to_paid; ?></span>
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
                                                    <span class="text-success"><?php echo $amount_paid; ?></span>
                                                </div>
                                            </td>
                                        </tr>

                                        <?php
                                        $balance_amount =  $amount_to_paid -  $amount_paid;
                                        if ($amount_paid == 250) {
                                            echo "<tr class='border-top border-bottom'>
                                            <td>
                                                <div class='text-left'>

                                                    <span class='font-weight-bold'><strong>Balance Amount</strong></span>

                                                </div>
                                            </td>
                                            <td>
                                                <div class='text-right'>
                                                    <span class='font-weight-bold'><strong>₹$balance_amount</strong></span>
                                                </div>
                                            </td>
                                        </tr>";
                                        } else {
                                            echo "<tr class='border-top border-bottom'>
                                            <td>
                                                <div class='text-left'>

                                                    <span class='font-weight-bold'><strong>Full Amount Paided</strong></span>

                                                </div>
                                            </td>
                                            <td>
                                                <div class='text-right'>
                                                    <span class='font-weight-bold'><strong>₹$amount_paid</strong></span>
                                                </div>
                                            </td>
                                        </tr>";
                                        }

                                        ?>


                                    </tbody>

                                </table>

                            </div>





                        </div>


                        

                    </div>


                </div>

            </div>

        </div>

    </div>

    <!-- hide only on xs -->


    <!-- visible only on xs -->

    <div class="container mt-5 mb-5 d-block d-sm-none" style="zoom:70%">


    <div class="text-left"><a onclick="history.back()"><i class="fa fa-arrow-left"></i></a></div><br>

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

                        
                        <span class="font-weight-bold d-block mt-4">Hello,<?php echo $user_name; ?></span>
                       

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
                                                <span class="font-weight-bold" id="order"><strong><?php echo $order_id; ?></strong></span>
                                            </div>
                                        </td>



                                        <td>
                                            <div class="py-2 text-right">
                                                <span class="d-block text-muted">Shiping Address</span>
                                                <span><?php echo $user_street; ?>,</span><br>
                                                <span><?php echo $user_landmark; ?>,</span><br>
                                                <span><?php echo $user_city . "-" . $user_pincode; ?>,</span><br>
                                                <span><?php echo  $mob_no; ?>.</span>
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
                                                        <span class="font-weight-bold"><strong><?php echo $product_title; ?></strong></span><br>
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
                                                            <span class="font-weight-bold"><strong><?php echo "₹" . number_format($total_price, 2); ?></strong></span>
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
                                                    <span><?php echo $amount_to_paid; ?></span>
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
                                                    <span class="text-success"><?php echo $amount_paid; ?></span>
                                                </div>
                                            </td>
                                        </tr>

                                        <?php
                                        $balance_amount =  $amount_to_paid -  $amount_paid;
                                        if ($amount_paid == 250) {
                                            echo "<tr class='border-top border-bottom'>
                                        <td>
                                            <div class='text-left'>

                                                <span class='font-weight-bold'><strong>Balance Amount</strong></span>

                                            </div>
                                        </td>
                                        <td>
                                            <div class='text-right'>
                                                <span class='font-weight-bold'><strong>₹$balance_amount</strong></span>
                                            </div>
                                        </td>
                                    </tr>";
                                        } else {
                                            echo "<tr class='border-top border-bottom'>
                                        <td>
                                            <div class='text-left'>

                                                <span class='font-weight-bold'><strong>Full Amount Paided</strong></span>

                                            </div>
                                        </td>
                                        <td>
                                            <div class='text-right'>
                                                <span class='font-weight-bold'><strong>₹$amount_paid</strong></span>
                                            </div>
                                        </td>
                                    </tr>";
                                        }

                                        ?>


                                    </tbody>

                                </table>

                            </div>





                        </div>


                       
                    </div>


                </div>

            </div>

        </div>

    </div>

    <!-- visible only on xs -->



    



</body>