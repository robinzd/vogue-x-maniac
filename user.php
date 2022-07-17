<?php
session_start();

include("./conn.php");
include("./function.php");

$user_data = check_login($conn);

$userid = $user_data['user_id'];

$order_id = $_POST["order_id"];
$status = $_POST["status"];
$amount = $_POST["amount"];
$dummy_data = "nothing";
$realtime_status = "Ordered";
$real_status_1 = "TXN_SUCCESS";


$get_cart_delete = "select * from order_info where current_status='TXN_SUCCESS' AND order_id='$order_id'";

    $run_cart_delete = mysqli_query($conn, $get_cart_delete);



    while ($row_cart_delete = mysqli_fetch_array($run_cart_delete)) {

        $order_id_2 = $row_cart_delete['order_id'];
    }


    if ($get_cart_delete) {
        $cart_deletequery = mysqli_query($conn, "delete from products_cart where order_id= $order_id_2");
    }



if (!empty($userid) && !empty($order_id) && !empty($status) && !empty($amount)) {

    $query_address = mysqli_query($conn, "INSERT INTO `order_info`( `user_id`, `order_id`, `current_status`,`transaction_amount`) VALUES ('$userid ','$order_id','$status','$amount')");

    if ($real_status_1 == $status) {
        $query_address1 = mysqli_query($conn, "INSERT INTO status_info(`order_id`, `realtime_status`,`tracking_link`) VALUES ('$order_id','$realtime_status','$dummy_data')");
    }
   

}



   

?>