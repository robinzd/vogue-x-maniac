<?php
require_once("PaytmKit/lib/config_paytm.php");
require_once("PaytmKit/lib/encdec_paytm.php");

$transaction_amount = $_POST['txn_no'];
$customer_id = $_POST['cust_id'];
$mobile_number = $_POST['mob_no'];
$email = $_POST['email'];
$order_id = $_POST['orderid'];

// define("merchantMid", "dZlzzF17647713571019");
// Key in your staging and production MID available in your dashboard
// define("merchantKey", "O0zUdI1&G%OQViK_");
// Key in your staging and production merchant key available in your dashboard
// define("orderId", "order1");
// define("channelId", "WEB");
// define("website", "WEBSTAGING");
// define("industryTypeId", "Retail");
// define("callbackUrl", "http://127.0.0.1/devchandan/payment-using-paytm/response.php");
// define("txnAmount", "100.12");
// This is the staging value. Production value is available in your dashboard
// This is the staging value. Production value is available in your dashboard
// define("callbackUrl", "https://<Merchant_Response_URL>");

$orderId     = "$order_id";
$txnAmount     = "$transaction_amount";
$custId     = "$customer_id";
$mobileNo     = "$mobile_number";
$email         = "$email";


$paytmParams = array();

$paytmParams["ORDER_ID"] = $orderId;
$paytmParams["CUST_ID"] = $custId;
$paytmParams["MOBILE_NO"] = $mobileNo;
$paytmParams["EMAIL"] = $email;
$paytmParams["TXN_AMOUNT"] = $txnAmount;
$paytmParams["MID"] = PAYTM_MERCHANT_MID;
$paytmParams["CHANNEL_ID"] = PAYTM_CHANNEL_ID;
$paytmParams["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
$paytmParams["INDUSTRY_TYPE_ID"] = PAYTM_INDUSTRY_TYPE_ID;
$paytmParams["CALLBACK_URL"] = PAYTM_CALLBACK_URL;
$paytmChecksum = getChecksumFromArray($paytmParams, PAYTM_MERCHANT_KEY);


$transactionURL = PAYTM_TXN_URL;
// $transactionURL = "https://securegw-stage.paytm.in/theia/processTransaction";
// $transactionURL = "https://securegw.paytm.in/theia/processTransaction"; // for production
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchant Checkout</title>
    <!-- fav icon -->
    <link rel="icon" type="image/png" href="./favicon/vogue_x_maniac_png_K8m_icon.ico" />
    <!-- bootsstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- link the external stylesheet -->
    <link rel="stylesheet" type="text/css" href=".../address.css">

</head>

<body>
    <center>
        <h1>Please do not refresh this page...</h1>
    </center>

    <!-- back to top starts -->


    <?php include "./back_to_top.php"; ?>

    <!--back to top ends -->


    <!-- navbar  ends -->

    <!-- hide only on xs -->
   <div class="form-body d-none d-sm-block">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3 class="text-center">Check Details</h3>
                    <form class="requires-validation" novalidate method='post' action='<?php echo $transactionURL; ?>' name='f1'>

                            <div class="col col-md-12">
                                <input type="text" name="ORDER_ID" value="<?php echo $orderId; ?>">
                                <div class="invalid-feedback">orderid field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                                <input type="text" name="CUST_ID" value="<?php echo $custId; ?>">
                                <div class="valid-feedback">Email field is valid!</div>
                                <div class="invalid-feedback">custid field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                                <input type="text" name="MOBILE_NO" value="<?php echo $mobileNo; ?>">
                                <div class="invalid-feedback">mobileno field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                                <input type="text" name="EMAIL" value="<?php echo  $email; ?>">
                                <div class="invalid-feedback">email field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                                <input type="text" name="TXN_AMOUNT" value="<?php echo   $txnAmount; ?>">
                                <div class="invalid-feedback">txnamount field cannot be blank!</div>
                            </div>

                            <input type="hidden" name="MID" value="<?php echo PAYTM_MERCHANT_MID; ?>">
                            <input type="hidden" name="CHANNEL_ID" value="<?php echo PAYTM_CHANNEL_ID;; ?>">
                            <input type="hidden" name="WEBSITE" value="<?php echo PAYTM_MERCHANT_WEBSITE; ?>">
                            <input type="hidden" name="INDUSTRY_TYPE_ID" value="<?php echo PAYTM_INDUSTRY_TYPE_ID; ?>">
                            <input type="hidden" name="CALLBACK_URL" value="<?php echo PAYTM_CALLBACK_URL; ?>">
                            <input type="hidden" name="CHECKSUMHASH" value="<?php echo $paytmChecksum ?>">
                            


                            <div class="form-button mt-3">
                                <button type="submit" class="btn btn-outline-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hide only on xs -->



    <!-- visible only on xs -->
    <div class="form-body d-block d-sm-none" style="zoom:70%">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3 class="text-center">Check Details</h3>
                        <form class="requires-validation" novalidate method='post' action='<?php echo $transactionURL; ?>' name='f1'>

                            <div class="col col-md-12">
                                <input type="text" name="ORDER_ID" value="<?php echo $orderId; ?>">
                                <div class="invalid-feedback">orderid field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                                <input type="text" name="CUST_ID" value="<?php echo $custId; ?>">
                                <div class="valid-feedback">Email field is valid!</div>
                                <div class="invalid-feedback">custid field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                                <input type="text" name="MOBILE_NO" value="<?php echo $mobileNo; ?>">
                                <div class="invalid-feedback">mobileno field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                                <input type="text" name="EMAIL" value="<?php echo  $email; ?>">
                                <div class="invalid-feedback">email field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                                <input type="text" name="TXN_AMOUNT" value="<?php echo   $txnAmount; ?>">
                                <div class="invalid-feedback">txnamount field cannot be blank!</div>
                            </div>

                            <input type="hidden" name="MID" value="<?php echo PAYTM_MERCHANT_MID; ?>">
                            <input type="hidden" name="CHANNEL_ID" value="<?php echo PAYTM_CHANNEL_ID;; ?>">
                            <input type="hidden" name="WEBSITE" value="<?php echo PAYTM_MERCHANT_WEBSITE; ?>">
                            <input type="hidden" name="INDUSTRY_TYPE_ID" value="<?php echo PAYTM_INDUSTRY_TYPE_ID; ?>">
                            <input type="hidden" name="CALLBACK_URL" value="<?php echo PAYTM_CALLBACK_URL; ?>">
                            <input type="hidden" name="CHECKSUMHASH" value="<?php echo $paytmChecksum ?>">
                            


                            <div class="form-button mt-3">
                                <button type="submit" class="btn btn-outline-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- visible only on xs -->

    <!-- link the external stylesheet -->
    <script src=".../address.js"></script>
    <!-- j query -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- owl carousel -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>



</html>