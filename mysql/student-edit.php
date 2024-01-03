


<?php 

require_once("config.php");

$id = $_GET["id"]??0;

$selQuery = "SELECT * FROM `students` WHERE id=$id";
$studentRec = $conn->query($selQuery);


if($id) {

        if(!$studentRec->num_rows) {
            $_SESSION['error'] = "Something wrong with id...";
            header("location: student-list.php");
            exit();
        }
        $_student = mysqli_fetch_assoc($studentRec);
        // print_r($_student);
        } else {
            $_SESSION['error'] = "Something wrong..id..";
            header("location: student-list.php");
            exit();
}

// dd($studentRec);



?>

<h2>Update Student</h2>

<?php require_once("message.php"); ?>
<form action="student-update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $_student['id'] ?>">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" value="<?= $_student['name'] ?>"></td>
        </tr>
        <tr>
            <td>Age:</td>
            <td><input type="number" name="age" value="<?= $_student['age'] ?>"></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="gender" value="M" <?= (($_student['gender']??NULL) == "M")?"checked":""; ?>>Male<br>
                <input type="radio" name="gender" value="F" <?= (($_student['gender']??NULL)== "F")?"checked":""; ?>>FeMale
            </td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td><input type="tel" name="phone" value="<?= $_student['phone'] ?>"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" value="<?= $_student['email'] ?>"></td>
        </tr>
        <tr>
            <td>Fee:</td>
            <td>
                <input type="number" name="fee" value="<?= $_student['fee'] ?>">
            </td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><textarea name="address" cols="30" rows="10"><?= $_student['address'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="reset">Reset</button>
                <input type="submit" value="Update">
            </td>
        </tr>
    </table>
</form>