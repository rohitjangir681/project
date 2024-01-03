<h2>State update file..</h2>
<?php 
require_once("config.php");

$data = $_POST;

$id = $data["id"];
$country_id = $data["country_id"];
$state = $data["state"];
$status = $data["status_change"];

$cityName = $data["cityName"];
$city_id = $data["city_id"]??[];
$cityStatus = $data["cityStatus"];

$idImpoled = implode(",", $city_id);    


$updateQuery = "UPDATE `states` SET country_id=$country_id, name='$state', status=$status WHERE id=$id";
$conn->query($updateQuery);


if(empty($city_id)) {
    $deleteQuery = "DELETE FROM `cities` WHERE state_id=$id";
    $conn->query($deleteQuery);
  } else {
    $deleteQuery = "DELETE FROM `cities` WHERE id NOT IN($idImpoled) AND state_id=$id";
    $conn->query($deleteQuery); 
  }
  



foreach($cityName as $key => $ctName) {
    $ctId = $city_id[$key]??0;
    $ctStatus = $cityStatus[$key];

    if($ctId) {
        $cityUpdate = "UPDATE `cities` SET name='$ctName', status=$ctStatus WHERE id=$ctId";
        $conn->query($cityUpdate);
      } else {
        $cityUpdate = "INSERT INTO `cities` (name, status, state_id, country_id) VALUES ('$ctName', $ctStatus, $id, $country_id)";
        $conn->query($cityUpdate);
      }
}


if($id) {
if($conn->query($updateQuery)) {
    $_SESSION["success"] = "Record Update successfully..";
} else {
    $_SESSION["error"] = "Something wrong...";
}
} else {
    $_SESSION["error"] = "Id not found. please try again..";
}


header("location:states-list.php");







?>