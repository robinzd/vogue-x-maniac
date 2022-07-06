<?php

function check_login($conn)
{

    if(isset($_SESSION['user_id']))
    {
        $id = $_SESSION['user_id'];
        $query ="select*from admin_login where user_id ='$id' limit 1";

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
