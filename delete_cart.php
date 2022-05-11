<?php
	include("./conn.php");

    $userid = $user_data['user_id'];

    $deletequery=mysqli_query($conn, "DELETE * FROM products_cart where user_id=$userid");

    if($deletequery){
    echo "<script>alert('you have successfully emptyed the cart!');</script>"; 
    echo "<script>window.location.href = 'product_cart.php'</script>"; 
   }
    else{
        echo "<script>alert('sopmething went wrong');</script>"; 
    }
?>