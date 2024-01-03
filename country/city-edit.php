<?php 
require_once("config.php");

$id = $_GET["id"];


$countryQuery = "SELECT * FROM `countries`";
$couQuery = $conn->query($countryQuery);

$stateSel = "SELECT * FROM `states`";
$stateQuery = $conn->query($stateSel);


$selQuery = "SELECT * FROM `cities` WHERE id=$id";
$cityQuery = $conn->query($selQuery);

$city = mysqli_fetch_assoc($cityQuery)





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Edit</title>
</head>
<body>
    
<form action="city-update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $city["id"] ?>">
        <table>
            <tr>
                <td>Country:</td>
                <td>
                    <select name="country_id">
                        <?php while($_country = mysqli_fetch_assoc($couQuery)) { ?>
                        <option value="<?= $_country["id"] ?>" <?= ($city["country_id"] == $_country["id"]) ? "selected" : "" ?>><?= $_country["name"] ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>State:</td>
                <td>
                    <select name="state_id">
                        <?php while($_state = mysqli_fetch_assoc($stateQuery)) { ?>
                        <option value="<?= $_state["id"] ?>" <?= ($city["state_id"] == $_state["id"]) ? "selected" : "" ?>><?= $_state["name"] ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>City Name:</td>
                <td>
                    <input type="text" name="city" value="<?= $city["name"] ?>">
                </td>
            </tr>
            <tr>
                <td>Status:</td>
                <td>
                    <select name="status">
                        <option value="1" <?= ($city["status"] == 1) ? "selected" : "" ?>>Enable</option>
                        <option value="2" <?= ($city["status"] == 2) ? "selected" : "" ?>>Disable</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Save">
                </td>
            </tr>
        </table>
    </form>


</body>
</html>