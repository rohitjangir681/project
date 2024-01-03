<h2>Country Delete file....</h2>

<?php 

require_once("config.php");

$id = $_GET["id"];

// dd($id);


// country delete
$deleteCountry = "DELETE FROM `countries` WHERE id=$id";


// state delete
$deleteState = "DELETE FROM `states` WHERE country_id=$id";
$conn->query($deleteState);


// city delete
$deleteCity = "DELETE FROM `cities` WHERE country_id=$id";
$conn->query($deleteCity);






// echo $deleteQuery;


if($id) {
if($conn->query($deleteCountry)) {
    $_SESSION["success"] = "Country Delete success...";
} else {
    $_SESSION["error"] = "Something wrong...";
}
} else {
    $_SESSION["error"] = "Id not found, please try again...";
}

header("location:country-list.php");



?>