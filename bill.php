<?php
session_start();

include("./conn.php");
include("./function.php");



$user_data = check_login($conn);

$userid = $user_data['user_id'];

$fullname = $_POST["fullname"];
$email =  $_POST["email"];
$street =  $_POST["street"];
$landmark =  $_POST["landmark"];
$city =  $_POST["city"];
$pincode = $_POST["pincode"];


$get_userscart = "select * from products_cart where user_id=$userid";

$run_userscart = mysqli_query($conn, $get_userscart);


$order_id = random_num(10);



if (!empty($fullname) && !empty($email) && !empty($street) && !empty($landmark) && !empty($city) && !empty($pincode)) {


    $query_address = mysqli_query($conn, "INSERT INTO `users_address`( `user_id`, `user_fullname`, `user_email`, `user_address`, `user_landmark`,`user_city`,`user_pincode`) VALUES ('$userid ','$fullname','$email','$street','$landmark','$city','$pincode')");


    if ($query_address) {



        while ($row_userscart = mysqli_fetch_array($run_userscart)) {

            $product_id = $row_userscart['product_id'];
            $product_quantity = $row_userscart['product_quantity'];
            $product_size = $row_userscart['product_size'];

            $query_order = mysqli_query($conn, "INSERT INTO `users_order`( `user_id`, `order_id`, `product_id`, `product_quantity`, `product_size`) VALUES ('$userid ','$order_id','$product_id','$product_quantity ','$product_size')");
        }
    } else {

        echo "<script>alert('Something Went Wrong!');</script>";
    }
} else {

    echo "<script>alert('Something Went Wrong!');</script>";
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
    <!-- fav icon -->
    <link rel="icon" type="image/png" href="./favicon/vogue_x_maniac_png_K8m_icon.ico" />
    <!-- bootsstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- link the external stylesheet -->
    <link rel="stylesheet" type="text/css" href="./bill.css">
    
</head>

<body>


                           
<div class="container mt-5 mb-5">

        <div class="row d-flex justify-content-center">

            <div class="col-md-8">

                <div class="card">


                      

                        <div class="invoice p-5">

                            <h5>Your order Confirmed!</h5>

                            <span class="font-weight-bold d-block mt-4">Hello, Chris</span>
                            <span>You order has been confirmed and will be shipped in next two days!</span>

                            <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">

                                <table class="table table-borderless">
                                    
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="py-2">

                                                    <span class="d-block text-muted">Order Date</span>
                                                <span>12 Jan,2018</span>
                                                    
                                                </div>
                                            </td>

                                            <td>
                                                <div class="py-2">

                                                    <span class="d-block text-muted">Order No</span>
                                                <span>MT12332345</span>
                                                    
                                                </div>
                                            </td>

                                         

                                            <td>
                                                <div class="py-2">

                                                    <span class="d-block text-muted">Shiping Address</span>
                                                <span>414 Advert Avenue, NY,USA</span>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>




                                
                            </div>




                                <div class="product border-bottom table-responsive">

                                    <table class="table table-borderless">

                                    <tbody>
                                        <tr>
                                            <td width="20%">
                                            
                                            <img src="https://i.imgur.com/u11K1qd.jpg" width="90">

                                        </td>
                                    
                                        <td width="60%">
                                            <span class="font-weight-bold">Men's Sports cap</span>
                                            <div class="product-qty">
                                                <span class="d-block">Quantity:1</span>
                                                <span>Color:Dark</span>
                                                
                                            </div>
                                        </td>
                                        <td width="20%">
                                            <div class="text-right">
                                                <span class="font-weight-bold">$67.50</span>
                                            </div>
                                        </td>
                                        </tr>


                                        <tr>
                                            <td width="20%">
                                            
                                            <img src="https://i.imgur.com/SmBOua9.jpg" width="70">

                                        </td>
                                    
                                        <td width="60%">
                                            <span class="font-weight-bold">Men's Collar T-shirt</span>
                                            <div class="product-qty">
                                                <span class="d-block">Quantity:1</span>
                                                <span>Color:Orange</span>
                                                
                                            </div>
                                        </td>
                                        <td width="20%">
                                            <div class="text-right">
                                                <span class="font-weight-bold">$77.50</span>
                                            </div>
                                        </td>
                                        </tr>
                                    </tbody> 
                                        
                                    </table>
                                    


                                </div>



                                <div class="row d-flex justify-content-end">

                                    <div class="col-md-5">

                                        <table class="table table-borderless">

                                            <tbody class="totals">

                                                <tr>
                                                    <td>
                                                        <div class="text-left">

                                                            <span class="text-muted">Subtotal</span>
                                                            
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-right">
                                                            <span>$168.50</span>
                                                        </div>
                                                    </td>
                                                </tr>


                                                 <tr>
                                                    <td>
                                                        <div class="text-left">

                                                            <span class="text-muted">Shipping Fee</span>
                                                            
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-right">
                                                            <span>$22</span>
                                                        </div>
                                                    </td>
                                                </tr>


                                                 <tr>
                                                    <td>
                                                        <div class="text-left">

                                                            <span class="text-muted">Tax Fee</span>
                                                            
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-right">
                                                            <span>$7.65</span>
                                                        </div>
                                                    </td>
                                                </tr>


                                                 <tr>
                                                    <td>
                                                        <div class="text-left">

                                                            <span class="text-muted">Discount</span>
                                                            
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-right">
                                                            <span class="text-success">$168.50</span>
                                                        </div>
                                                    </td>
                                                </tr>


                                                 <tr class="border-top border-bottom">
                                                    <td>
                                                        <div class="text-left">

                                                            <span class="font-weight-bold">Subtotal</span>
                                                            
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-right">
                                                            <span class="font-weight-bold">$238.50</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                            
                                        </table>
                                        
                                    </div>
                                    


                                </div>


                                <p>We will be sending shipping confirmation email when the item shipped successfully!</p>
                                <p class="font-weight-bold mb-0">Thanks for shopping with us!</p>
                                <span>Nike Team</span>



                            

                        </div>


                        <div class="d-flex justify-content-between footer p-3">

                            <span>Need Help? visit our <a href="#"> help center</a></span>
                             <span>12 June, 2020</span>
                            
                        </div>



            
        </div>
                
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