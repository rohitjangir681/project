<?php 

require_once("config.php");

$id = $_GET["id"]??0;

// dd($id);

$counQuery = "SELECT * FROM `countries` WHERE id=$id";
$countUpdate = $conn->query($counQuery);
$_update = mysqli_fetch_assoc($countUpdate);


$stateQuery = "SELECT * FROM `states` WHERE country_id=$id";
$stQuery = $conn->query($stateQuery);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Country Edit</title>
</head>
<body>
    
<form action="country-update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $_update["id"] ?>">

    <table>
        <tr>
            <td>Country Name: </td>
            <td><input type="text" name="country" value="<?= $_update["name"] ?>"><td> <br>
        </tr>
        
        <tr>
            <td> Status: </td>
            <td>
                <select name="country_status">
                <option value="1" <?= ($_update['status'] == 1) ? "selected" : ""?>>Enable</option>
                <option value="2" <?= ($_update['status'] == 2) ? "selected" : ""?>>Disable</option>
                </select>
            </td>
        </tr>


        <tr>
            <td>States:</td>
            <td> 
                <table id="table_id">
                <tr>
                    <th>Name</th>
                    <th>Status</th>
                    <td>
                        <button type="button" class="add_more">+</button>
                    </td>
                </tr>

                <?php while($_stateGet = mysqli_fetch_assoc($stQuery)) { ?>
                <tr>
                    <td>
                        <input type="hidden" name="state_id[]" value="<?= $_stateGet["id"] ?>">
                        <input type="text" name="state_name[]" value="<?= $_stateGet["name"] ?>"> 
                    </td>
                    
                    <td>
                        <select name="state_status[]">
                            <option value="1" <?= ($_stateGet["status"]==1) ? "selected" : "" ?>>Enable</option>
                            <option value="2" <?= ($_stateGet["status"]==2) ? "selected" : "" ?>>Disable</option>
                        </select>
                    </td>
                    <td><button type="button" class="remove">X</button></td>
                </tr>
                
                <?php } ?>
                

                </table>
            </td>
        </tr>




        <tr>
            <td></td>
            <td>
                <input type="submit" value="Update">
            </td>
        </tr>
    </table>
</form>

<script>
    $(document).ready(function(){
        $(".add_more").click(function(){
            var tableRow = '<tr>\
                    <td><input type="text" name="state_name[]"></td>\
                    <td><select name="state_status[]">\
                    <option value="1">Enable</option>\
                    <option value="2">Disable</option>\
                    </select>\
                    </td>\
                    <td><button type="button" class="remove">X</button></td>\
                </tr>';

                $("#table_id").append(tableRow);
              
        });

        $("#table_id").delegate(".remove", "click", function(){
            $(this).closest("tr").remove();
        });
       
    });
</script>

</body>
</html>