<?php 

require_once("config.php");

$data = $_POST;

$name = $data["name"];
$age = $data["age"];
$gender = $data["gender"];
$phone = $data["phone"];
$email = $data["email"];
$address = $data["address"];
$fee = $data["fee"];


// // print_r($name);
// echo "<pre>";
// print_r($data);


$insertQuery = "INSERT INTO `students` (name, age, gender, phone, email, address, fee) VALUES ('$name', '$age', '$gender', '$phone', '$email', '$address', '$fee')";


if($conn->query($insertQuery)) 
{
    /// again i have to session unset here 

    $_SESSION['success'] = "Students created success...";
    header("location: student-list.php");
} else {
    $_SESSION['error'] = "Something wrong...";
    header("location: student-add.php");

}










?>