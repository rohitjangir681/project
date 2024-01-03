<h2>City delete file...</h2>

<?php 
require_once("config.php");

$id = $_GET["id"];

// echo $id;

$cityDelete = "DELETE FROM `cities` WHERE id=$id";


if($id) {
if($conn->query($cityDelete)) {
    $_SESSION["success"] = "City delete success...";
} else {
    $_SESSION["error"] = "Something wrong...";
} 
} else {
    $_SESSION["error"] = "City id not found...";
}

header("location:city-list.php");



?>