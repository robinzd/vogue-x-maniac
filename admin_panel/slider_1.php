<?php
include './conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Services Data</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./slider_1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="./slider_1_ajax.js"></script>

</head>

<body>
    <div class="container">
        <p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-xs-2 col-md-1">
                        <a href="#"><i class="material-icons home">home</i></a>
                    </div>
                    <div class="col-xs-10 col-md-5">
                        <h2>Manage <b>Services</b></h2>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <a href="#addServiceModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Service</span></a>
                        <a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                    </div>
                </div>
            </div>
            <!-- table start -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label>
                                </span>
                            </th>
                            <th>Slider ID</th>
                            <th>Slider Name</th>
                            <th>Slider Image</th>
                            <th>ACTION</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Check Row</td>
                        </tr>
                        <?php
                        echo "<tr>
                        <td>Check Row</td>
                    </tr>";
                        $result = mysqli_query($conn, "SELECT * FROM  slider_1");
                        $i = 1;
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>
                            <td>Check Row inside loop</td>
                        </tr>";
                        ?>
                            <tr>
                                <td>Check outside</td>
                                <td><?php echo $row["slider_name"]; ?></td>
                            </tr>

                        <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>

            </div>
            <!-- table end -->
        </div>

    </div>
    <div id="addServiceModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="user_form">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Service</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">


                        <div class="form-group">
                            <label>slider name</label>
                            <input type="text" id="slider_name" name="slider_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>slider image</label>
                            <input type="file" id="slider_image" name="slider_image" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" value="1" name="type">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="button" class="btn btn-success" id="btn-add">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>