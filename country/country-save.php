<h2>Save File</h2>

<?php 
require_once("config.php");


$data = $_POST;

$name = $data["country"];
$status = $data["country_status"];
$state_name = $data["state_name"];
$state_status = $data["state_status"];


$insertQuery = "INSERT INTO `countries` (name, status) VALUES ('$name', $status)";
$conn->query($insertQuery);

$country_id = $conn->insert_id;

foreach($state_name as $key => $state_value) {
    $stStatus = $state_status[$key];
    $stateQuery = "INSERT INTO `states` (name, country_id, status) VALUES ('$state_value', $country_id, $stStatus)";
    $conn->query($stateQuery);
}

if($data["new_save"]) {
    header("location:country-add.php");
    exit();
} elseif($data["save"]) {
    header("location:country-list.php");
    exit();

}




// Another way for above loop ------------
// for($i=0; $i < count($state_name); $i++){
//     $name = $state_name[$i];
//     $status = $state_status[$i];
//     if($name && $status){
//         $insertQuery = "INSERT INTO `states` (name, country_id, status) VALUES ('$name', $country_id, $status)";
//         $conn->query($insertQuery);
//     }
// }











?>