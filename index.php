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


    <!-- link the external stylesheet -->
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Vogue X Maniac</title>
</head>

<body>

    <!-- navbar starts -->
    <nav class="navbar navbar-expand-sm  navbar-dark">
        <div class="container">
            <a class="navbar-brand text-dark d-none d-sm-block" href="#">Vogue-X-maniac</a>
            <a class="navbar-brand text-dark d-block d-sm-none" id="brand" href="#">Vogue-X-maniac</a>
            <ul class="navbar-nav-expand-lg nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" id="nav" href="#"><img src="./header images/user.png"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  id="nav" href="#"><img src="./header images/cart.png"></a>
                </li>
            </ul>
        </div>
    </nav>


    <!-- navbar ends -->


    <!-- navbar2 starts -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
        <div class="container">
            <a class="navbar-brand text-dark"><i class="fa-solid fa-bag-shopping"></i></a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Home</a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Shop</a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">About Us</a>
                    </li><hr>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Log Out</a>
                    </li>
                </ul>      
                <hr>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-success" type="button">Search</button>
                </form>
            </div>
        </div>
    </nav>

   
    <!-- navbar2 ends -->

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
                <img src="./admin_area/slides_images/slider1.jpg" alt="Los Angeles" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="./admin_area/slides_images/slider2.jpg" alt="Chicago" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="./admin_area/slides_images/slider4.jpg" alt="New York" class="d-block" style="width:100%">
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
    <section id="brands">
        <h2>Brands</h2>

        <div class="brands-container">

        <a href="#" class="brands-box">
            <img src="./admin_area/product_images/apple2.jpg">
            <span>Apple</span>
        </a>

        <a href="#" class="brands-box">
            <img src="./admin_area/product_images/boat2.jpg">
            <span>Apple</span>
        </a>


        <a href="#" class="brands-box">
            <img src="./admin_area/product_images/jbl2.jpg">
            <span>Apple</span>
        </a>


        <a href="#" class="brands-box">
            <img src="./admin_area/product_images/nike1.jpg">
            <span>Apple</span>
        </a>

        <a href="#" class="brands-box">
            <img src="./admin_area/product_images/tissot2.png">
            <span>Apple</span>
        </a>

        </div>

    </section>



</body>

</html>










<!-- j query -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>