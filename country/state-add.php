<?php 
require_once("config.php");

$countryQuery = "SELECT * FROM `countries`";
$couQuery = $conn->query($countryQuery);

// dd($_states);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>State Add</title>
</head>
<body>
<h2>State add page..</h2>


<form action="state-save.php" method="post">
    <table>
        <tr>
            <td>Country</td>
            <td>
                <select name="country_id">
                    <option value="">Select Country</option>
                    <?php while($_country = mysqli_fetch_assoc($couQuery)) { ?>
                    <option value="<?= $_country["id"] ?>"><?= $_country["name"] ?></option>

                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>State:</td>
            <td><input type="text" name="state" placeholder="State Name"></td>
        </tr>
        <tr>
            <td>Status:</td>
            <td>
                <select name="status">
                    <option value="1">Enable</option>
                    <option value="2">Disable</option>
                </select>
            </td>
        </tr>

<tr>
    <td>City:</td>
    <td>
        <table id="table_data">
            <tr>
                <th>Name</th>
                <th>Status</th>
                <td>
                    <button type="button" class="add_more">+</button>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="cityName[]">
                </td>
                <td>
                    <select name="cityStatus[]">
                        <option value="1">Enable</option>
                        <option value="2">Disable</option>
                    </select>
                </td>
            </tr>
        </table>
    </td>
</tr>


        <tr>
            <td></td>
            <td>
                <input type="submit" value="Save" name="save">
                <input type="submit" value="Save & New" name="save_new">
            </td>
        </tr>
    </table>
</form>    


<script>
    $(document).ready(function(){
        $(".add_more").click(function(){
            var addData = `<tr>
                <td>
                    <input type="text" name="cityName[]">
                </td>
                <td>
                    <select name="cityStatus[]">
                        <option value="1">Enable</option>
                        <option value="2">Disable</option>
                    </select>
                </td>
                <td><button type="button" class="remove">X</button></td>
            </tr>`;

            $("#table_data").append(addData);
        });
        $("#table_data").delegate(".remove", "click", function(){
            $(this).closest("tr").remove();
        });
    });
</script>


</body>
</html>