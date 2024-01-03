<!-- <h2>Student Save</h2> -->

<?php 
require_once("config1.php");

// echo "<pre>";
// print_r($_POST);


$data = $_POST;

$isError = false;
// dd($data);
$fName = $data["first_name"];
$lName = $data["last_name"];
$email = $data["email"];
$phone = $data["phone"];
$gender = $data["gender"];
$for_date = $data["for_date"];
$address = $data["address"];
$city = $data["city"];
$pinCode = $data["pin_code"];
$state = $data["state"];
$country = $data["country"];
$hobbies = implode(",", $data["hobbies"]??[]);
$otherHobbies = $data["other_hobbies"];
$qualification = implode(",", $data["qualification"]??[]);
$courses = $data["courses"];

$_SESSION["first_name"] = $data["first_name"];
$_SESSION["email"] = $data["email"];
$_SESSION["for_date"] = $data["for_date"];
$_SESSION["hobbies_expl"] = $data["hobbies"];
$_SESSION["other_hobbies"] = $data["other_hobbies"];
$_SESSION["courses"] = $data["courses"];



if($fName == "") {
    $isError = true;
    $_SESSION["first_name_error"] = "Name is required field";
}

if($email == "") {
    $isError = true;
    $_SESSION["email_error"] = "Email is required field";
}

if($for_date == "") {
    $isError = true;
    $_SESSION["date_error"] = "Date is required field";
}


$b = count(($data["hobbies"]??[]));
if($b < 3) {
    $isError = true;
    $_SESSION["hobbies_error"] = "At least 2 hobbies required";
}

if($isError) {
    header("location: student-add.php");
    exit();
}




$insertQuery = "INSERT INTO `students2` (fName, lName, email, phone, gender, for_date, address, city, pinCode, state, country, otherHobbies, courses, qualification, hobbies) VALUES ('$fName', '$lName', '$email', '$phone', '$gender', '$for_date', '$address', '$city', '$pinCode', '$state', '$country', '$otherHobbies', '$courses', '$qualification', '$hobbies')";

// die($insertQuery);


if($conn->query($insertQuery)) 
{
    unset($_SESSION["first_name"]);
    unset($_SESSION["email"]);
    unset($_SESSION["for_date"]);
    unset($_SESSION["hobbies_expl"]);
     
    $_SESSION["success"] = "Students created success...";
    header("location: student-list.php");
} else {
    $_SESSION["error"] = "Something wrong...";
    header("location: student-add.php");
}






?>