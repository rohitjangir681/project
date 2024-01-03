<?php 
require_once("config1.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
<h2>Add Student</h2>    

<form action="student-save.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>First Name:</td>
            <td>
                <input type="text" name="first_name" value="<?= $_SESSION["first_name"]??"" ?>">
            <?php if(isset($_SESSION["first_name_error"])) { ?>
                <span class="error">
                    <?php 
                        echo $_SESSION["first_name_error"];
                        unset($_SESSION["first_name_error"]);
                    ?>
                </span>
            <?php } ?> 
            </td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><input type="text" name="last_name"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>
                <input type="email" name="email" value="<?= $_SESSION["email"]??"" ?>">
                <?php if(isset($_SESSION["email_error"])) { ?>
                    <span class="error">
                        <?php 
                            echo $_SESSION["email_error"];
                            unset($_SESSION["email_error"]);
                        ?>
                    </span>
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="tel" name="phone"></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="gender" value="M">Male <br>
                <input type="radio" name="gender" value="F">FeMale
            </td>
        </tr>
        <tr>
            <td>Date of Birth(DOB):</td>
            <td>
                <input type="date" name="for_date" value="<?= $_SESSION["for_date"]??"" ?>">
                <?php if(isset($_SESSION["date_error"])) { ?>
                    <span class="error">
                        <?php 
                            echo $_SESSION["date_error"];
                            unset($_SESSION["date_error"]);
                        ?>
                    </span>
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><textarea name="address" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>City:</td>
            <td><input type="text" name="city"></td>
        </tr>
        <tr>
            <td>Pin Code:</td>
            <td><input type="number" name="pin_code"></td>
        </tr>
        <tr>
            <td>State:</td>
            <td><input type="text" name="state"></td>
        </tr>
        <tr>
            <td>Country:</td>
            <td><input type="text" name="country"></td>
        </tr>
       
        <tr>
            <td>Hobbies:</td>
            <td>
                <input type="checkbox" name="hobbies[]" value="Drawing" <?= in_array("Drawing", ($_SESSION["hobbies_expl"]??[])) ? "checked" : "" ?>>Drawing
                <input type="checkbox" name="hobbies[]" value="Singing" <?= in_array("Singing", ($_SESSION["hobbies_expl"]??[])) ? "checked" : "" ?>>Singing
                <input type="checkbox" name="hobbies[]" value="Dancing" <?= in_array("Dancing", ($_SESSION["hobbies_expl"]??[])) ? "checked" : "" ?>>Dancing
                <input type="checkbox" name="hobbies[]" value="Sketching" <?= in_array("Sketching", ($_SESSION["hobbies_expl"]??[])) ? "checked" : "" ?>>Sketching
                
                <?php if(isset($_SESSION["hobbies_error"])) { ?>
                <span class="error">
                    <?php 
                    echo $_SESSION["hobbies_error"];
                    unset($_SESSION["hobbies_error"]);
                    ?>
                </span>
            <?php } ?>
            </td>
        </tr>
        <tr>
            <td>Other Hobbies:</td>
            <td><input type="text" name="other_hobbies" placeholder="Ex- Teaching" value="<?= $_SESSION["other_hobbies"]??"" ?>"></td>
        </tr>

        <tr>
            <td>Qualification:</td>
            <td>
            <input type="checkbox" name="qualification[]" value="High School(10th)">High School(10th)<br>
            <input type="checkbox" name="qualification[]" value="High School(12th)">High School(12th)<br>
            <input type="checkbox" name="qualification[]" value="Graduation(Bachelors)">Graduation(Bachelors)<br>
            <input type="checkbox" name="qualification[]" value="Post Graduation(Masters)">Post Graduation(Masters)<br>
            <input type="checkbox" name="qualification[]" value="Phd">Phd<br><br>
            </td>
        </tr>

        <tr>
            <td>Courses Applied For:</td>
            <td>
                <input type="radio" name="courses" value="bca" <?= ($_SESSION["courses"]??NULL)=="bca" ? "checked" : "" ?>>BCA(Bachelor of Computer Applications)<br>
                <input type="radio" name="courses" value="bcom" <?= ($_SESSION["courses"]??NULL)=="bcom" ? "checked" : "" ?>>B.Com(Bachelor of Commerce)<br>
                <input type="radio" name="courses" value="bsc" <?= ($_SESSION["courses"]??NULL)=="bsc" ? "checked" : "" ?>>B.Sc(Bachelor of Science)<br>
                <input type="radio" name="courses" value="ba" <?= ($_SESSION["courses"]??NULL)=="ba" ? "checked" : "" ?>>BA(Bachelor of Arts)<br>
                <input type="radio" name="courses" value="mca" <?= ($_SESSION["courses"]??NULL)=="mca" ? "checked" : "" ?>>MCA(Master of Computer Applications)<br>
                <input type="radio" name="courses" value="mcom" <?= ($_SESSION["courses"]??NULL)=="mcom" ? "checked" : "" ?>>M.Com(Master of Commerce)<br>
                <input type="radio" name="courses" value="msc" <?= ($_SESSION["courses"]??NULL)=="msc" ? "checked" : "" ?>>M.Sc(Master of Science)<br>
                <input type="radio" name="courses" value="ma" <?= ($_SESSION["courses"]??NULL)=="ma" ? "checked" : "" ?>>MA(Master of Arts)
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <button type="reset">Reset</button>
                <input type="submit" value="Submit">
            </td>         
        </tr>
     
    </table>
</form>

<?php 
unset($_SESSION["first_name"]);
unset($_SESSION["email"]);
unset($_SESSION["for_date"]);
unset($_SESSION["hobbies_expl"]);
unset($_SESSION["other_hobbies"]);
unset($_SESSION["courses"]);

?>


</body>
</html>