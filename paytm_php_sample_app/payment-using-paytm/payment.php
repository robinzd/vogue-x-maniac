<?php
require_once("PaytmKit/lib/config_paytm.php");
require_once("PaytmKit/lib/encdec_paytm.php");

$transaction_amount = $_POST['txn_no'];
$customer_id = $_POST['cust_id'];
$mobile_number = $_POST['mob_no'];
$email = $_POST['email'];
$order_id=$_POST['orderid'];

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
echo  $txnAmount;
echo '</br>';
$custId     = "$customer_id";
echo  $custId;
echo '</br>';
$mobileNo     = "$mobile_number";
echo $mobileNo;
echo '</br>';
$email         = "$email";
echo  $email;
echo '</br>';

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
print_r($paytmChecksum);

$transactionURL = PAYTM_TXN_URL;
// $transactionURL = "https://securegw-stage.paytm.in/theia/processTransaction";
// $transactionURL = "https://securegw.paytm.in/theia/processTransaction"; // for production
?>
<html>

<head>
    <title>Merchant Checkout Page</title>
</head>

<body>
    <center>
        <h1>Please do not refresh this page...</h1>
    </center>
    <form method='post' action='<?php echo $transactionURL; ?>' name='f1'>

        <input type="text" name="ORDER_ID" value="<?php echo $orderId; ?>"><br>
        <input type="text" name="CUST_ID" value="<?php echo $custId; ?>"><br>
        <input type="text" name="MOBILE_NO" value="<?php echo $mobileNo; ?>"><br>
        <input type="text" name="EMAIL" value="<?php echo  $email; ?>"><br>
        <input type="text" name="TXN_AMOUNT" value="<?php echo   $txnAmount; ?>"><br>
        <input type="hidden" name="MID" value="<?php echo PAYTM_MERCHANT_MID; ?>">
        <input type="hidden" name="CHANNEL_ID" value="<?php echo PAYTM_CHANNEL_ID;; ?>">
        <input type="hidden" name="WEBSITE" value="<?php echo PAYTM_MERCHANT_WEBSITE; ?>">
        <input type="hidden" name="INDUSTRY_TYPE_ID" value="<?php echo PAYTM_INDUSTRY_TYPE_ID; ?>">
        <input type="hidden" name="CALLBACK_URL" value="<?php echo PAYTM_CALLBACK_URL; ?>">
        <input type="hidden" name="CHECKSUMHASH" value="<?php echo $paytmChecksum ?>">
        <input type="submit" name="submit" value="submit" />

    </form>
    <!-- <script type="text/javascript">
            document.f1.submit();
        </script> -->
</body>

</html>