<?php
require_once("PaytmKit/lib/config_paytm.php");
require_once("PaytmKit/lib/encdec_paytm.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
$(document).ready(function() {
    $("#submit").trigger('click');
});

</script>


<body>
    <?php
    print_r($_POST);
    $paytmChecksum = getChecksumFromArray($_POST, PAYTM_MERCHANT_KEY);
    $transactionURL = PAYTM_TXN_URL;
    ?>
    <form method='post' action='<?php echo $transactionURL; ?>' name='f1'>
    <?php
    foreach ($_POST as $name => $value) {
            echo '<label>'.$name.'   :</label>';
            echo '<input type="text" name="' . $name . '" value="' . $value . '">';
            // echo '<input type="text" name="' . $name . '" value="">';
            echo '</br>';
        }
        ?>
    <input name="CHECKSUMHASH" value="<?php echo $paytmChecksum ?>">
    </br>
    <input type="submit" name="submit" value="submit" id="submit" />
    </form>

    <?php
    $result=verifychecksum_e($_POST,PAYTM_MERCHANT_KEY,$paytmChecksum);
    echo $result;
    ?>
</body>

</html>