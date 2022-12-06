<?php
$host="217.21.85.52";
$port=3306;
$socket="";
$user="u291904117_admin";
$password="Robin@123";
$dbname="u291904117_schema";
// connect to db
$conn = mysqli_connect($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());
// Check connection
if (!$conn) {
    die("Connection failed(Check): " . mysqli_connect_error());
}
?>
