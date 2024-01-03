<?php 

require_once("config.php");

$id = $_GET["id"];

if($id) {
    $delQuery = "DELETE FROM `students` WHERE id=$id";
    if($conn->query($delQuery)) {
        $_SESSION["success"] = "Record deleted success...";
    } else {
        $_SESSION["error"] = "Something wrong......";
    }
} else {
    $_SESSION["error"] = "Something wrong. Please try again..";
}

header("location: student-list.php");


// echo $id;




?>