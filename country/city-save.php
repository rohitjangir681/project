<h2>City save file...</h2>

<?php 
require_once("config.php");

$data = $_POST;

// dd($_POST);

$cityName = $data["city"];
$status = $data["status"];
$country_id = $data["country_id"];
$state_id = $data["state_id"];

$insertQuery = "INSERT INTO `cities` (name, status, country_id, state_id) VALUES ('$cityName', $status, $country_id, $state_id)";

$conn->query($insertQuery);

header("location:city-list.php");



?>