<?php

// echo "Check from Data base";
//Get Heroku ClearDB connection information
// $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_url = parse_url("mysql:host=217.21.85.52;dbname=u291904117_kEVdC", "u291904117_usctU", "Robin@123");
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);





// Check connection
if (!$conn) {
    die("Connection failed(Check): " . mysqli_connect_error());
}
?>
