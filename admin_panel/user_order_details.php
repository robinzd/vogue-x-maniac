<?php
//database conection  file
session_start();
include('dbconnection.php');
include("check_login.php");

check_login($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Order Details</title>
    <!-- fav icon -->
    <link rel="icon" type="image/png" href="./favicon/icons8-data-sheet-48.png" />
    <!-- bootsstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--box icon cdn -->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- link the external stylesheet -->
    <!-- material icon link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="admin_panel.css">
    <!-- external javascript page -->
    <script src="./admin_details.js"></script>

</head>

<body>

    <!-- back to top starts -->


    <?php include "./back_to_top.php"; ?>

    <!--back to top ends -->

    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="navbar__right">
                <!-- <a href="#">
                    <i class="fa fa-bell" aria-hidden="true"></i>
                </a> -->
                <a href="./admin_logout.php">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                </a>
                <a href="#">
                    <img width="30" src="assets/avatar.svg" alt="" />
                    <!-- <i class="fa fa-user-circle-o" aria-hidden="true"></i> -->
                </a>
            </div>

        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> <a href="#" class="nav_logo"><i class="fa fa-user"></i><span class="nav_logo-name">Admin Panel</span> </a>
                    <div class="nav_list"> <a href="./admin_panel.php" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                        <a href="./user_table.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users Table</span> </a>
                        <a href="./user_message.php" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i>
                            <span class="nav_name">Messages</span> </a>
                        <a href="./user_order_details.php" class="nav_link active"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Users Orders</span> </a>
                        <!-- <a href="#" class="nav_link">
                            <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a> <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a> -->
                    </div>

            </nav>
        </div>



        <div class="top-text">
            <div class="icon"><i class="fa fa-table"></i></div>
            <div class="text">Users Orders Table</div>
        </div>


        <form class="form-inline d-flex justify-content-end md-form form-sm mt-0" method="post">
            <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
            <button type="submit"><span><i class="fa fa-search" aria-hidden="true"></i><span></button>
        </form>



        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <!-- <div class="table-title">
                        <div class="row">
                            <div class="col-sm-5">
                                <h2>Users Table</h2>
                            </div>
                            <div class="col-sm-7">

                            </div>
                        </div>
                    </div> -->

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Order Id</th>
                                <th>Transaction Amount</th>
                                <th>Payment Mode</th>
                                <th>Transaction Date</th>
                                <th>Transaction Status</th>
                                <th>Gateway</th>
                                <th>Bank Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $status = 'TXN_SUCCESS';
                            $ret = mysqli_query($conn, "select * from payment_info");
                            $cnt = 1;
                            $row = mysqli_num_rows($ret);
                            if ($row > 0) {
                                while ($row = mysqli_fetch_array($ret)) {

                                    $order_id = $row['order_id'];
                                    $transaction_status = $row['current_status'];

                            ?>
                                    <!--Fetch the Records -->
                                    <tr>
                                        <td><?php echo $cnt; ?></td>
                                        <td><?php echo $row['order_id']; ?></td>
                                        <td><?php echo $row['transaction_amount']; ?></td>
                                        <td><?php echo $row['payment_mode']; ?></td>
                                        <td><?php echo $row['transaction_date']; ?></td>
                                        <td><?php echo $row['current_status']; ?></td>
                                        <td><?php echo $row['gateway']; ?></td>
                                        <td><?php echo $row['bank_name']; ?></td>
                                        <td>
                                            <?php
                                            if ($transaction_status ==  $status) {
                                                echo "<a href='user_order_read.php?order_id=$order_id' class='view' title='View' data-toggle='tooltip'><i class='material-icons'>&#xE417;</i></a>";
                                            } else {
                                                echo "<h8 class='don'>Order Cancelled</h8>";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php
                                    $cnt = $cnt + 1;
                                }
                            } else { ?>
                                <tr>
                                    <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- j query -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="admin_panel.js"></script>


        <!-- Copyright -->

        <footer class="bg-light text-center">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color:ghostwhite;">
                © 2022 Copyright:
                <a class="text1" href="../index.php">Vogue X Maniac</a>
            </div>
        </footer>

    </body>

</html>