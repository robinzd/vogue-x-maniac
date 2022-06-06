<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- fav icon -->
    <link rel="icon" type="image/png" href="./favicon/vogue_x_maniac_png_K8m_icon.ico" />
    <!-- bootsstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- link the external stylesheet -->
    <link rel="stylesheet" type="text/css" href="user_profile.css">
</head>

<body>

    <!-- navbar starts -->


    <?php

    include "./index.header.php";

    ?>

    <!-- navbar  ends -->


    <!-- back to top starts -->


    <?php


    include "./back_to_top.php";


    ?>

    <!--back to top ends -->

      <h1>User Details</h1>


    <div class="container height-100 d-flex justify-content-center align-items-center">

       

        <div class="card text-center">



            <div>
                <ul class="list-unstyled list">
                    <li>
                        <span class="font-weight-bold">Post</span>
                        <div>
                            <span class="mr-1">Robin</span>

                        </div>
                    </li>

                    <li>
                        <span class="font-weight-bold">Comments</span>
                        <div>
                            <span class="mr-1">45</span>
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </li>

                    <li>
                        <span class="font-weight-bold">Favorites</span>
                        <div>
                            <span class="mr-1">15</span>
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </li>
                </ul>
            </div>


        </div>


    </div>










    <!-- j query -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- owl carousel -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>

</html>