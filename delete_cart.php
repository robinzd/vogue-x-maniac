<?php
	require_once './conn.php';

    $deletequery=mysqli_query($conn, "DELETE FROM `products_cart`");
    
	if($deletequery){
    echo "<script>alert('item deleted in the cart');</script>"; 
    echo "<script>window.location.href = 'product_cart.php'</script>"; 
   }
    else{
        echo "<script>alert('sopmething went wrong');</script>"; 
    }
?>