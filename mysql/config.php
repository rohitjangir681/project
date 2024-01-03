<?php 
session_start();
function dd($data) {
    echo "<pre>";
    print_r($data);
    die;

}



$host = "localhost"; // 127.0.01
$username = "root";
$password = "";
$databaseName = "new_database";

$conn = mysqli_connect($host, $username, $password, $databaseName);

if(!$conn) {
    echo "Connection not established...";
    die;
}




?>