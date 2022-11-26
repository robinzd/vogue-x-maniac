<?php
//Get Heroku ClearDB connection information
// $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
// $cleardb_server = $cleardb_url["host"];
// $cleardb_username = $cleardb_url["user"];
// $cleardb_password = $cleardb_url["pass"];
// $cleardb_db = substr($cleardb_url["path"],1);
// $active_group = 'default';
// $query_builder = TRUE;
// Connect to DB
// $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
// Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
$host="127.0.0.1";
$port=3306;
$socket="";
$user="u291904117_usctU";
$password="Robin@123";
$dbname="u291904117_kEVdC";
// connect to db
$conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());
// Check connection
if (!$conn) {
    die("Connection failed(Check): " . mysqli_connect_error());
}
?>

<!-- 217.21.85.52 -->