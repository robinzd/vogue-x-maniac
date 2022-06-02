<?php

// include("./db_conn.php");

// include("./conn.php");

// $searchstring = isset($_POST['search']) ? $_POST['search'] : "";

// $searchingquery = "SELECT * FROM products_details WHERE product_title LIKE '%$searchstring%'";


// $ordervalue = isset($_GET['order']) ? $_GET['order'] : "";



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
    <!-- bootstsrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- fav icon -->
    <link rel="icon" type="image/png" href="./favicon/vogue_x_maniac_png_K8m_icon.ico" />
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link the external css sheet -->
    <link rel="stylesheet" type="text/css" href="shop.css">
    <!-- jquery -->
    <script src="./js/jquery-1.10.2.min.js"></script>
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


                    <!-- Checkboxes -->
                    <div class="list-group" style="overflow-y: scroll;height: 400px;">
                        <h3 class="headline">
                            <span>Brands</span>
                        </h3>
                        <div>
                            <?php

                            $query = "SELECT DISTINCT(product_brand) FROM Products_details WHERE product_status = '1' ORDER BY ID DESC";
                            $statement = $connect->prepare($query);
                            $statement->execute();
                            $result = $statement->fetchAll();
                            foreach ($result as $row) {
                            ?>
                                <div class="form-check">
                                    <label><input type="checkbox" class="form-check-input brand" id="brand-<?php echo $row['product_brand']; ?>" value="<?php echo $row['product_brand']; ?>"> <?php echo $row['product_brand']; ?></label>
                                </div>
                            <?php
                            }

                            ?>
                        </div>
                    </div>


                    <!--product category -->

                    <div class="list-group" style="overflow-y: scroll;height: 400px;">
                        <h3 class="headline">
                            <span>Categories</span>
                        </h3>
                        <?php

                        $query = "
                    SELECT DISTINCT(product_category) FROM products_details  WHERE  product_status = '1' ORDER BY product_category DESC
                    ";
                        $statement = $connect->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach ($result as $row) {
                            $repalce_category = str_replace(" ", "-", $row['product_category']);
                        ?>
                            <div class="form-check">
                                <label><input type="checkbox" class="form-check-input category" id="category-<?php echo  $repalce_category; ?>" value="<?php echo $row['product_category']; ?>"> <?php echo $row['product_category']; ?></label>
                            </div>
                        <?php
                        }

                        ?>
                    </div>



                </form>
            </div>





            <div class="col-sm-8 col-md-9" style="overflow-y: scroll;height: 1000px;">
                <form action="shop.php">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Sort by
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="shop.php?order=desc">High to Low</a></li>
                            <li><a class="dropdown-item" href="shop.php?order=asc">Low to High</a></li>
                            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                    </div>
                </form>
                <!-- Filters -->
                <div class="row filter_data">
                    <?php

                    if ($searchingquery) {
                        $get_product_slider = $searchingquery;
                    } else {
                        $get_product_slider = "select * from products_details";
                    };
                    if ($ordervalue) {
                        $get_product_slider .= "ORDER BY product_price $ordervalue";
                    }



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


                        echo "<div class='col-sm-6 col-md-4'>
                            <div class='card bg-white'>
                            <a href='details.php?id=$product_id'><img class='card-img-top' src='./admin_panel/products_images/images/$details_image' alt='' style='width:100%'>
        <div class='card-body'>
            <h5 class='card-title text-center'>$product_title</h5>
        <p class='card-text  text-center'><s>₹$product_strikeout_price</s> ₹$product_price</p>
        </div></a>
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
                document.addEventListener("DOMContentLoaded", function(event) {
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
                                    search_string: "<?php echo $searchstring; ?>",
                                    order_value: "<?php echo $ordervalue; ?>",

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

                        $('.form-check-input').click(function() {
                            filter_data();
                        });

                        // $('#slider').slider({
                        //     range: true,
                        //     min: 1000,
                        //     max: 65000,
                        //     values: [1000, 65000],
                        //     step: 500,
                        //     stop: function(event, ui) {
                        //         // $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                        //         $('#range-1a').val(ui.values[0]);
                        //         $('#range-1b').val(ui.values[1]);
                        //         filter_data();
                        //     }
                        // });

                    });

                });
                <?php

                $_SERVER['SCRIPT_NAME'];

                $get_string = $_SERVER['QUERY_STRING'];

                parse_str($get_string, $get_array);

                $brand_title = $get_array['brand_name'];


                if ($brand_title) { ?>


                    $(document).ready(function() {
                        $("input[id=brand-<?php echo $brand_title; ?>").click();
                    });


                <?php
                } else {

                    echo $brand_title;
                }
                ?>

                <?php

                $_SERVER['SCRIPT_NAME'];

                $get_string = $_SERVER['QUERY_STRING'];

                // echo "console.log('".$replace_string."');";

                parse_str($get_string, $get_array);

                $product_category = $get_array['category_name'];


                $replace_string = str_replace("%20", "-", "$product_category");






                if ($replace_string) { ?>


                    $(document).ready(function() {
                        $("input[id=category-<?php echo $replace_string; ?>").click();
                    });


                <?php
                } else {

                    echo $replace_string;
                }

                ?>
            </script>


            <!-- j query -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- owl carousel -->
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</body>

</html>