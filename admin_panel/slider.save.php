<?php
include "../conn.php";


if (count($_POST) > 0) {
    if ($_POST['type'] == 1) {
        $slider_name = $_POST['slider_name'];
        $slider_image = $_POST['slider_image'];
        // echo $slider_image;
        $sql = "INSERT INTO `slider_1`( `slider_name`, `slider_image`) VALUES ('$slider_name','$slider_image')";
        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("statusCode" => 200));
        } else {
            echo json_encode("Error: " . $sql . "<br>" . mysqli_error($conn));
        }
        mysqli_close($conn);
    }
}
if (count($_POST) > 0) {
    if ($_POST['type'] == 2) {
        $slider_id = $_POST['id'];
        $slider_name = $_POST['name'];
        $slider_image = $_POST['image'];
        $sql = "UPDATE `slider_1` SET `slider_name`='$slider_name',`slider_image`='$slider_image'";
        // echo $sql;
        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("statusCode" => 200));
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
if (count($_POST) > 0) {
    if ($_POST['type'] == 3) {
        $slider_id = $_POST['id'];
        $sql = "DELETE FROM `slider_1` WHERE slider_id=$slider_id ";
        if (mysqli_query($conn, $sql)) {
            echo $slider_id;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
if (count($_POST) > 0) {
    if ($_POST['type'] == 4) {
        $slider_id = $_POST['id'];
        $sql = "DELETE FROM slider_1 WHERE slider_id in ($slider_id)";
        if (mysqli_query($conn, $sql)) {
            echo $slider_id;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
