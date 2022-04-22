<!DOCTYPE html>
<html lang="en">



<?php

//fetchdata.php

include("./db_conn.php");

include("./conn.php");




if (isset($_POST["action"])) {
    $query = "
  SELECT * FROM products_details WHERE product_status = '1'
 ";


    if (isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])) {
        $query .= "
   AND product_price BETWEEN '" . $_POST["minimum_price"] . "' AND '" . $_POST["maximum_price"] . "'
  ";
    }
    if (isset($_POST["brand"])) {
        $brand_filter = implode("','", $_POST["brand"]);
        $query .= "
   AND product_brand IN('" . $brand_filter . "')
  ";
    }
    if (isset($_POST["category"])) {
        $category_filter = implode("','", $_POST["category"]);
        $query .= "
   AND product_category IN('" . $category_filter . "')
  ";
    }


    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $total_row = $statement->rowCount();
    $output = '';
    if ($total_row > 0) {
        foreach ($result as $row) {

            $product_id = $row['ID'];

            $get_products_image = "select details_image from products_images where primary_image=1 and related_product=$product_id";

            $run_products_image = mysqli_query($conn, $get_products_image);
            $details_image = null;
            while ($row_products_image = mysqli_fetch_array($run_products_image)) {
                $details_image = $row_products_image['details_image'];
            }
            $output .= '
    <div class="col-sm-6 col-md-4">
                            <div class="card bg-white">
                            <a href="details.php?id=' . $row['ID'] . '"><img class="card-img-top" src="./admin_panel/products_images/images/' . $details_image . '" style="width:100%">
        <div class="card-body">
            <h5 class="card-title text-center">' . $row['product_title'] . '</h5>
        <p class="card-text  text-center"><s>₹' . $row['product_strikeout_price'] . '</s>₹' . $row['product_price'] . '</p>
        </div></a>
    </div>
    </div>
   ';
        }
    } else {
        $output = '<img src="noresultfound-removebg-preview.png">';
    }
    echo $output;
}

?>