<?php 

require_once("config.php");

$data = $_POST;

// dd($data);

$id = $data["id"];

$name = $data["name"];
$age = $data["age"];
$gender = $data["gender"];
$phone = $data["phone"];
$email = $data["email"];
$address = $data["address"];
$fee = $data["fee"];


$updQuery = "UPDATE `students` SET name='$name', email='$email', age=$age, gender='$gender', phone='$phone', address='$address', fee=$fee WHERE id=$id";

// dd($updQuery);

if($conn->query($updQuery)) {
    $_SESSION['success'] = "Record Updated success...";
} else {
    $_SESSION['error'] = "Error...";
}

header("location: student-list.php");





?>