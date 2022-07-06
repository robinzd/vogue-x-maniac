<?php


function check($conn)
{

    if(isset($_SESSION['admin_id']))
    {
        $id = $_SESSION['admin_id'];
        $query ="select*from admin_login where admin_id ='$id' limit 1";

        $result = mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $admin_data = mysqli_fetch_assoc($result);
            return $admin_data;
        }
    }

    // redirecting to login page
    header("location:admin_panel.php");

    // die;


}