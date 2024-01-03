<h2>Student edit</h2>

<?php 
require_once("config1.php");

$id = $_GET["id"]??0;

$selQuery = "SELECT * FROM `students2` WHERE id=$id";
$studentRec = $conn->query($selQuery);

if($id) {
    if(!$studentRec->num_rows) {
        $_SESSION['error'] = "Something wrong with id...";
        header("location: student-list.php");
        exit();
    }
    $_student = mysqli_fetch_assoc($studentRec);
} else {
    $_SESSION['error'] = "Something wrong..id..";
    header("location: student-list.php");
    exit();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update student details</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
<form action="student-update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $_student["id"] ?>">
    <table>
        <tr>
            <td>First Name:</td>
            <td>
                <input type="text" name="first_name" value="<?php echo $_student['fName'] ?>">
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
            <td><input type="text" name="last_name" value="<?php echo $_student['lName'] ?>"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>
                <input type="email" name="email" value="<?php echo $_student['email'] ?>">
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
            <td><input type="tel" name="phone" value="<?php echo $_student['phone'] ?>"></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="gender" value="M" <?= (($_student['gender']??NULL) == "M")?"checked":""; ?>>Male <br>
                <input type="radio" name="gender" value="F" <?= (($_student['gender']??NULL)== "F")?"checked":""; ?>>FeMale
            </td>
        </tr>
        <tr>
            <td>Date of Birth(DOB):</td>
            <td>
                <input type="date" name="for_date" value="<?php echo $_student['for_date'] ?>">
                <?php if(isset($_SESSION["date_error"])){ ?>
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
            <td><textarea name="address" cols="30" rows="10"><?php echo $_student['address'] ?></textarea></td>
        </tr>
        <tr>
            <td>City:</td>
            <td><input type="text" name="city" value="<?php echo $_student['city'] ?>"></td>
        </tr>
        <tr>
            <td>Pin Code:</td>
            <td><input type="number" name="pin_code" value="<?php echo $_student['pinCode'] ?>"></td>
        </tr>
        <tr>
            <td>State:</td>
            <td><input type="text" name="state" value="<?php echo $_student['state'] ?>"></td>
        </tr>
        <tr>
            <td>Country:</td>
            <td><input type="text" name="country" value="<?php echo $_student['country'] ?>"></td>
        </tr>
       
        <tr>
            <td>Hobbies:</td>
            <td>

            <?php 
                
                $hobbies = explode(",", $_student["hobbies"]);
                // dd($hobbies);

            ?>
                <input type="checkbox" name="hobbies[]" value="Drawing" <?= in_array("Drawing", $hobbies) ? "checked":"" ?>>Drawing
                <input type="checkbox" name="hobbies[]" value="Singing" <?= in_array("Singing", $hobbies) ? "checked":"" ?>>Singing
                <input type="checkbox" name="hobbies[]" value="Dancing" <?= in_array("Dancing", $hobbies) ? "checked":"" ?>>Dancing
                <input type="checkbox" name="hobbies[]" value="Sketching" <?= in_array("Sketching", $hobbies) ? "checked":"" ?>>Sketching
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
            <td><input type="text" name="other_hobbies" placeholder="Ex- Teaching" value="<?php echo $_student['otherHobbies'] ?>"></td>
        </tr>

        <tr>
            <td>Qualification:</td>
            <td>
                <?php 

                    $qualification = explode(",", ($_student["qualification"]??""));
                    // dd($qualification);
                    
                ?>
            <input type="checkbox" name="qualification[]" value="High School(10th)" <?= in_array("High School(10th)", $qualification) ? "checked":""; ?>>High School(10th)<br>
            <input type="checkbox" name="qualification[]" value="High School(12th)" <?= in_array("High School(12th)", $qualification) ? "checked":""; ?>>High School(12th)<br>
            <input type="checkbox" name="qualification[]" value="Graduation(Bachelors)" <?= in_array("Graduation(Bachelors)", $qualification) ? "checked":""; ?>>Graduation(Bachelors)<br>
            <input type="checkbox" name="qualification[]" value="Post Graduation(Masters)" <?= in_array("Post Graduation(Masters)", $qualification) ? "checked":""; ?>>Post Graduation(Masters)<br>
            <input type="checkbox" name="qualification[]" value="Phd" <?= in_array("Phd", $qualification) ? "checked":""; ?>>Phd<br><br>
            </td>
        </tr>

        <tr>
            <td>Courses Applied For:</td>
            <td>
             
                <input type="radio" name="courses" value="bca" <?= (($_student["courses"]??NULL)=="bca") ? "checked": "" ?>>BCA(Bachelor of Computer Applications)<br>
                <input type="radio" name="courses" value="bcom" <?= (($_student["courses"]??NULL)=="bcom") ? "checked": "" ?>>B.Com(Bachelor of Commerce)<br>
                <input type="radio" name="courses" value="bsc" <?= (($_student["courses"]??NULL)=="bsc") ? "checked": "" ?>>B.Sc(Bachelor of Science)<br>
                <input type="radio" name="courses" value="ba" <?= (($_student["courses"]??NULL)=="ba") ? "checked": "" ?>>BA(Bachelor of Arts)<br>
                <input type="radio" name="courses" value="mca" <?= (($_student["courses"]??NULL)=="mca") ? "checked": "" ?>>MCA(Master of Computer Applications)<br>
                <input type="radio" name="courses" value="mcom" <?= (($_student["courses"]??NULL)=="mcom") ? "checked": "" ?>>M.Com(Master of Commerce)<br>
                <input type="radio" name="courses" value="msc" <?= (($_student["courses"]??NULL)=="msc") ? "checked": "" ?>>M.Sc(Master of Science)<br>
                <input type="radio" name="courses" value="ma" <?= (($_student["courses"]??NULL)=="ma") ? "checked": "" ?>>MA(Master of Arts)
            </td>
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