<h2>Student delete</h2>
<?php 
require_once("config1.php");

$id = $_GET["id"];
// echo $id;



if($id) {
    $deleteQuery = "DELETE FROM `students2` WHERE id=$id";
    if($conn->query($deleteQuery)) {
        $_SESSION["success"] = "Record delete success..";
    } else {
        $_SESSION["error"] = "Something wrong..";
    }
} else {
    $_SESSION["error"] = "Something wrong please try again..";
}

header("location: student-list.php");



?>