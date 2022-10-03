<?php

session_start();

include("./conn.php");
include("./function.php");

$user_data = check_login($conn);

$userid = $user_data['user_id'];

$productid = isset($_POST['productid']) ? $_POST['productid'] : "";

$productquantity = isset($_POST['quantity']) ? $_POST['quantity'] : "";

$productsize = isset($_POST['size']) ? $_POST['size'] : "";

$query_product = "select product_quantity from products_cart where product_id='$productid' and  user_id='$userid' and product_size='$productsize'";

$result = mysqli_query($conn, $query_product);

$rowcount = mysqli_num_rows($result);

if ($rowcount > 0) {
    $row_slides = mysqli_fetch_array($result);

    $old_productquantity = $row_slides['product_quantity'];

    $new_productquantity = $productquantity + $old_productquantity;

    $update_query = mysqli_query($conn, "update  products_cart set product_quantity='$new_productquantity' where product_id='$productid' and user_id='$userid' and product_size='$productsize';");

    if ($update_query) {
        echo "<script>alert('You have successfully updated the cart');</script>";
        echo "<script type='text/javascript'> document.location ='details.php?id=$productid'; </script>";
    } else {
        echo "<script>alert('something went wrong');</script>";
    }
} else if($userid !== 0) {

    $query = mysqli_query($conn, "insert into products_cart(product_id,user_id,product_quantity,product_size,order_id) value ('$productid','$userid','$productquantity','$productsize','123')");
    if ($query) {
        echo "<script>alert('You have successfully inserted the item into the cart');</script>";
        echo "<script type='text/javascript'> document.location ='details.php?id=$productid'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
};

?>



