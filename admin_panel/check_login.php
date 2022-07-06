<?php


function check($conn)
{

    if(isset($_SESSION['password_admin']))
    {
        $id = $_SESSION['password_admin'];
        $query ="select*from admin_login where password_admin='$id'";

        $result = mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    // redirecting to login page
    header("location:admin_panel_login.php");

    // die;


}

?>