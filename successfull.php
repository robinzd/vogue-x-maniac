<?php
session_start();

include("./conn.php");
include("./function.php");

$user_data = check_login($conn);

$userid = $user_data['user_id'];

$order_id = $_POST["ORDERID"];
$txn_id = $_POST["TXNID"];
$txn_amount = $_POST["TXNAMOUNT"];
$payment_mode = $_POST["PAYMENTMODE"];
$currency = $_POST["CURRENCY"];
$txn_date = $_POST["TXNDATE"];
$status = $_POST["STATUS"];
$response = $_POST["RESPCODE"];
$response_msg = $_POST["RESPMSG"];
$gateway = $_POST["GATEWAYNAME"];
$bank_id = $_POST["BANKTXNID"];
$bank_name = $_POST["BANKNAME"];

print_r($_POST);


if (!empty($order_id) && !empty($txn_id) && !empty($txn_amount) && !empty($payment_mode) && !empty($currency) && !empty($txn_date) &&  !empty($status)  &&  !empty($response)  &&  !empty($response_msg)  &&  !empty($gateway)  &&  !empty($bank_id)  &&  !empty($bank_name)) {
    $query_address = mysqli_query($conn, "INSERT INTO `users_address`( `user_id`, `order_id`, `transaction_id`,`transaction_amount`,`payment_mode`,`Currency`,`transaction_date`,`current_status`,`response_status`,`response_message`,`gateway`,`bank_id`,`bank_name`) VALUES ('$userid ','$order_id','$txn_id','$txn_amount','$payment_mode','$currency','$txn_date','$status','$response','$response_msg','$gateway','$bank_id','$bank_name')");
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
    <!-- fav icon -->
    <link rel="icon" type="image/png" href="./favicon/vogue_x_maniac_png_K8m_icon.ico" />
    <!-- bootsstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- link the external stylesheet -->
    <link rel="stylesheet" type="text/css" href="successfull.css">
    <title>Payment Successfull</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <div class="payment">
                    <div class="payment_header">
                        <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
                    </div>
                    <div class="content">
                        <h1>Payment Success !</h1>
                        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. </p>
                        <form method="Post" action="./user_dashboard.php">
                        <input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
                        <a>Go to Home</a>
                        </form>
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