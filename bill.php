<?php
session_start();

include("./conn.php");
include("./function.php");



$user_data = check_login($conn);

$userid = $user_data['user_id'];

echo $userid;

echo "<br>";
$fullname = $_POST["fullname"];
echo $fullname;
echo "<br>";
$email =  $_POST["email"];
echo $email;
echo "<br>";
$street =  $_POST["street"];
echo $street;
echo "<br>";
$landmark =  $_POST["landmark"];
echo $landmark;
echo "<br>";
$city =  $_POST["city"];
echo $city;
echo "<br>";
$pincode = $_POST["pincode"];
echo $pincode;
echo "<br>";

$get_userscart = "select * from products_cart where user_id=$userid";

$run_userscart = mysqli_query($conn,$get_userscart);

while ($row_userscart = mysqli_fetch_array($run_userscart)) {

    $product_id = $row_userscart['product_id'];
    $product_quantity = $row_userscart['product_quantity'];
    $product_size = $row_userscart['product_size'];

}

$order_id=random_num(10);



if(!empty($fullname) && !empty($email ) && !empty($street) && !empty($landmark) && !empty($city)&& !empty($pincode)){
    
    
    $query_address =mysqli_query ($conn,"INSERT INTO `users_address`( `user_id`, `user_fullname`, `user_email`, `user_address`, `user_landmark`,`user_city`,`user_pincode`) VALUES ('$userid ','$fullname','$email','$street','$landmark','$city','$pincode')");
  
    
    if($query_address){

        $query_order = mysqli_query ($conn,"INSERT INTO `users_order`( `user_id`, `order_id`, `product_id`, `product_quantity`, `product_size`) VALUES ('$userid ','$order_id','$product_id','$product_quantity ','$product_size')");
    
    
    }
    else{

        echo "<script>alert('Something Went Wrong!');</script>";
    }


}  


else{
  echo "<script>alert('Something Went Wrong!');</script>";
}


?>