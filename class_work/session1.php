<?php 
session_start();


// echo $_SERVER["PHP_SELF"];

$_SESSION["name"] = "Rohit"; 
$_SESSION["email"] = "r@gmail.com"; 

print_r($_SESSION);

setcookie("TEST-NAME", "This is test value", time() + (86400 * 3), "/");






?>