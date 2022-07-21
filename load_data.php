<?php
session_start();

include("./conn.php");
include("./function.php");

$user_data = check_login($conn);

$userid = $user_data['user_id'];

if (isset($_POST['lastid']) && $_POST['lastid']!="") {
    $last_id_1 = $_POST["lastid"];



    $real_status = "TXN_SUCCESS";

    $cod_payment = 250;

    $get_order_no = "select * from order_info where user_id='$userid' and ID < $last_id_1 ORDER BY ID DESC LIMIT 5 ";

    $run_order_no = mysqli_query($conn, $get_order_no);



    while ($row_order_no = mysqli_fetch_array($run_order_no)) {

        $order_no_1 = $row_order_no['order_id'];

        $status_1 = $row_order_no['current_status'];

        $final_amount = $row_order_no['transaction_amount'];


        $get_order_no1 = "select * from payment_info where order_id=$order_no_1";

        $run_order_no1 = mysqli_query($conn, $get_order_no1);

        while ($row_order_no1 = mysqli_fetch_array($run_order_no1)) {

            $order_number = $row_order_no1['order_id'];


            $get_orders = "select * from users_order where user_id ='$userid' and order_id='$order_no_1'";

            $run_orders = mysqli_query($conn, $get_orders);

            while ($row_orders = mysqli_fetch_array($run_orders)) {

                $date_time = $row_orders['created_date_time'];
            }

            $get_amount = "select * from transaction_amount where order_id=$order_number";

            $run_amount = mysqli_query($conn, $get_amount);

            while ($row_amount = mysqli_fetch_array($run_amount)) {

                $full_amount = $row_amount['transaction_amount'];
            }

            echo "<div   class='order my-3 bg-light'>
                        <div class='row'>
                            <div class='col-lg-12'>
                                <div class='d-flex flex-column justify-content-between order-summary'>
                                    <div class='d-flex align-items-center'>
                                        <div class='text-uppercase'>Order No:$order_number</div>";
?>
            <?php
            if ($final_amount == $cod_payment) {
                echo "<div class='yellow-label ms-auto text-capitalize'>COD</div>";
            } elseif ($status_1 == $real_status) {
                echo "<div class='green-label ms-auto text-capitalize'>paid</div>";
            } else {
                echo "<div class='red-label ms-auto text-capitalize'>Failed</div>";
            }
            ?>
            <?php
            echo "</div>
                                    <div class='fs-8'><strong>Date:$date_time</strong></div>
                                </div>
                            </div>
                            <div class='col-lg-12'>
                                <div class='d-sm-flex align-items-sm-start justify-content-sm-between'>";
            ?>
            <?php
            $get_realtime_status = "select realtime_status from status_info where order_id=$order_number";

            $run_realtime_status = mysqli_query($conn, $get_realtime_status);

            while ($row_realtime_status = mysqli_fetch_array($run_realtime_status)) {

                $realtime_status_1 = $row_realtime_status['realtime_status'];
            }
            $balance_amount = $full_amount - $cod_payment;
            if ($final_amount == $cod_payment) {
                echo "<div class='status'>Status:$realtime_status_1<h6>Balance amount <strong>₹$balance_amount.00</strong> @ your Doorstep</h6></div>";
            } elseif ($status_1 == $real_status) {
                echo "<div class='status'>Status :$realtime_status_1</div>";
            } else {
                echo "<div class='status'>Status :Cancelled</div>";
            }
            ?>

            <?php

            echo " <form method='Post' action='order_read.php'>
                                <input type='hidden' name='orderid' value='$order_number'>
                                <input type='hidden' name='date' value='$date_time'>
                                <input type='hidden' name='status' value='$status'>";

            ?>
            <?php
            if ($status_1 == $real_status) {
                echo "<button class='btn text-capitalize' type='submit'>order info</button>";
            }
            ?>
    <?php
            echo "</form>
                                </div>
                            </div>
                        </div>
                    </div>";
            $last_id = $row_order_no['ID'];
        }
    }

    ?>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="button" id="btnLoad" data-id="<?php echo $last_id ?>">More Orders</button>
    </div>

<?php



}

else{
    echo '<div class="d-grid gap-2 col-6 mx-auto">
    <button class="btn btn-primary" type="button" id="btnLoad" disabled>No More Data.</button>
</div>';
    
}

?>