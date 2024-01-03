<?php 

require_once("config1.php");

$data = $_POST;
$id = $data["id"];

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

$isError = false;

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
    header("location:student-edit.php?id=".$id);
    exit();
}






// dd($courses);

$updQuery = "UPDATE `students2` SET fName='$fName', lName='$lName', email='$email', phone='$phone', gender='$gender', address='$address', city='$city', pinCode=$pinCode, state='$state', country='$country', courses='$courses', qualification='$qualification', for_date='$for_date', hobbies='$hobbies' WHERE id=$id";


// dd($updQuery);


if($conn->query($updQuery)) {
    $_SESSION['success'] = "Record Updated success...";
} else {
    $_SESSION['error'] = "Something wrong Error...";
}

header("location: student-list.php");





?>