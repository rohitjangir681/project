<h2>State Save..</h2>

<?php 
require_once("config.php");

$data = $_POST;


$country_id = $data["country_id"];

$name = $data["state"];
$status = $data["status"];

$cityName = $data["cityName"];
$cityStatus = $data["cityStatus"];



$insertQuery = "INSERT INTO `states` (country_id, name, status) VALUES ($country_id, '$name', $status)";
$conn->query($insertQuery);


$stId = $conn->insert_id;

foreach($cityName as $key => $ctName) {
    $ctStatus = $cityStatus[$key];
    $insertQuery = "INSERT INTO `cities` (name, status, state_id, country_id) VALUES ('$ctName', $ctStatus, $stId, $country_id)";
    $conn->query($insertQuery);
}




if($data["save"]) {
    header("location:states-list.php");
} elseif($data["save_new"]) {
    header("location:state-add.php");
}



?>