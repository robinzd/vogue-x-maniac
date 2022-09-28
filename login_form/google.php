<?php
session_start();
include("../conn.php");
include("../function.php");



// google integration code starts//

require './google-api-php-client-2.4.0/google-api-php-client-2.4.0/vendor/autoload.php';

$clientId = "428003245396-63d10kjmatp8ubebi6qunbdj6sjvn1t9.apps.googleusercontent.com";
$clientSecret = "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";
$redirectURI = "https://vogue-x-maniac.herokuapp.com/login_form/login.php";


$client = new Google_Client();
$client->setClientId($clientId);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectURI);
$client->addScope("email");
$client->addScope("profile");

if(isset($_GET["code"])){
    $token = $client->fetchAccessTokenWithAuthCode($_GET["code"]);
    $client->setAccessToken($token["access_token"]);

    $obj = new Google_Service_Oauth2($client);
    $data = $obj->userinfo->get();

	$user_id = random_num(20);
    $email = $_SESSION["email"] = $data->email;
    echo $email;
    $first_name = $_SESSION["givenName"] = $data->givenName;
    $last_name = $_SESSION["familyName"] = $data->familyName;
    $name = $_SESSION["name"] = $data->name;


    // var_dump($data);

	


    $get_users = "select user_email from users where user_email='$email'";

    echo $get_users;

    $run_users = mysqli_query($conn, $get_users);

    while ($row_users = mysqli_fetch_array($run_users)) {

        $user_email = $row_users['user_email'];
        echo $user_email;
    }
     if (!empty($data->email) && !empty($data->name) &&  $user_email !== $data->email) {
            $query_address = mysqli_query($conn, "INSERT INTO `users`( `user_id`, `first_name`, `last_name`, `user_email`,`user_password`,`user_mob_no`,`is_admin`) VALUES ('$user_id','$first_name','$last_name','$email','NULL','NULL','0')");
            if ($query_address) {
                echo "<script>alert('hai');</script>";
                header("location:home.php");
            }
    }else{
        header("location:../index.php");
    }
}

// echo "<a href='" . $client->createAuthUrl() . "'>Login With Google</a>";

//google integration code ends//

?>