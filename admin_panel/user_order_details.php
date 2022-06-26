<?php
//database conection  file
include('dbconnection.php');
//Code for deletion
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Users Order Details</title>
    <!-- fav icon -->
    <link rel="icon" type="image/png" href="./favicon/icons8-data-sheet-48.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!--box icon cdn -->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- link the external stylesheet -->
    <link rel="stylesheet" type="text/css" href="./admin_panel.css">

   
</head>


<!-- navbar starts -->


<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="navbar__right">
            <!-- <a href="#">
                    <i class="fa fa-bell" aria-hidden="true"></i>
                </a> -->
            <a href="../index.php">
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
                    <a href="./user_message.php" class="nav_link "> <i class='bx bx-message-square-detail nav_icon'></i>
                        <span class="nav_name">Messages</span> </a>
                    <a href="./user_order_details.php" class="nav_link active"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Users Orders</span></a> 
                    <!-- <a href="#" class="nav_link">
                            <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a> <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a> -->
                </div>

        </nav>
    </div>

    <div class="top-text">
        <div class="icon"><i class="fa fa-table"></i></div>
        <div class="text">Users Orders Table</div>
    </div>




    <!-- navbar ends -->


    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
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


        <footer class="bg-light text-center">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color:ghostwhite;">
                © 2022 Copyright:
                <a class="text1" href="../index.php">Vogue X Maniac</a>
            </div>
        </footer>
</body>

</html>