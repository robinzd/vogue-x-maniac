<?php

include("./conn.php");

?>

<?php

// session_start();


// include("./conn.php");
// include("./function.php");


// $user_data = check_login($conn);

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vogue X Maniac</title>
    <!-- fav icon -->
    <link rel="icon" type="image/png" href="./favicon/vogue_x_maniac_png_K8m_icon.ico" />
    <!-- bootsstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- link the external stylesheet -->
    <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>



    <!-- navbar starts -->


    <?php include "./index.header.php"; ?>

    <!-- navbar  ends -->


    <!-- back to top starts -->


    <?php include "./back_to_top.php"; ?>

    <!--back to top ends -->








    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">

            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <?php

            $get_slides = "select * from slider_1";
            $result = mysqli_query($conn, $get_slides);
            $rowcount = mysqli_num_rows($result);

            // echo "Check";
            $counter = 1;

            while ($counter < $rowcount) {

                echo "<button type='button' data-bs-target='#demo' data-bs-slide-to='$counter'></button>";
                $counter = $counter + 1;
            }

            ?>
        </div>

        <!-- The slideshow/carousel -->

        <div class="carousel-inner">

            <?php

            $get_slides = "select * from slider_1 LIMIT 0,1";

            $run_slider = mysqli_query($conn, $get_slides);

            // echo "Check";

            while ($row_slides = mysqli_fetch_array($run_slider)) {

                $slider_name = $row_slides['slider_name'];
                $slider_image = $row_slides['slider_image'];


                echo "<div class='carousel-item active'>

          

                <img src='./admin_panel/slider_1/slides_images/$slider_image' class='d-block w-100'>

            </div>
             
            
            ";
            }

            $get_slides = "select * from slider_1 LIMIT 1,6";

            $run_slider = mysqli_query($conn, $get_slides);

            // echo "Check";

            while ($row_slides = mysqli_fetch_array($run_slider)) {

                $slider_name = $row_slides['slider_name'];
                $slider_image = $row_slides['slider_image'];


                echo "<div class='carousel-item'>

           
            
                <img src='./admin_panel/slider_1/slides_images/$slider_image' class='d-block w-100'>

            </div>
             
            
            ";
            }


            ?>




        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>



    <!-- brands -->
    <section id="brands">

        <h2>Brands</h2>
        <div class="slider owl-carousel">


            <?php

            $get_owlslider_1 = "select * from owlslider_1";

            $run_owlslider_1 = mysqli_query($conn, $get_owlslider_1);



            while ($row_owlslider_picture_1 = mysqli_fetch_array($run_owlslider_1)) {

                $brand_color = $row_owlslider_picture_1['brand_color'];
                $image_source = $row_owlslider_picture_1['image_source'];
                $brand_name = $row_owlslider_picture_1['brand_name'];


                echo " <div class='card' style='background-color: $brand_color ;'>
             <div class='img'>
                 <a href='shop.php?brand_name=$brand_name'><img src='./admin_panel/brands/brands_images/$image_source' alt=''></a>
             </div>
            <div class='content'>
                <div class='title'>
                $brand_name
                </div>
            </div>
         </div>

 

        ";
            }


            ?>



        </div>

    </section>



    <!-- brands finished -->

    <!-- categories -->

    <section id="brands">
        <h2>categories</h2>


        <div class="gallery">


            <?php

            $get_product_category = "select * from product_category";

            $run_gallery_image = mysqli_query($conn, $get_product_category);



            while ($row_category_picture = mysqli_fetch_array($run_gallery_image)) {

                $category_image = $row_category_picture['category_image'];

                $category_name =str_replace(" ","-", $row_category_picture['category_name']);




                echo "<div class='gallery__column'>
                        <a href='shop.php?category_name=$category_name' target='_blank' class='gallery__link'>
                        <figure class='gallery__thumb'>
<img src='./admin_panel/categories/categories_images/$category_image' alt='' class='gallery__image'>
<figcaption class='gallery__caption'>$category_name</figcaption>
</figure>
</a>
</div>



 
 



";
            }


            ?>

        </div>

    </section>




    <!-- cross fade carousel -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">


        <div class="carousel-inner">
            <?php

            $get_slider = "select * from slider_2 LIMIT 0,1";

            $run_slides = mysqli_query($conn, $get_slider);

            // echo "Check";

            while ($row_slider = mysqli_fetch_array($run_slides)) {

                $slider2_name = $row_slider['slider2_name'];
                $slider2_image = $row_slider['slider2_image'];


                echo "<div class='carousel-item active'>

            <img src='./admin_panel/slider_2/slides2_images/$slider2_image' class='d-block w-100'>

        </div>
 

";
            }

            $get_slider = "select * from slider_2 LIMIT 1,7";

            $run_slides = mysqli_query($conn,  $get_slider);

            // echo "Check";

            while ($row_slider = mysqli_fetch_array($run_slides)) {

                $slider2_name = $row_slider['slider2_name'];
                $slider2_image = $row_slider['slider2_image'];


                echo "<div class='carousel-item'>

                <img src='./admin_panel/slider_2/slides2_images/$slider2_image' class='d-block w-100'>


</div>
 

";
            }


            ?>



        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- cross fade carousle end -->




    <!-- latest products -->
    <section id="brands">
        <h2>Latest Products</h2>
        <div class="slider owl-carousel">




            <?php

            $get_product_slider = "select * from products_details where product_owlslider=1";

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

                echo "<div class='card bg-white'>
                <a href='details.php?id=$product_id'><img class='card-img-top' src='./admin_panel/products_images/images/$details_image' alt='' style='width:100%'>
                    <div class='card-body'>
                        <h5 class='card-title text-center'>$product_title</h5>
                        <p class='card-text  text-center'><s>₹$product_strikeout_price</s>₹$product_price</p>
                        // <div class='text-center'>
                        //     <a href='details.php?id=$product_id' class='btn btn-success'>See Details</a>
                        //     <a href='#' class='btn btn-success'>Add to Cart</a>
                        // </div>
                    </div></a>
                </div>





";
            }


            ?>


        </div>
    </section>





    <section>
        <div class="services pd">
            <div class="container">

                <div class="row text-center">
                    <div class="col-md-3">
                        <div class="square"><i class="fas fa-truck"></i></div>
                        <div class="serv">
                            <h5>Safe Delivery</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="serv">
                            <div class="square"><i class="fas fa-money-bill"></i></div>
                            <h5>Secured Payment</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="square"><i class="fas fa-truck-fast"></i></div>
                        <div class="serv">
                            <h5>3-4 days Shipping</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="square"><i class="fas fa-user-shield"></i></div>
                        <div class="serv">
                            <h5>Secure Website</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>
            </div>
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
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                autoplay: true,
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