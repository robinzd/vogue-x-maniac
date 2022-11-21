<?php


$host="217.21.85.52";
$port=3306;
$socket="";
$user="u291904117_usctU";
$password="Robin@123";
$dbname="u291904117_kEVdC";

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());





// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>