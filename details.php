<?php

include("./conn.php");

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <!-- fav icon -->
    <link rel="icon" type="image/png" href="./favicon/vogue_x_maniac_png_K8m_icon.ico" />
    <!-- bootsstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- link the external stylesheet -->
    <link rel="stylesheet" type="text/css" href="details.css">

</head>

<body>



    <!-- navbar starts -->


    <?php include './index.header.php'; ?>

    <!-- navbar  ends -->

    <!-- back to top starts -->

    <?php include "./back_to_top.php"; ?>

    <!--back to top ends -->


    <!-- product details -->
    <div class="container-fluid mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class='images p-3'>
                                <?php

                                $_SERVER['SCRIPT_NAME'];

                                $get_string = $_SERVER['QUERY_STRING'];

                                parse_str($get_string, $get_array);

                                $product_images_id = $get_array['id'];

                                $get_products_images = "select * from products_images where related_product=$product_images_id LIMIT 0,1";

                                $run_products_images = mysqli_query($conn, $get_products_images);

                                $row_products_images = mysqli_fetch_array($run_products_images);



                                $details_image = $row_products_images['details_image'];



                                $related_product = $row_products_images['related_product'];



                                echo " 
                                <div class='text-center p-4'> 
                                <img id='main-image' src='./admin_panel/products_images/images/$details_image' width='250'> 
                                </div> 
                            ";

                                ?>

                                <div class="thumbnail text-center" id="thumbnailimage">

                                    <?php

                                    $_SERVER['SCRIPT_NAME'];

                                    $get_string = $_SERVER['QUERY_STRING'];

                                    parse_str($get_string, $get_array);

                                    $product_images_id = $get_array['id'];


                                    $get_products_images = "select * from products_images where related_product=$product_images_id";



                                    $run_products_images = mysqli_query($conn, $get_products_images);



                                    while ($row_products_images = mysqli_fetch_array($run_products_images)) {



                                        $details_image = $row_products_images['details_image'];




                                        $related_product = $row_products_images['related_product'];


                                        echo "
                                 <img onclick='change_image(this)' id='thumbnail' src='./admin_panel/products_images/images/$details_image' width='70'> 
                               
                           

                                      ";
                                    }


                                    ?>


                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="product p-4">

                                <?php
                                $_SERVER['SCRIPT_NAME'];

                                $get_string = $_SERVER['QUERY_STRING'];

                                parse_str($get_string, $get_array);

                                $product_id = $get_array['id'];




                                $get_products = "select ID,product_brand,product_title,product_price,product_strikeout_price,product_description,product_features from products_details where ID= $product_id";




                                $run_products = mysqli_query($conn, $get_products);

                                while ($row_products = mysqli_fetch_array($run_products)) {




                                    $product_id = $row_products['ID'];
                                    $brand_title = $row_products['product_brand'];
                                    $product_title = $row_products['product_title'];
                                    $product_price = $row_products['product_price'];
                                    $strikeout_price = $row_products['product_strikeout_price'];
                                    $product_description = $row_products['product_description'];
                                    $product_feauters = $row_products['product_features'];


                                    echo "
                           
                                <div class='d-flex justify-content-between align-items-center'>
                                    <div class='d-flex align-items-center'><a href='#'><i class='fa fa-long-arrow-left'></i></a> <a href='#'><span class='ml-1'>Back</span></a> </div> <a href='index.php'><i class='fa fa-home'></i></a>
                                </div>
                                <div class='mt-4 mb-3'> 
                                 <span class='text-uppercase text-muted brand'>$brand_title</span>
                                    <h5 class='text-uppercase'>$product_title</h5>
                                    <div class='price d-flex flex-row align-items-center'> <span class='act-price'>₹$product_price</span>
                                        <div class='ml-2'> <small class='dis-price'>₹$strikeout_price</small></div>
                                    </div>
                                </div>
                           
                           
                           
                                <p class='about'>$product_description</p>";


                                    $array = $product_feauters;

                                    $array_result = explode('|', $array);

                                    $size_of_array = sizeof($array_result);





                                    if (!($size_of_array == 1)) {

                                        echo "<h6 class='text-capitalize'>
                                    Features
                                    </h6>";

                                        $x = 0;

                                        while ($x < $size_of_array) {
                                            echo "<ul>
                                        <li>$array_result[$x]</li>
                                       </ul>";
                                            $x++;
                                        }
                                    }


                                   echo "<form method='Post' action='cart.php'>
                                   <input type='hidden'  name='productid' value='$product_id'>";

                                }





                                ?>






                             
                                    

                                    
                                <div class="quantity buttons_added">
                                        <h6 class="text-capitalize">quantity</h6>
                                        <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                                    </div>




                                    <div class="sizes">



                                        <?php


                                        $_SERVER['SCRIPT_NAME'];



                                        $get_string = $_SERVER['QUERY_STRING'];


                                        parse_str($get_string, $get_array);

                                        // print_r($get_array);


                                        $product_id = $get_array['id'];

                                        $get_details = "select product_size from products_details where ID= $product_id";

                                        $run_details = mysqli_query($conn, $get_details);

                                        $details = mysqli_fetch_array($run_details);

                                        $product_size = $details['product_size'];

                                        $check_array = $product_size;

                                        $check_array_result = explode(',', $check_array);

                                        $sizeOfcheck = sizeof($check_array_result);


                                        if (!($sizeOfcheck == 1)) {
                                            echo "<h6 class='text-capitalize'>Size</h6>";
                                            $x = 0;
                                            while ($x < $sizeOfcheck) {
                                                echo "<label class='radio'> <input type='radio' name='size' value='$check_array_result[$x]' checked> <span>$check_array_result[$x]</span></label>\n";
                                                $x++;
                                            }
                                        }
                                        ?>

                                    </div>

                                    <div class="cart mt-4 align-items-center">
                                        <button type="submit" class="btn-success mr-2 px-4">Add to cart</button>
                                    </form>
                                    <form>    
                                        <button type="submit" class="btn-success mr-2 px-4">Buy Now</button>
                                    </form>   
                                    </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- product details ends -->


    <!-- latest products -->
    <section id="brands">
        <h2>Related Products</h2>
        <div class="slider owl-carousel">

            <?php

            $get_product_slider = "select * from products_details where related_product_owlslider=1";

            $run_product_image = mysqli_query($conn, $get_product_slider);



            while ($row_product = mysqli_fetch_array($run_product_image)) {
                $product_id = $row_product['ID'];
                $product_title = $row_product['product_title'];
                $product_strikeout_price = $row_product['product_strikeout_price'];
                $product_price = $row_product['product_price'];


                $get_products_image = "select details_image from products_images where primary_image=1 and related_product=$product_id";

                $run_products_image = mysqli_query($conn, $get_products_image);

                $details_image = null;

                while ($row_products_image = mysqli_fetch_array($run_products_image)) {




                    $details_image = $row_products_image['details_image'];
                }

                echo " <div class='card bg-white'>
                <a href='details.php?id=$product_id'><img class='card-img-top' src='./admin_panel/products_images/images/$details_image'  style='width:100%'>
    <div class='card-body'>
        <h5 class='card-title text-center'>$product_title</h5>
        <p class='card-text  text-center'><s>₹$product_strikeout_price</s>₹$product_price</p>
    </div></a>
</div> 





";
            }


            ?>






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








    <!-- external js sheet -->
    <script src="details.js"></script>
    <!-- j query -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- owl carousel -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                autoplay: false,
                autoplayTimeout: 2000, //2000ms = 2s;
                autoplayHoverPause: true,

                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    200: {
                        items: 2,
                        nav: false
                    },
                    600: {
                        items: 3,
                        nav: false
                    }
                }
            });




        });
    </script>


</body>

</html>