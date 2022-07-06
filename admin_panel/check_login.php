<?php
function check_login($conn)
{

    if (isset($_SESSION['password_admin'])) {
        $id = $_SESSION['password_admin'];
        $query = "select*from admin_login where password_admin ='$id'";

        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $admin_password = mysqli_fetch_assoc($result);
            return $admin_password;
        }
    }

    // redirecting to login page
    header("location:admin_panel_login.php");

    // die;


}
?>
