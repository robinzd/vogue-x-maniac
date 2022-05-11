<?php
	include("./conn.php");

    $deletequery=mysqli_query($conn, "DELETE FROM `products_cart`");

    if($deletequery){
    echo "<script>alert('you have successfully emptyed the cart!');</script>"; 
    echo "<script>window.location.href = 'product_cart.php'</script>"; 
   }
    else{
        echo "<script>alert('sopmething went wrong');</script>"; 
    }
?>