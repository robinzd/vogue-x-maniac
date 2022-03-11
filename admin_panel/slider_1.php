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

                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM  slider_1");
                        $i = 1;
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr id="<?php echo $row["slider_id"]; ?>">
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" class="user_checkbox" data-user-sno="<?php echo $row["slider_id"]; ?>">
                                        <label for="checkbox2"></label>
                                    </span>
                                </td>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row["slider_name"]; ?></td>
                                <td><?php echo $row["slider_image"]; ?></td>
                                <td>
                                    <a href="#editServiceModal" class="edit" data-toggle="modal">
                                        <i class="material-icons update" data-toggle="tooltip" data-sno="<?php echo $row["sno"]; ?>" data-service="<?php echo $row["service"]; ?>" data-price="<?php echo $row["price"]; ?>" data-person="<?php echo $row["contact_person"]; ?>" data-number="<?php echo $row["contact_no"]; ?>"
                                         data-dates="<?php echo $row["dates_available"];?>" data-places="<?php echo $row["place"];?>" title="Edit">&#xE254;</i>
                                    </a>
                                    <a href="#deleteServiceModal" class="delete" data-sno="<?php echo $row["sno"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>
                        <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- Add Modal HTML -->
    <div id="addServiceModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="user_form">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Service</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <!-- <div class="form-group"> -->

                        <div class="form-group">
                            <label>Service</label>
                            <input type="text" id="service" name="service" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" id="price" name="price" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Contact Person</label>
                            <input type="text" id="contactperson" name="contactperson" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Contact No</label>
                            <input type="number" id="contactnumber" name="contactnumber" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Dates Available</label>
                            <input type="date" id="dates" name="dates" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label>Image</label>
                        <input type="file" id="images" name="images" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Place</label>
                            <input type="text" id="places" name="places" class="form-control" required>
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

    <div id="editServiceModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="update_form">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Service</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="sno_u" name="sno" class="form-control" required>
                        <div class="form-group">
                            <label>Service</label>
                            <input type="text" id="service_u" name="service" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" id="price_u" name="price" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Contact Person</label>
                            <input type="text" id="contactperson_u" name="contactperson" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Contact No</label>
                            <input type="number" id="contactnumber_u" name="contactnumber" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Dates Available</label>
                            <input type="date" id="dates_u" name="dates" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Place</label>
                            <input type="text" id="places_u" name="places" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" value="2" name="type">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="button" class="btn btn-info" id="update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteServiceModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>

                    <div class="modal-header">
                        <h4 class="modal-title">Delete Service</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="sno_d" name="sno" class="form-control">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="button" class="btn btn-danger" id="delete">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="./slider_1_ajax.js"></script>

</body>


</html>