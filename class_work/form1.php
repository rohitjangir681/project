<?php 
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1 File</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
    
<form action="form-save1.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Name: <span style="color:red;">*</span></td>
            <td>
                <input type="text" name="name" value="<?php echo $_SESSION["name"]??''; ?>">
                <?php if(isset($_SESSION["name_error"])) { ?>
                      <span class="error">
                         <?php 
                            echo $_SESSION["name_error"];
                            unset($_SESSION["name_error"]);
                         ?>
                      </span>
                <?php } ?>
                
                
            </td>
        </tr>

        <tr>
            <td>Email: <span style="color:red;">*</span></td>
            <td>
                <input type="email" name="email" value="<?php echo $_SESSION["email"]??''; ?>">
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
            <td>Phone: <span style="color:red;">*</span></td>
            <td>
                <input type="tel" name="phone" value="<?= $_SESSION["phone"]??''; ?>">
                <?php if(isset($_SESSION["phone_error"])) { ?>
                    <span class="error">
                        <?php 
                        echo $_SESSION["phone_error"];
                        unset($_SESSION["phone_error"]);
                        ?>
                    </span>
                <?php } ?>
            </td>
        </tr>

        <tr>
            <td>Gender: <span style="color:red;">*</span></td>
            <td>
                <input type="radio" name="gender" value="m" <?= ($_SESSION["gender"]??null) == "m" ? "checked":"" ?>>Male <br>
                <input type="radio" name="gender" value="f" <?php echo ($_SESSION["gender"]??null) == "f" ? "checked":""; ?>>FeMale
                <?php if(isset($_SESSION["gender_error"])) {?>
                    <span class="error">
                        <?php 
                           echo $_SESSION["gender_error"];
                           unset($_SESSION["gender_error"]);
                        ?>
                    </span>
                <?php } ?> 
            </td>
        </tr>

        <tr>
            <td>Class: <span style="color:red;">*</span> </td>
            <td>
                <input type="checkbox" name="class[]" value="12th" <?php echo in_array("12th",( $_SESSION["class"])??[]) ? "checked": "";?> >12th<br> 
                <input type="checkbox" name="class[]" value="10th" <?php echo in_array("10th", ($_SESSION["class"])??[]) ? "checked" : ""; ?> >10th<br>
                <input type="checkbox" name="class[]" value="9th" <?= in_array("9th", ($_SESSION["class"])??[]) ? "checked" : ""?> >9th<br>
                <input type="checkbox" name="class[]" value="8th" <?= in_array("8th", $_SESSION["class"]??[]) ? "checked" : ""?> >8th 
                <?php if(isset($_SESSION["class_error"])) { ?>
                   <span class="error">
                      <?php 
                        echo $_SESSION["class_error"];
                        unset($_SESSION["class_error"]);
                      ?>
                   </span>
                <?php } ?>
                
            </td>
        </tr>


        <tr>
            <td>Address: <span style="color:red;">*</span></td>
            <td>
               <textarea name="address"><?php echo $_SESSION["address"]??null ?></textarea> 
                <?php if(isset($_SESSION["address_error"])) { ?>
                    <span class="error">
                        <?php
                         echo $_SESSION["address_error"];
                         unset($_SESSION["address_error"]);
                        ?>
                    </span>
                <?php } ?>
            </td>
        </tr>


        <tr>
      <td>Date of Birth(DOB):</td>
      <td>
        <select name="dob[Day]">
          <option>Day:</option>
          <?php 
            for($i = 1; $i <= 31; $i++) {
              echo "<option> $i </optoin>";
            }
            
          ?>
        </select>
        <select name="dob[Month]">
        <option>Month:</option>
        <?php 
          $months = ["a", "b", "c", "d", "e", "f"];
          foreach($months as $val) {
            echo "<option>$val</option>";
          }
        ?>
        </select>
        <select name="dob[Year]">
          <option>Year:</option>
          <?php 
           for($i = 2000; $i <= date("Y"); $i++) {
              echo "<option>$i</option>";
           }
          ?>
        </select>
        
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

<?php 

unset($_SESSION["name"]);
unset($_SESSION["email"]);
unset($_SESSION["phone"]);
unset($_SESSION["gender"]);
unset($_SESSION["address"]);
unset($_SESSION["class"]);
?>

</body>
</html>