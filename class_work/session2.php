<?php 
session_start();

// echo $_SERVER["PHP_SELF"];

echo $_SESSION["name"] . "<br>";
echo $_SESSION["email"];

// echo $_COOKIE["TEST-NAME"];

// print_r($_SESSION);

?>