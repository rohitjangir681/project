<?php 
session_start();

$data = $_POST;

// echo "<pre>";
// print_r($data);
// die;

$first_name = $data["first_name"];
$email = $data["email"];
$mobile_number = $data["mobile_number"];
$gender = $data["gender"];
// $dob = $data["dob"];
$address = $data["address"];
$city = $data["city"];
$pin_code = $data["pin_code"];
$courses = $data["courses"];
$qualification = $data["qualification"];
$forDay = $data["forDay"];
$forMonth = $data["forMonth"];
$forYear = $data["forYear"];


$isError = false;

$_SESSION["first_name"] = $data["first_name"];
$_SESSION["last_name"] = $data["last_name"];
$_SESSION["email"] = $data["email"];
$_SESSION["mobile_number"] = $data["mobile_number"];
$_SESSION["gender"] = $data["gender"];
$_SESSION["address"] = $data["address"];
$_SESSION["city"] = $data["city"];
$_SESSION["pin_code"] = $data["pin_code"];
// $_SESSION["dob"] = $data["dob"];
$_SESSION["courses"] = $data["courses"];
$_SESSION["qualification"] = $data["qualification"];
$_SESSION["hobbies"] = $data["hobbies"];
$_SESSION["other_type"] = $data["other_type"];
$_SESSION["for_day"] = $data["forDay"];
$_SESSION["for_months"] = $data["forMonth"];
$_SESSION["for_years"] = $data["forYear"];



 if($first_name == "") {
     $isError = true;
     $_SESSION["first_error"] = "Name is a required field.";
 }

 if($email == "") {
     $isError = true;
     $_SESSION["email_error"] = "Email is a required field.";
     
 }

 if($mobile_number == "") {
     $isError = true;
     $_SESSION["mobile_error"] = "Mobile is a required field.";
 }

 if($gender == "") {
     $isError = true;
     $_SESSION["gender_error"] = "Gender is a required field.";

 }

//  if($dob == "") {
//     $isError = true;
//     $_SESSION["dob_error"] = "DOB is required field.";
//  }

 if($address == "") {
    $isError = true;
    $_SESSION["address_error"] = "Address is required field.";
 }

 if($city == "") {
    $isError = true;
    $_SESSION["city_error"] = "City is required field.";

 }

 if($pin_code == "") {
    $isError = true;
    $_SESSION["pin_code_error"] = "PIN code is required field.";
 }

 if($courses == "") {
    $isError = true;
    $_SESSION["courses_error"] = "required field.";
 }

 if($qualification == "") {
    $isError = true;
    $_SESSION["qualification_error"] = "required field.";
 }

 
// --------------------
 if($forDay == "" || $forMonth == "" || $forYear == "") {
    $isError = true;
    $_SESSION["new_date"] = "DOB required field.";
 }


// The other way --
// if(!($data["forDay"] && $data["forMonth"] && $data["forYear"])) {
//    $isError = true;
//    $_SESSION["new_date"] = "DOB required field.";

// }
// --------------------------




 if($isError) {
    header("location: form.php");
 }

echo "<pre>";
print_r($data);


?>