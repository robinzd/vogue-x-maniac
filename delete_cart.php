<?php
	session_start();

    include("./conn.php");
    include("./function.php");
    
    $user_data = check_login($conn);
    
    $userid = $user_data['user_id'];

    $deletequery=mysqli_query($conn,"delete from products_cart where user_id=$userid");

    if($deletequery){
    echo "<script>alert('you have successfully emptyed the cart!');</script>"; 
    echo "<script>window.location.href = 'product_cart.php'</script>"; 
   }
    else{
        echo "<script>alert('sopmething went wrong');</script>"; 
    }
?>