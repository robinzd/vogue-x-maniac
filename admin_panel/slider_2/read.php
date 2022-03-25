<?php
include('dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Read Slider</title>
    <link rel="icon" type="image/png" href="../favicon/icons8-admin-settings-male-48.png"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Roboto', sans-serif;
        }

        .table-responsive {
            margin: 30px 0;
        }

        .table-wrapper {
            min-width: 1000px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            font-size: 15px;
            padding-bottom: 10px;
            margin: 0 0 10px;
            min-height: 45px;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .table-title select {
            border-color: #ddd;
            border-width: 0 0 1px 0;
            padding: 3px 10px 3px 5px;
            margin: 0 5px;
        }

        .table-title .show-entries {
            margin-top: 7px;
        }

        .search-box {
            position: relative;
            float: right;
        }

        .search-box .input-group {
            min-width: 200px;
            position: absolute;
            right: 0;
        }

        .search-box .input-group-addon,
        .search-box input {
            border-color: #ddd;
            border-radius: 0;
        }

        .search-box .input-group-addon {
            border: none;
            border: none;
            background: transparent;
            position: absolute;
            z-index: 9;
        }

        .search-box input {
            height: 34px;
            padding-left: 28px;
            box-shadow: none !important;
            border-width: 0 0 1px 0;
        }

        .search-box input:focus {
            border-color: #3FBAE4;
        }

        .search-box i {
            color: #a0a5b1;
            font-size: 19px;
            position: relative;
            top: 8px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child {
            width: 130px;
        }

        table.table td a {
            color: #a0a5b1;
            display: inline-block;
            margin: 0 5px;
        }

        table.table td a.view {
            color: #03A9F4;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #E34724;
        }

        table.table td i {
            font-size: 19px;
        }

        .pagination {
            float: right;
            margin: 0 0 5px;
        }

        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            padding: 0 10px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 30px !important;
            text-align: center;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.active a {
            background: #03A9F4;
        }

        .pagination li.active a:hover {
            background: #0397d6;
        }

        .pagination li.disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }

        .hint-text {
            float: left;
            margin-top: 10px;
            font-size: 13px;
        }

        .fa-home {
            color: black;
        }

        .text-center {
            color: grey;
        }

        .btn-circle.btn-xl {
            width: 50px;
            height: 50px;
            padding: 10px 10px;
            border-radius: 35px;
            font-size: 20px;
            text-align: center;
            box-shadow: 0px 4px 4px #888888;

        }

        i.material-icons {
            margin-top: 2px;
        }

        .btn-circle.btn-xl:hover {
            background-color: black;
        }

        .fa-pen {
            margin-top: 2px;
        }

        

        footer.bg-light.text-center.text-lg-start {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;


        }

        .text-center.p-3 {
            color: black;
        }

        a.text1 {
            color: black;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-5">
                            <h2>Slider <b>Details</b></h2>
                        </div>
                        <?php
                        $vid = $_GET['viewid'];
                        $ret = mysqli_query($conn, "select * from slider_2 where ID =$vid");
                        $cnt = 1;
                        while ($row = mysqli_fetch_array($ret)) {

                        ?>

                            <div class="col-sm-7" align="right">
                                <a href="edit.php?editid=<?php echo htmlentities($row['ID']); ?>" class="btn btn-success btn-circle btn-xl"><i class="material-icons">&#xE254;</i></a>

                            </div>
                    </div>
                </div>
                <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">

                    <tbody>


                        <tr>
                            <th>Slider Name</th>
                            <td><?php echo $row['slider2_name']; ?></td>
                        </tr>

                        <tr>
                            <th width="200">slider Image</th>
                            <td><img src="slides2_images/<?php echo $row['slider2_image']; ?>" width="80" height="80"></td>
                        </tr>


                    <?php
                            $cnt = $cnt + 1;
                        } ?>

                    </tbody>
                </table>

            </div>
        </div>
        <div class="text-center">Back To Home <a href="slider2.php"><i class="fa fa-home"></i></a></div>
    </div>
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color:#f5f5f5;">
            © 2022 Copyright:
            <a class="text1" href="/index.php">Vogue X Maniac</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>