<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student</title>
</head>
<body>
<h2>Add New Student</h2>    
<?php require_once("message.php"); ?>
<form action="student-save.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Age:</td>
            <td><input type="number" name="age"></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="gender" value="M">Male<br>
                <input type="radio" name="gender" value="F">FeMale
            </td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td><input type="tel" name="phone"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Fee:</td>
            <td>
                <input type="number" name="fee">
            </td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><textarea name="address" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="reset">Reset</button>
                <input type="submit" value="Save">
            </td>
        </tr>
    </table>
</form>


</body>
</html>