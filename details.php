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
    <!-- external js sheet -->
    <script src="details.js"></script>

</head>

<body>



    <!-- navbar starts -->


    <?php include './index.header.php'; ?>

    <!-- navbar  ends -->

    <!-- product details -->
    <div class="container-fluid mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="images p-3">
                                <div class="text-center p-4"> <img id="main-image" src="./admin_area/product_images/product1.jpg" width="250" /> </div>
                                <div class="thumbnail text-center" id="thumbnailimage"> <img onclick="change_image(this)" id="thumbnail" src="./admin_area/product_images/product1.jpg" width="70"> <img onclick="change_image(this)" id="thumbnail" src="./admin_area/product_images/product6.jpg" width="70"><img onclick="change_image(this)" id="thumbnail" src="./admin_area/product_images/product7.jpg" width="70"><img onclick="change_image(this)" id="thumbnail" src="./admin_area/product_images/product8.jpg" width="70"> </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product p-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center"><a href="#"><i class="fa fa-long-arrow-left"></i></a> <a href="#"><span class="ml-1">Back</span></a> </div> <a href="index.php"><i class="fa fa-home"></i></a>
                                </div>
                                <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Orianz</span>
                                    <h5 class="text-uppercase">Men's slim fit t-shirt</h5>
                                    <div class="price d-flex flex-row align-items-center"> <span class="act-price">₹1,200</span>
                                        <div class="ml-2"> <small class="dis-price">₹3,000</small> </div>
                                    </div>
                                </div>
                                <p class="about">Shop from a wide range of t-shirt from orianz. Pefect for your everyday use, you could pair it with a stylish pair of jeans or trousers complete the look.</p>
                                <div class="sizes mt-5">
                                    <h6 class="text-uppercase">Size</h6> <label class="radio"> <input type="radio" name="size" value="S" checked> <span>S</span> </label> <label class="radio"> <input type="radio" name="size" value="M"> <span>M</span> </label> <label class="radio"> <input type="radio" name="size" value="L"> <span>L</span> </label> <label class="radio"> <input type="radio" name="size" value="XL"> <span>XL</span> </label> <label class="radio"> <input type="radio" name="size" value="XXL"> <span>XXL</span> </label>
                                </div>
                                <div class="cart mt-4 align-items-center"> <button class="btn-success mr-2 px-4">Add to cart</button>
                                    <button class="btn-success mr-2 px-4">Buy Now</button>
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
        <div class="card bg-white">
                <img class="card-img-top" src="./admin_area/product_images/product1.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title text-center">Analog Watch</h5>
                    <p class="card-text  text-center"><s>₹4,000</s>₹1,500</p>
                    <div class="text-center">
                        <a href="details.php" class="btn btn-success" id="buttonhover">See Details</a>
                        <a href="#" class="btn btn-success" id="buttonhover">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="card bg-white">
                <img class="card-img-top" src="./admin_area/product_images/product6.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title text-center">Analog Watch</h5>
                    <p class="card-text  text-center"><s>₹4,000</s>₹1,500</p>
                    <div class="text-center">
                        <a href="details.php" class="btn btn-success" id="buttonhover">See Details</a>
                        <a href="#" class="btn btn-success" id="buttonhover">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="card bg-white">
                <img class="card-img-top" src="./admin_area/product_images/product7.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title text-center">Analog Watch</h5>
                    <p class="card-text  text-center"><s>₹4,000</s>₹1,500</p>
                    <div class="text-center">
                        <a href="details.php" class="btn btn-success" id="buttonhover">See Details</a>
                        <a href="#" class="btn btn-success" id="buttonhover">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="card bg-white">
                <img class="card-img-top" src="./admin_area/product_images/product8.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title text-center">Analog Watch</h5>
                    <p class="card-text  text-center"><s>₹4,000</s>₹1,500</p>
                    <div class="text-center">
                        <a href="details.php" class="btn btn-success" id="buttonhover">See Details</a>
                        <a href="#" class="btn btn-success" id="buttonhover">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="card bg-white">
                <img class="card-img-top" src="./admin_area/product_images/product1.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title text-center">Analog Watch</h5>
                    <p class="card-text  text-center"><s>₹4,000</s>₹1,500</p>
                    <div class="text-center">
                        <a href="details.php" class="btn btn-success" id="buttonhover">See Details</a>
                        <a href="#" class="btn btn-success" id="buttonhover">Add to Cart</a>
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
                        <img src="./header images/vogue x maniac png.png" alt="brand image">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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