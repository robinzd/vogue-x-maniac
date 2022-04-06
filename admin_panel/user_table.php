<?php
//database conection  file
include('dbconnection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Table</title>
    <!-- fav icon -->
    <link rel="icon" type="image/png" href="./favicon/icons8-male-user-48.png" />
    <!-- bootsstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--box icon cdn -->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- link the external stylesheet -->
    <link rel="stylesheet" type="text/css" href="admin_panel.css">

</head>

<body>

    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="navbar__right">
                <a href="#">
                    <i class="fa fa-bell" aria-hidden="true"></i>
                </a>
                <a href="#">
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
                        <a href="./user_table.php" class="nav_link active"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a> 
                        <!-- <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i>
                            <span class="nav_name">Messages</span> </a> <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a> <a href="#" class="nav_link">
                            <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a> <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a> -->
                    </div>

            </nav>
        </div>

        <div class="table-responsive">
            <div class="top-text">
                <div class="icon"><i class="fa fa-table"></i></div>
                <div class="text">Users Table</div>
            </div>
            <table class="table table-dark  table-hover">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>User ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>User Email</th>
                        <th>Created Time</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ret = mysqli_query($conn, "select user_id,first_name,last_name,user_email,created_time from users");
                    $cnt = 1;
                    $row = mysqli_num_rows($ret);
                    if ($row > 0) {
                        while ($row = mysqli_fetch_array($ret)) {

                    ?>
                            <!--Fetch the Records -->
                            <tr>
                                <td><?php echo $cnt; ?></td>
                                <td><?php echo $row['user_id']; ?></td>
                                <td><?php echo $row['first_name']; ?></td>
                                <td><?php echo $row['last_name']; ?></td>
                                <td><?php echo $row['user_email']; ?></td>
                                <td><?php echo $row['created_time']; ?></td>
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