<?php

$order_id = $_POST["ORDERID"];
echo $order_id;
echo "<br>";
$txn_id=$_POST["TXNID"];
echo $txn_id;
echo "<br>";
$txn_amount=$_POST["TXNAMOUNT"];
echo $txn_amount;
echo "<br>";
$payment_mode=$_POST["PAYMENTMODE"];
echo $payment_mode;
echo "<br>";
$currency=$_POST["CURRENCY"];
echo $currency;
echo "<br>";
$txn_date=$_POST["TXNDATE"];
echo $txn_date;
echo "<br>";
$status=$_POST["STATUS"];
echo $status;
echo "<br>";
$response=$_POST["RESPCODE"];
echo $response;
echo "<br>";
$response_msg=$_POST["RESPMSG"];
echo $response_msg;
echo "<br>";
$gateway=$_POST["GATEWAYNAME"];
echo $gateway;
echo "<br>";
$bank_id=$_POST["BANKTXNID"];
echo $bank_id;
echo "<br>";
$bank_name=$_POST["BANKNAME"];
echo $bank_name;
echo "<br>";

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
                        <a href="./user_dashboard.php">Go to Home</a>
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