<?php 
require_once("config.php");


$data = $_POST;


$id = $data["id"];

$country = $data["country"];
$status = $data["country_status"];


$state_id = $data["state_id"]??[];
$state_name = $data["state_name"]??[];
$state_status = $data["state_status"]??[];

$idImpoled = implode(",", $state_id);



$updateQuery = "UPDATE `countries` SET name='$country', status=$status WHERE id=$id";
$conn->query($updateQuery);


if(empty($state_id)) {
  $deleteQuery = "DELETE FROM `states` WHERE country_id=$id";
  $conn->query($deleteQuery);   
} else {
  $deleteQuery = "DELETE FROM `states` WHERE id NOT IN($idImpoled) AND country_id=$id";
  $conn->query($deleteQuery);   
}



foreach($state_name as $key => $stValue) {
     $stId = $state_id[$key];
     $stStatus = $state_status[$key];

     if($stId) {
        $stateQuery = "UPDATE `states` SET name='$stValue', status=$stStatus WHERE id=$stId";
        $conn->query($stateQuery);
      } else {
        $insertQuery = "INSERT INTO `states` (name, status, country_id) VALUES ('$stValue', $stStatus, $id)";
        $conn->query($insertQuery);
      }
}


// Here is another way to run the query above
// for($i = 0; $i < count($state_name); $i++ ) {
//     $staName = $state_name[$i];
//     echo $stateQuery = "UPDATE `states` SET name='$staName' WHERE id=$state_id";
//     $conn->query($stateQuery);
// }



if($id) {
if($conn->query($updateQuery)) {
    $_SESSION["success"] = "Country Update success...";
} else {
    $_SESSION["error"] = "Something wrong with update...";
}
} else {
    $_SESSION["error"] = "Somethign wrong, please try again...";
}


header("location:country-list.php");


?>