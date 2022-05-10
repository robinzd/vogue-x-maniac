<?php



session_start();

include("./conn.php");
include("./function.php");

$user_data = check_login($conn);

$userid = $user_data['user_id'];

if (isset($_GET['delid'])) {
    $rid = intval($_GET['delid']);
    $sql = mysqli_query($conn, "delete from products_cart where ID=$rid");
    echo "<script>alert('you have successfully deleted the item in the cart');</script>";
    echo "<script>window.location.href = 'product_cart.php'</script>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <!-- fav icon -->
    <link rel="icon" type="image/png" href="./favicon/vogue_x_maniac_png_K8m_icon.ico" />
    <!-- bootsstrap cdn -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link the external stylesheet -->
    <link rel="stylesheet" type="text/css" href="cart.css">

</head>

<body>
    <!-- navbar starts -->


    <?php include "./index.header.php"; ?>

    <!-- navbar  ends -->


    <!-- back to top starts -->


    <?php include "./back_to_top.php"; ?>

    <!--back to top ends -->

    <!-- product_cart starts hidden only on xs -->
    <div class="table-responsive d-none d-sm-block">
        <div id="shopping-cart">


            <div class="txt-heading">Shopping Cart</div>


            <a id="btnEmpty" href="delete_cart.php" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to empty the cart ?');">Empty Cart</a>


            <table class="tbl-cart" cellpadding="10" cellspacing="1">
                <tbody>
                    <?php

                    $total_quantity = 0;
                    $total_price = 0;
                    $ret = mysqli_query($conn, "select * from products_cart where user_id='$userid'");
                    $row = mysqli_num_rows($ret);
                    if ($row > 0) {
                        echo "<tr>

                    <th style='text-align:left;'>Product Name</th>
                    <th style='text-align:center;'>Product Quantity</th>
                    <th style='text-align:center;' width='5%'>Product Size</th>
                    <th style='text-align:center;' width='10%'>Unit Price</th>
                    <th style='text-align:center;' width='10%''>Price</th>
                    <th style='text-align:center;' width='5%'>Remove</th>
                    
                </tr> ";

                        while ($row = mysqli_fetch_array($ret)) {

                            $product_id = $row['product_id'];

                            $get_product = "select * from  products_details where ID='$product_id'";

                            $run_product = mysqli_query($conn, $get_product);

                            while ($row_product = mysqli_fetch_array($run_product)) {


                                $product_price = $row_product['product_price'];
                                $product_title =  $row_product['product_title'];

                                $unit_price = $row["product_quantity"] * $product_price;


                                $get_image = "select details_image from  products_images where related_product='$product_id' and primary_image=1";

                                $run_image = mysqli_query($conn, $get_image);

                                while ($row_image = mysqli_fetch_array($run_image)) {

                                    $product_image = $row_image['details_image'];

                    ?>
                                    <tr>
                                        <td><img src="<?php echo "./admin_panel/products_images/images/$product_image"; ?>" class="cart-item-image" /><?php echo $product_title ?></td>
                                        <td style="text-align:center;"><?php echo $row["product_quantity"]; ?></td>
                                        <td style="text-align:center;"><?php echo $row["product_size"]; ?></td>
                                        <td style="text-align:center;"><?php echo $product_price; ?></td>
                                        <td style="text-align:right;"><?php echo "₹" . number_format($unit_price, 2); ?></td>
                                        <td style="text-align:center;"><a href="product_cart.php?delid=<?php echo ($row['ID']); ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
                                    </tr>
                        <?php
                                    $total_quantity += $row["product_quantity"];
                                    $total_price += ($product_price * $row["product_quantity"]);
                                }
                            }
                        }

                        ?>
                        <tr>
                            <td align="center">Total:</td>
                            <td align="center"><?php echo $total_quantity; ?></td>
                            <td align="right" colspan="3"><strong><?php echo "₹" . number_format($total_price, 2); ?></strong></td>
                            <td></td>
                        </tr>

                    <?php


                    } else {
                    ?>
                        <div class="no-records"><img src="./empty-cart-removebg-preview.png"></div>
                    <?php
                    }
                    ?>

                </tbody>

            </table>

            <?php
             $ret = mysqli_query($conn, "select * from products_cart where user_id='$userid'");
             $row = mysqli_num_rows($ret);
            if($row > 0){
                echo "<div class='d-grid gap-2'>
                <button href='payment.php' class='btn btn-success' type='button'>Checkout</button>
                    </div> ";
            }


            ?>

        </div>

    </div>

    <!-- product_cart ends -->


    <!-- product_cart visible only on xs -->


    <div class="table-responsive d-block d-sm-none" style="zoom:50%">
        <div id="shopping-cart">


            <div class="txt-heading">Shopping Cart</div>


            <a id="btnEmpty" href="delete_cart.php" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to empty the cart ?');">Empty Cart</a>


            <table class="tbl-cart" cellpadding="10" cellspacing="1">
                <tbody>
                    <?php

                    $total_quantity = 0;
                    $total_price = 0;
                    $ret = mysqli_query($conn, "select * from products_cart where user_id='$userid'");
                    $row = mysqli_num_rows($ret);
                    if ($row > 0) {
                        echo "<tr>

                    <th style='text-align:left;'>Product Name</th>
                    <th style='text-align:center;'>Product Quantity</th>
                    <th style='text-align:center;' width='5%'>Product Size</th>
                    <th style='text-align:center;' width='10%'>Unit Price</th>
                    <th style='text-align:center;' width='10%''>Price</th>
                    <th style='text-align:center;' width='5%'>Remove</th>
                    
                </tr> ";

                        while ($row = mysqli_fetch_array($ret)) {

                            $product_id = $row['product_id'];

                            $get_product = "select * from  products_details where ID='$product_id'";

                            $run_product = mysqli_query($conn, $get_product);

                            while ($row_product = mysqli_fetch_array($run_product)) {


                                $product_price = $row_product['product_price'];
                                $product_title =  $row_product['product_title'];

                                $unit_price = $row["product_quantity"] * $product_price;


                                $get_image = "select details_image from  products_images where related_product='$product_id' and primary_image=1";

                                $run_image = mysqli_query($conn, $get_image);

                                while ($row_image = mysqli_fetch_array($run_image)) {

                                    $product_image = $row_image['details_image'];

                    ?>
                                    <tr>
                                        <td><img src="<?php echo "./admin_panel/products_images/images/$product_image"; ?>" class="cart-item-image" /><?php echo $product_title ?></td>
                                        <td style="text-align:center;"><?php echo $row["product_quantity"]; ?></td>
                                        <td style="text-align:center;"><?php echo $row["product_size"]; ?></td>
                                        <td style="text-align:center;"><?php echo $product_price; ?></td>
                                        <td style="text-align:center;"><?php echo "₹" . number_format($unit_price, 2); ?></td>
                                        <td style="text-align:center;"><a href="product_cart.php?delid=<?php echo ($row['ID']); ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
                                    </tr>
                        <?php
                                    $total_quantity += $row["product_quantity"];
                                    $total_price += ($product_price * $row["product_quantity"]);
                                }
                            }
                        }

                        ?>
                        <tr>
                            <td align="center">Total:</td>
                            <td align="center"><?php echo $total_quantity; ?></td>
                            <td align="right" colspan="3"><strong><?php echo "₹" . number_format($total_price, 2); ?></strong></td>
                            <td></td>
                        </tr>


                    <?php


                    } else {
                    ?>
                        <div class="no-records"><img src="./empty-cart-removebg-preview.png"></div>
                    <?php
                    }
                    ?>

                </tbody>

            </table>

            <?php
             $ret = mysqli_query($conn, "select * from products_cart where user_id='$userid'");
             $row = mysqli_num_rows($ret);
            if($row > 0){
                echo "<div class='d-grid gap-2'>
                <button href='payment.php' class='btn btn-success' type='button'>Checkout</button>
                    </div> ";
            }


            ?>
        </div>

    </div>

    <!-- product_cart ends -->



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
    <!-- owl carousel -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>

</html>