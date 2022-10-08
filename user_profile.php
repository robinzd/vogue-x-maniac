<?php

session_start();

include("./conn.php");
include("./function.php");

$user_data = check_login($conn);

$userid = $user_data['user_id'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- fav icon -->
    <link rel="icon" type="image/png" href="./favicon/vogue_x_maniac_png_K8m_icon.ico" />
    <!-- bootsstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- link the external stylesheet -->
    <link rel="stylesheet" type="text/css" href="./user_profile.css">
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

    <!-- hide only on xs -->
    <div class="form-body d-none d-sm-block">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3 class="text-center"><i class="fa fa-user"></i>User Profile</h3>
                       


                            <?php

                            $get_user_details = "select * from users where user_id=$userid";

                            $run_user_details = mysqli_query($conn, $get_user_details);



                            while ($row_user_details = mysqli_fetch_array($run_user_details)) {

                                $id = $row_user_details['ID'];
                                $firstname = $row_user_details['first_name'];
                                $lastname = $row_user_details['last_name'];
                                $email = $row_user_details['user_email'];
                                $mobile = $row_user_details['user_mob_no'];
                            }

                            ?>


                            <div class="col col-md-12">
                                <label>Firstname</label>
                                <input class="form-control" type="text" value=<?php echo $firstname; ?> readonly>
                            </div><br>

                            <div class="col-md-12">
                                <label>Lastname</label>
                                <input class="form-control" type="text" value=<?php echo  $lastname; ?> readonly>
                            </div><br>

                            <div class="col-md-12">
                                <label>Email</label>
                                <input class="form-control" type="text" value=<?php echo  $email; ?> readonly>
                            </div><br>

                            <div class="col-md-12">
                                <label>Mobile No</label>
                                <input class="form-control" type="text" value=<?php echo $mobile; ?> readonly>
                            </div><br>

                            <a href="user_profile_edit.php?editid=<?php echo htmlentities($id); ?>" class="edit" title="Edit" data-toggle="tooltip">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-outline-success">edit</button>
                                </div>
                            </a><br>

                            <div class="text-center">Back<a onclick="history.back()"><i class="fa fa-arrow-left"></i></a></div>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hide only on xs -->

    <!-- visible only on xs -->
    <div class="form-body  d-block d-sm-none" style="zoom:70%">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items" id="myform">
                    <h3 class="text-center"><i class="fa fa-user"></i>User Profile</h3>
                       


                            <?php

                            $get_user_details = "select * from users where user_id=$userid";

                            $run_user_details = mysqli_query($conn, $get_user_details);



                            while ($row_user_details = mysqli_fetch_array($run_user_details)) {

                                $id = $row_user_details['ID'];
                                $firstname = $row_user_details['first_name'];
                                $lastname = $row_user_details['last_name'];
                                $email = $row_user_details['user_email'];
                                $mobile = $row_user_details['user_mob_no'];
                            }

                            ?>


                            <div class="col col-md-12">
                                <label>Firstname</label>
                                <input class="form-control" type="text" value=<?php echo $firstname; ?> readonly>
                            </div><br>

                            <div class="col-md-12">
                                <label>Lastname</label>
                                <input class="form-control" type="text" value=<?php echo  $lastname; ?> readonly>
                            </div><br>

                            <div class="col-md-12">
                                <label>Email</label>
                                <input class="form-control" type="text" value=<?php echo  $email; ?> readonly>
                            </div><br>

                            <div class="col-md-12">
                                <label>Mobile No</label>
                                <input class="form-control" type="text" value=<?php echo $mobile; ?> readonly>
                            </div><br>

                            <a href="user_profile_edit.php?editid=<?php echo htmlentities($id); ?>" class="edit" title="Edit" data-toggle="tooltip">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-outline-success">Edit</button>
                                </div>
                            </a><br>

                            <div class="text-center">Back<a onclick="history.back()"><i class="fa fa-arrow-left"></i></a></div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- visible only on xs -->

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
</body>

</html>