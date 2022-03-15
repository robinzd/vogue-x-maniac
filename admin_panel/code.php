<?php
session_start();
include('../conn.php');


if (isset($POST['add'])) {
    $slidername = $_POST['slidername'];
    $sliderimage = $_FILES['sliderimage'];

    if (file_exists("upload/" . $_FILES["image"]["name"])) {
        $store = $_FILES["image"]["name"];
        $_SESSION['status'] = "Image already exsists. '.$store. '";
        header('Location: slider_1.php');
    } else {
        $query = "INSERT INTO slider_1 (slider_name,slider_image) VALUES ('$slidername','$sliderimage')";

        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            move_uploaded_file(["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);

            $_SESSION['success'] = "Data Published Successfully";
            header("Location: slider_1.php");
            echo "hai";
        } else {
            $_SESSION['success'] = "Data not inserted";
            header("Location: slider_1.php");
            echo "how are u";
        }
    }
}
?>