<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootsstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
     <!-- link the external stylesheet -->
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Vogue X Maniac</title>
</head>

<body>

<!-- navbar starts -->
  

    <?php include 'index.header.html';?> 

    <!-- navbar  ends -->

    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./admin_area/slides_images/slider1.jpg" alt="slider1" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="./admin_area/slides_images/slider2.jpg" alt="slider2" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="./admin_area/slides_images/slider4.jpg" alt="slider4" class="d-block" style="width:100%">
            </div>
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
    <section id="brands" >

        <h2>Brands</h2>
        <div class="slider owl-carousel">

            <div class="card" id="apple">
                <div class="img">
                    <a href="#"><img src="./admin_area/product_images/apple2-removebg-preview.png" alt=""></a>
                </div>
                <div class="content">
                    <div class="title">
                        Apple
                    </div>


                </div>
            </div>

            <div class="card">
                <div class="img">
                    <a href="#"><img src="./admin_area/product_images/boat2-removebg-preview.png" alt=""></a>
                </div>
                <div class="content">
                    <div class="title">
                        Boat
                    </div>


                </div>
            </div>
            <div class="card" id="nike">
                <div class="img">
                    <a href="#"><img src="./admin_area/product_images/nike1-removebg-preview.png" alt=""></a>
                </div>
                <div class="content">
                    <div class="title">
                        Nike
                    </div>


                </div>
            </div>
            <div class="card" id="jbl">
                <div class="img">
                    <a href="#"><img src="./admin_area/product_images/images-removebg-preview (2).png" alt=""></a>
                </div>
                <div class="content">
                    <div class="title">
                        Jbl
                    </div>


                </div>
            </div>
            <div class="card" id="tissot">
                <div class="img">
                    <a href="#"><img src="./admin_area/product_images/tissot4-removebg-preview.png" alt=""></a>
                </div>
                <div class="content">
                    <div class="title">
                        Tissot
                    </div>


                </div>
            </div>

        </div>

    </section>


  
    <!-- brands finished -->

    <!-- categories -->

    <section id="brands">
        <h2>categories</h2>


        <div class="gallery">
            <div class="gallery__column">
                <a href="#" target="_blank" class="gallery__link">
                    <figure class="gallery__thumb">
                        <img src="./categories_images/mens shoes.jpg" alt="mens and womens shoes" class="gallery__image">
                        <figcaption class="gallery__caption">Shoes</figcaption>
                    </figure>
                </a>

                <a href="#" target="_blank" class="gallery__link">
                    <figure class="gallery__thumb">
                        <img src="./categories_images/bluetooth speakers.jpg" alt="Bluetooth Speakers" class="gallery__image">
                        <figcaption class="gallery__caption">BT Speakers</figcaption>
                    </figure>
                </a>


            </div>

            <div class="gallery__column">
                <a href="#" target="_blank" class="gallery__link">
                    <figure class="gallery__thumb">
                        <img src="./categories_images/smart watches.jpg" alt="smart watches" class="gallery__image">
                        <figcaption class="gallery__caption">Smart Watches</figcaption>
                    </figure>
                </a>

                <a href="#" target="_blank" class="gallery__link">
                    <figure class="gallery__thumb">
                        <img src="./categories_images/womens watches.jpg" alt="Womens Watches" class="gallery__image">
                        <figcaption class="gallery__caption">Womens Watches</figcaption>
                    </figure>
                </a>
            
            </div>

            <div class="gallery__column">
                <a href="#" target="_blank" class="gallery__link">
                    <figure class="gallery__thumb">
                        <img src="./categories_images/mens watches.jpg" alt="mens_watch" class="gallery__image">
                        <figcaption class="gallery__caption">Mens Watches</figcaption>
                    </figure>
                </a>

                <a href="#" target="_blank" class="gallery__link">
                    <figure class="gallery__thumb">
                        <img src="./categories_images/pexels-alena-darmel-7322208.jpg" alt="headphones" class="gallery__image">
                        <figcaption class="gallery__caption">Airpods</figcaption>
                    </figure>
                </a>

                <!-- <a href="https://unsplash.com/@mr_geshani" target="_blank" class="gallery__link">
			<figure class="gallery__thumb">
				<img src="https://source.unsplash.com/2JH8d3ChNec/300x300" alt="Portrait by Amir Geshani" class="gallery__image">
				<figcaption class="gallery__caption">Portrait by Amir Geshani</figcaption>
			</figure>
		</a> -->
            </div>

            <div class="gallery__column">
                <a href="#" target="_blank" class="gallery__link">
                    <figure class="gallery__thumb">
                        <img src="./categories_images/travel bags.jpg" alt="travel bags" class="gallery__image">
                        <figcaption class="gallery__caption">Travel Bags</figcaption>
                    </figure>
                </a>

                <a href="#" target="_blank" class="gallery__link">
                    <figure class="gallery__thumb">
                        <img src="./categories_images/womens handbags.jpg" alt="womens handbags" class="gallery__image">
                        <figcaption class="gallery__caption">Womens Handbags</figcaption>
                    </figure>
                </a>

                <!-- <a href="https://unsplash.com/@dimadallacqua" target="_blank" class="gallery__link">
			<figure class="gallery__thumb">
				<img src="https://source.unsplash.com/XZkEhowjx8k/300x500" alt="Portrait by Dima DallAcqua" class="gallery__image">
				<figcaption class="gallery__caption">Portrait by Dima DallAcqua</figcaption>
			</figure>
		</a> -->
            </div>
        </div>

    </section>


    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./admin_area/slides_images2/slider5.jpg" alt="slider5" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="./admin_area/slides_images2/slider6.jpg" alt="slider6" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="./admin_area/slides_images2/slider7.jpg" alt="slider7" class="d-block" style="width:100%">
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>



    <!-- latest products -->
    <section id="brands">
        <h2>Latest Products</h2>
        <div class="slider owl-carousel">

            <div class="card bg-white">
                <img class="card-img-top" src="./admin_area/product_images/product1.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title text-center">Analog Watch</h5>
                    <p class="card-text  text-center"><s>₹4,000</s>₹1,500</p>
                    <div class="text-center">
                    <a href="#" class="btn btn" >See Details</a>
                    <a href="#" class="btn btn">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="card bg-white">
                <img class="card-img-top" src="./admin_area/product_images/product1.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title text-center">Analog Watch</h5>
                    <p class="card-text  text-center"><s>₹4,000</s>₹1,500</p>
                    <div class="text-center">
                    <a href="#" class="btn btn" >See Details</a>
                    <a href="#" class="btn btn">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="card bg-white">
                <img class="card-img-top" src="./admin_area/product_images/product1.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title text-center">Analog Watch</h5>
                    <p class="card-text  text-center"><s>₹4,000</s>₹1,500</p>
                    <div class="text-center">
                    <a href="#" class="btn btn" >See Details</a>
                    <a href="#" class="btn btn">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="card bg-white">
                <img class="card-img-top" src="./admin_area/product_images/product1.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title text-center">Analog Watch</h5>
                    <p class="card-text  text-center"><s>₹4,000</s>₹1,500</p>
                    <div class="text-center">
                    <a href="#" class="btn btn" >See Details</a>
                    <a href="#" class="btn btn">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="card bg-white">
                <img class="card-img-top" src="./admin_area/product_images/product1.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title text-center">Analog Watch</h5>
                    <p class="card-text  text-center"><s>₹4,000</s>₹1,500</p>
                    <div class="text-center">
                    <a href="#" class="btn btn" >See Details</a>
                    <a href="#" class="btn btn">Add to Cart</a>
                    </div>
                </div>
            </div>


        </div>




    </section>




     <!-- Footer -->

     <footer class="text-center text-lg-start text-dark" style="background-color:grey">
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
                        <p class="text-white"><i class="fas fa-envelope text-white mr-3"></i> inf0@text-white@gmail.com
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
                <img class="px-2" src="./ProductImages/visacard.png">
                <img class="px-2" src="./ProductImages/mastercard1.jpg">
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