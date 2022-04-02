<?php

include("./db_conn.php");

include("./conn.php");

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstsrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- fav icon -->
    <link rel="icon" type="image/png" href="./favicon/vogue_x_maniac_png_K8m_icon.ico" />
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link the external css sheet -->
    <link rel="stylesheet" type="text/css" href="shop.css">
    <!-- jquery -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <!-- jquery css -->
    <link href="css/jquery-ui.css" rel="stylesheet">
    <!-- js files -->
    <script src="js/bootstrap.min.js"></script>
    <title>Shop</title>
</head>

<body>

    <!-- navbar starts -->

    <?php include "./index.header.php"; ?>

    <!-- navbar  ends -->

    <!-- back to top starts -->


    <?php include "./back_to_top.php"; ?>

    <!--back to top ends -->



    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 col-md-3">



                <!-- Filter -->
                <form class="shop__filter">
                    <div class="list-group">
                        <h3>Price</h3>
                        <input type="hidden" id="hidden_minimum_price" value="0" />
                        <input type="hidden" id="hidden_maximum_price" value="65000" />
                        <p id="price_show">1000 - 65000</p>
                        <div id="price_range"></div>
                    </div>

                    <!-- Checkboxes -->
                    <div class="list-group">
                        <h3 class="headline">
                            <span>Brands</span>
                        </h3>
                        <div>
                            <?php

                            $query = "SELECT DISTINCT(product_brand) FROM shop_page WHERE product_status = '1' ORDER BY ID DESC";
                            $statement = $connect->prepare($query);
                            $statement->execute();
                            $result = $statement->fetchAll();
                            foreach ($result as $row) {
                            ?>
                                <div class="list-group-item checkbox">
                                    <label><input type="checkbox" class="common_selector brand" value="<?php echo $row['product_brand']; ?>"> <?php echo $row['product_brand']; ?></label>
                                </div>
                            <?php
                            }

                            ?>
                        </div>
                    </div>


                    <!--product category -->

                    <div class="list-group">
                        <h3 class="headline">
                            <span>Categories</span>
                        </h3>
                        <?php

                        $query = "
                    SELECT DISTINCT(product_category) FROM shop_page  WHERE  product_status = '1' ORDER BY product_category DESC
                    ";
                        $statement = $connect->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach ($result as $row) {
                        ?>
                            <div class="list-group-item checkbox">
                                <label><input type="checkbox" class="common_selector category" value="<?php echo $row['product_category']; ?>"> <?php echo $row['product_category']; ?></label>
                            </div>
                        <?php
                        }

                        ?>
                    </div>

                  

                </form>
            </div>





            <div class="col-sm-8 col-md-9">
                <!-- Filters -->
                <div class="row">

                    <?php


                    $get_product_slider = "select * from shop_page";

                    $run_product_image = mysqli_query($conn, $get_product_slider);



                    while ($row_product_image = mysqli_fetch_array($run_product_image)) {

                        $product_image = $row_product_image['product_image'];
                        $product_title = $row_product_image['product_title'];
                        $product_strikeout_price = $row_product_image['product_strikeout_price'];
                        $product_price = $row_product_image['product_price'];





                        echo "<div class='col-sm-6 col-md-4'>
                            <div class='card bg-white'>
        <img class='card-img-top' src='./admin_area/product_images/$product_image' alt='' style='width:100%'>
        <div class='card-body'>
            <h5 class='card-title text-center'>$product_title</h5>
        <p class='card-text  text-center'><s>₹$product_strikeout_price</s>₹$product_price</p>
            <div class='text-center'>
                <a href='details.php' class='btn btn-success'>See Details</a>
                <a href='#' class='btn btn-success'>Add to Cart</a>
            </div>
        </div>
    </div>
    </div>





";
                    }


                    ?>










                </div> <!-- / .row -->
            </div>





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



         
            <script>
                $(document).ready(function() {

                    filter_data();

                    function filter_data() {
                        $('.filter_data').html('<div id="loading" style=""></div>');
                        var action = 'fetch_data';
                        var minimum_price = $('#hidden_minimum_price').val();
                        var maximum_price = $('#hidden_maximum_price').val();
                        var brand = get_filter('brand');
                        var category = get_filter('category');
                       
                        $.ajax({
                            url: "fetchdata.php",
                            method: "POST",
                            data: {
                                action: action,
                                minimum_price: minimum_price,
                                maximum_price: maximum_price,
                                brand: brand,
                                category: category,
                               
                            },
                            success: function(data) {
                                $('.filter_data').html(data);
                            }
                        });
                    }

                    function get_filter(class_name) {
                        var filter = [];
                        $('.' + class_name + ':checked').each(function() {
                            filter.push($(this).val());
                        });
                        return filter;
                    }

                    $('.common_selector').click(function() {
                        filter_data();
                    });

                    $('#price_range').slider({
                        range: true,
                        min: 1000,
                        max: 65000,
                        values: [1000, 65000],
                        step: 500,
                        stop: function(event, ui) {
                            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                            $('#hidden_minimum_price').val(ui.values[0]);
                            $('#hidden_maximum_price').val(ui.values[1]);
                            filter_data();
                        }
                    });

                });
            </script>

</body>

</html>