<?php 
require_once("config.php");

$data = $_POST;

$id = $data["id"]; 
$country_id = $data["country_id"];
$state_id = $data["state_id"];
$name = $data["city"];
$status = $data["status"];


$updateQuery = "UPDATE `cities` SET country_id=$country_id, state_id=$state_id, name='$name', status=$status WHERE id=$id";

if($id) {
if($conn->query($updateQuery)) {
    $_SESSION["success"] = "Update Success...";
} else {
    $_SESSION["error"] = "Something wrong...";
} 
} else {
    $_SESSION["error"] = "Id not found. please try again...";
}


header("location:city-list.php");


?>