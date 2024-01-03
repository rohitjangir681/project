<?php 

session_start();

$data = $_POST;

$name = $data["name"];
$email = $data["email"];
$phone = $data["phone"];
$address = $data["address"];
$gender = $data["gender"];
$classes = $data["class"];
$isError = false;


$_SESSION["name"] = $data["name"];
$_SESSION["email"] = $data["email"];
$_SESSION["phone"] = $data["phone"];
$_SESSION["gender"] = $data["gender"];
$_SESSION["address"] = $data["address"];
$_SESSION["class"] = $data["class"];

// print_r($_SESSION["class"]);


if($name == "") {
    $isError = true;
    $_SESSION["name_error"] = "Name is a required field.";
}

if($email == "") {
    $isError = true;
    $_SESSION["email_error"] = "Email is a required field.";
}

if($phone == "") {
    $isError = true;
    $_SESSION["phone_error"] = "Phone is a required field."; 
}


// for redio button
if($gender == "") {
    $isError = true;
    $_SESSION["gender_error"] = "required field.";
}


if($address == "") {
    $isError = true;
    $_SESSION["address_error"] = "required field.";
}


if($classes == "") {
    $isError = true;
    $_SESSION["class_error"] = "required field.";
}




if($isError) {
    header("location: form1.php");
}

echo "<pre>";
print_r($data);
echo "form Submitted....";



?>
