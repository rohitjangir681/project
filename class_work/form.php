<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form in PHP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
      .error{
        color:red;
      }
      .red-color{
        border-color:red;
      }
      .red-border{
        border-color:red;
      }
      .green-border{
        border-color:green;
      }
    </style>
</head>
<body>

<button class="btn" id="button">Click Here</button>
    
<!-- <form action="form-save.php" method="post" enctype="multipart/form-data">
    Name: <span style="color:red;">*</span> <input type="text" name="name" placeholder="Enter Your name..."><br><br>
    Email: <input type="email" name="email"><br><br>
    Phone: <input type="tel" name="phone"><br><br>
    Gender: <input type="radio" name="gender" value="m">Male &nbsp;&nbsp;&nbsp; <input type="radio" name="gender" value="f">Female<br><br>
    Class: <input type="checkbox" name="class[]" value="10th">10th &nbsp;&nbsp;&nbsp;<input type="checkbox" name="class[]" value="12th">12th<br><br>
    Address: <textarea name="address" rows="" cols=""></textarea><br><br>
    Image: <input type="file" name="image" accept="image/*">
    <button type="reset">Reset</button>
    <input type="submit" value="Save">
</form> -->


<form action="form-save.php" method="post" id="my-form" enctype="multipart/form-data">
   <table>
    <tr> 
      <td>First Name: <span style="color:red;">*</span></td>
      <td>
        <input type="text" name="first_name" maxlength="50" id="name" value="<?= $_SESSION["first_name"]??null ?>">
        <?php if(isset($_SESSION["first_error"])) {?>
          <span class="error">
            <?php
              echo $_SESSION["first_error"];
              unset($_SESSION["first_error"]); 
            ?>
          </span>
        <?php }?>
      </td>
    </tr>

    <tr>
      <td>Last Name:</td> 
      <td><input type="text" name="last_name" maxlength="50" value="<?php echo $_SESSION["last_name"]??null ?>"></td>
    </tr>

    <tr>
      <td>Email ID: <span style="color:red">*</span></td>
      <td>
        <input type="email" name="email" id="email" value="<?php echo $_SESSION["email"]??""?>">
        <?php if(isset($_SESSION["email_error"])) {?>
          <span class="error">
            <?php
            echo $_SESSION["email_error"];
            unset($_SESSION["email_error"]); 
            ?>
          </span>
        <?php }?>
      </td>
    </tr>

    <tr>
      <td>Mobile Number: <span style="color:red;">*</span> </td>
      <td>
        <input type="tel" name="mobile_number" id="phone" maxlength="10" value="<?= $_SESSION["mobile_number"] ?? null ?>">
        <?php if(isset($_SESSION["mobile_error"])) { ?>
          <span class="error">
            <?php
             echo $_SESSION["mobile_error"];
             unset($_SESSION["mobile_error"]);
            ?>
          </span>
        <?php } ?>
      </td>
    </tr>

    <tr>
      <td>Gender: <span style="color:red;">*</span></td>
      <td>
        <input type="radio" name="gender" value="m" <?php echo ($_SESSION["gender"]??null) == "m" ? "checked" : "" ?>>Male <br>
        <input type="radio" name="gender" value="f" <?php echo ($_SESSION["gender"] ?? null) == "f" ? "checked" : ""?> >Female
          <?php if(isset($_SESSION["gender_error"])) { ?>
            <span class="error">
              <?php 
                echo $_SESSION["gender_error"];
                unset($_SESSION["gender_error"]);
              ?>
            </span>
          <?php } ?>
      </td>
    </tr>

    <!-- For Date Selected -->

    <tr>
      <td>Date of Birth(DOB):</td>
      <td>
        <select name="forDay">
          <option value="">Day</option>
          <?php for($i = 1; $i <= 31; $i++) { ?>
          <option value='<?= $i ?>' <?= ($_SESSION["for_day"]??"") == $i ? "selected":"" ?> ><?= $i ?> </option>   
              <?php   }   ?>
        </select>

     <!-- For Month Selected -->

        <select name="forMonth">
        <option value="">Month</option>
          <?php 
          $months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
          foreach($months as $val) {
            ?>
            <option value='<?= $val ?>' <?= ($_SESSION["for_months"]??"") == $val ? "selected":"" ?>><?= $val ?></option>
          <?php } ?>
        </select> 

      <!-- For Year Selected -->
        
        <select name="forYear">
          <option value="">Year</option>

          <?php for($i = 2000; $i <= date("Y"); $i++) { ?>

              <option value='<?= $i ?>' <?= ($_SESSION["for_years"]??"") == $i ? "selected":"" ?>><?= $i ?></option>

           <?php } ?>
        </select>
        
        <?php if(isset($_SESSION["new_date"])) {?>
          <span class="error">
            <?php 
              echo $_SESSION["new_date"];
              unset($_SESSION["new_date"]);
            ?>

          </span>
        <?php }?>

      </td>
    </tr>


    <!-- The other way for get Date of Birth
    <tr>
      <td>Date of Birth(DOB): <span style="color:red;">*</span> </td>
      <td>
        <input type="date" name="dob" min="2010-01-01" value="<?php //echo $_SESSION["dob"] ?? null?>">
        <?php //if(isset($_SESSION["dob_error"])) {?>
          <span class="error">
            <?php
              //echo $_SESSION["dob_error"];
            //  unset($_SESSION["dob_error"]);
            ?>
          </span>
        <?php //}?>
      </td>
    </tr> -->



    <tr>
      <td>Address: <span style="color:red;">*</span> </td>
      <td>
        <textarea name="address"><?php echo $_SESSION["address"] ?? null?></textarea>
        <?php if(isset($_SESSION["address_error"])) {?>
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
      <td>City: <span style="color:red;">*</span> </td>
      <td>
        <input type="text" name="city" maxlength="50" value="<?= $_SESSION["city"]??null ?>">
        <?php if(isset($_SESSION["city_error"])) { ?>
          <span class="error">
            <?php 
              echo $_SESSION["city_error"];
              unset($_SESSION["city_error"]);
            ?>
          </span>
        <?php } ?>
      </td>
    </tr>

    <tr>
      <td>Pin Code: <span style="color:red;">*</span></td>
      <td>
        <input type="text" name="pin_code" maxlength="6" value="<?= $_SESSION["pin_code"]??null ?>">
        <?php if(isset($_SESSION["pin_code_error"])) { ?>
          <span class="error">
            <?php 
              echo $_SESSION["pin_code_error"];
              unset($_SESSION["pin_code_error"]);
            ?>
          </span>
        <?php } ?>
      </td>
    </tr>

    

    <!-- State: 
    <select name="state_name"> 
      <?php 
      // $state = ["State 1", "State 2", "State 3"];
      // foreach($state as $value) {
      //     echo "<option>$value</option>";
      //   }
      ?>
    </select>  <br><br>
-->


    <!-- Country: 
    <select name="country_name">
      <?php 
      //  $country = ["Country 1", "Country 2", "Country 3"];
      //  foreach($country as $value) {
      //    echo "<option>$value</option>";
      //  }
      ?>
    </select> -->


  <tr>
    <td>Hobbies: </td>
    <td>
    <input type="checkbox" name="hobbies[]" value="Drawing" id="drawing" <?php echo in_array("Drawing", ($_SESSION["hobbies"]??[])) ?"checked":""?>><label for="drawing">Drawing</label>
    <input type="checkbox" name="hobbies[]" value="Singing" id="singing" <?= in_array("Singing", ($_SESSION["hobbies"]??[]))?"checked":""?>><label for="singing">Singing</label>
    <input type="checkbox" name="hobbies[]" value="Dancing" id="dancing" <?= in_array("Dancing", ($_SESSION["hobbies"]??[])) ?"checked":"" ?>><label for="dancing">Dancing</label>
    <input type="checkbox" name="hobbies[]" value="Sketching" id="sketching" <?= in_array("Sketching", ($_SESSION["hobbies"]??[])) ? "checked" : ""?>><label for="sketching">Sketching</label>
    <input type="checkbox" name="hobbies[]" value="other" id="others" <?php echo in_array("other", ($_SESSION["hobbies"]??[])) ? "checked":""?>> <label for="others">Others</label>
    <input type="text" name="other_type" placeholder="Ex- Teaching" maxlength="50" value="<?php echo $_SESSION["other_type"]??null ?>"><br><br>
    </td>
    </tr>

  <tr>
    <td>Qualification: <span style="color:red;">*</span></td> 
    <td>
    <input type="checkbox" name="qualification[]" id="qualification" value="high_s_10th" <?php echo in_array("high_s_10th", ($_SESSION["qualification"]??[])) ? "checked":"" ?>><label for="qualification">High School(10th)</label><br>
    <input type="checkbox" name="qualification[]" id="qualification1" value="high_s_12th" <?= in_array("high_s_12th", ($_SESSION["qualification"]??[])) ? "checked":"" ?>><label for="qualification1">High School(12th)</label><br>
    <input type="checkbox" name="qualification[]" id="qualification2" value="graduation" <?= in_array("graduation", ($_SESSION["qualification"]??[])) ?"checked":"" ?>><label for="qualification2">Graduation(Bachelors)</label><br>
    <input type="checkbox" name="qualification[]" id="qualification3" value="post_graduation" <?= in_array("post_graduation", ($_SESSION["qualification"]??[])) ?"checked":""?>><label for="qualification3">Post Graduation(Masters)</label><br>
    <input type="checkbox" name="qualification[]" id="qualification4" value="Phd" <?php echo in_array("Phd", ($_SESSION["qualification"]??[])) ?"checked":""?>><label for="qualification4">Phd</label><br><br>
    <?php if(isset($_SESSION["qualification_error"])) {?>
      <span class="error">
        <?php
          echo $_SESSION["qualification_error"];
          unset($_SESSION["qualification_error"]);
        ?>
      </span>
    <?php } ?>
    </td>
  </tr>


   <tr> 
     <td> Courses Applied For: <span style="color:red;">*</span> </td>
        <td>
    <input type="radio" name="courses" value="bca" id="bca" <?php echo ($_SESSION["courses"]??"") == "bca" ?"checked":"" ?>><label for="bca">BCA(Bachelor of Computer Applications)</label><br>
    <input type="radio" name="courses" value="bcom" id="bcom" <?= ($_SESSION["courses"]??"") == "bcom" ?"checked":"" ?>><label for="bcom">B.Com(Bachelor of Commerce)</label><br>
    <input type="radio" name="courses" value="bsc" id="bsc" <?= ($_SESSION["courses"]??"") == "bsc"?"checked":"" ?>><label for="bsc">B.Sc(Bachelor of Science)</label><br>
    <input type="radio" name="courses" value="ba" id="ba" <?= ($_SESSION["courses"]??"") == "ba"?"checked":"" ?>><label for="ba">BA(Bachelor of Arts)</label><br>
    <input type="radio" name="courses" value="mca" id="mca" <?php echo ($_SESSION["courses"]??"") == "mca"?"checked":"" ?>><label for="mca">MCA(Master of Computer Applications)</label><br>
    <input type="radio" name="courses" value="mcom" id="mcom" <?php echo ($_SESSION["courses"]??"") == "mcom"?"checked":"" ?>><label for="mcom">M.Com(Master of Commerce)</label><br>
    <input type="radio" name="courses" value="msc" id="msc" <?= ($_SESSION["courses"]??"") == "msc"?"checked":"" ?>><label for="msc">M.Sc(Master of Science)</label><br>
    <input type="radio" name="courses" value="ma" id="ma" <?php echo ($_SESSION["courses"]??"") == "ma"?"checked":""?>><label for="ma">MA(Master of Arts)</label>
      <?php if(isset($_SESSION["courses_error"])) {?>
        <span class="error">
           <?php 
             echo $_SESSION["courses_error"];
             unset($_SESSION["courses_error"]);
           ?>
        </span>
      <?php } ?>
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

<script>

$(document).ready(function(){
//   $("#my-form").submit(function(e){

//     formName = $("#name").val();
//     formEmail = $("#email").val();
//     formPhone = $("#phone").val();
//     var isError = false;

//     if(formName == "") {
//       var isError = true;
//       $("#name").addClass("red-color");
//     }

//     if(formEmail == "") {
//       isError = true;
//       $("#email").addClass("red-color");
//     }
     
//     if(formPhone == "") {
//       isError = true;
//       $("#phone").addClass("red-color");
//     }

//     if(isError) {
//       e.preventDefault();
//     }


// });


// $("#name, #email, #phone").change(function(){
//       forMyForm = $(this).val();
//       if(forMyForm != "") {
//         $(this).removeClass("red-color");
//       }
//    });

//   $(".btn").click(function(){
//      alert("This is test alert...");
//     console.log("This is console...");
//   });


// $("#name").change(function(){
//   chanBg = $(this).val();

//   if(chanBg == "") {
//     $(this).addClass("red-border");
//     $(this).removeClass("green-border");

//   } else {
//     $(this).addClass("green-border");
//     $(this).removeClass("red-border");
//   }
// });



// $(this).attr("id","names");
// $(this).removeAttr("id");



});

</script>


<?php 
unset($_SESSION["first_name"]);
unset($_SESSION["last_name"]);
unset($_SESSION["email"]);
unset($_SESSION["mobile_number"]);
unset($_SESSION["gender"]);
unset($_SESSION["address"]);
unset($_SESSION["city"]);
unset($_SESSION["pin_code"]);
unset($_SESSION["dob"]);
unset($_SESSION["courses"]);
unset($_SESSION["qualification"]);
unset($_SESSION["hobbies"]);
unset($_SESSION["other"]);
unset($_SESSION["other_type"]);
unset($_SESSION["for_day"]);
unset($_SESSION["for_months"]);
unset($_SESSION["for_years"]);
?>



</body>
</html>

