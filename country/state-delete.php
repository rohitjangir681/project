<h2>State Delete page...</h2>

<?php 
require_once("config.php");

$id = $_GET["id"];


// echo $id;

$stateDelete = "DELETE FROM `states` WHERE id=$id";

$cityDelete = "DELETE FROM `cities` WHERE state_id=$id";
$conn->query($cityDelete);



if($id) {
if($conn->query($stateDelete)) {
    $_SESSION["success"] = "State Delete success...";
} else {
    $_SESSION["error"] = "Something wrong...";
} 
} else {
    $_SESSION["error"] = "Id not found, please try again...";
}


header("location:states-list.php");



?>