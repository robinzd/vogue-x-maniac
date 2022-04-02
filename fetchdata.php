




<!DOCTYPE html>
<html lang="en">



    <?php

    //fetchdata.php

    include("./db_conn.php");

     include("./conn.php");


   

    if (isset($_POST["action"])) {
        $query = "
  SELECT * FROM shop_page WHERE product_status = '1'
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
                $output .= '
    <div class="col-sm-6 col-md-4">
                            <div class="card bg-white">
        <img class="card-img-top" src="./admin_area/product_images/' . $row['product_image'] . '" style="width:100%">
        <div class="card-body">
            <h5 class="card-title text-center">' . $row['product_title'] . '</h5>
        <p class="card-text  text-center"><s>₹' . $row['product_strikeout_price'] . '</s>₹' . $row['product_price'] . '</p>
            <div class="text-center">
                <a href="details.php" class="btn btn-success">See Details</a>
                <a href="#" class="btn btn-success">Add to Cart</a>
            </div>
        </div>
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

   

