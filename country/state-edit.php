<?php 
require_once("config.php");

$id = $_GET["id"];


$countryQuery = "SELECT * FROM `countries`";
$couQuery = $conn->query($countryQuery);


$selQuery = "SELECT * FROM `states` WHERE id=$id";
$stateQuery = $conn->query($selQuery);
$_state = mysqli_fetch_assoc($stateQuery);


$cityQuery = "SELECT * FROM `cities` WHERE state_id=$id";
$ctQuery = $conn->query($cityQuery);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>State Edit</title>
</head>
<body>
    <?php require_once("message.php"); ?>
<form action="state-update.php" method="post">
    <input type="hidden" name="id" value="<?= $_state["id"] ?>">
    <table>
        <tr>
            <td>Country:</td>
            <td>
                <select name="country_id">
                    <?php while($_country = mysqli_fetch_assoc($couQuery)) { ?>
                    <option value="<?= $_country["id"] ?>" <?= ($_state["country_id"] == $_country["id"]) ? "selected":"" ?>><?= $_country["name"] ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>State Name:</td>
            <td><input type="text" name="state" value="<?= $_state["name"] ?>"></td>
        </tr>
        <tr>
            <td>Status:</td>
            <td>
                <select name="status_change">
                    <option value="1" <?= ($_state['status'] == 1) ? "selected" : ""?>>Enable</option>
                    <option value="2" <?= ($_state['status'] == 2) ? "selected" : ""?>>Disable</option>
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
            <?php while($_cityGet = mysqli_fetch_assoc($ctQuery)) { ?>
            <tr>
                <td>
                    <input type="hidden" name="city_id[]" value="<?= $_cityGet["id"] ?>">
                    <input type="text" name="cityName[]" value="<?= $_cityGet["name"] ?>">
                </td>
                <td>
                    <select name="cityStatus[]">
                        <option value="1" <?= $_cityGet["status"]==1 ? "selected" : "" ?>>Enable</option>
                        <option value="2" <?= $_cityGet["status"]==2 ? "selected" : "" ?>>Disable</option>
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
            <td><input type="submit" value="Update"></td>
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