<?php 
require_once("config.php");

$cityQuery = "SELECT ct.*, cn.name AS country_name, st.name AS state_name FROM `cities` AS ct INNER JOIN `countries` AS cn ON ct.country_id = cn.id INNER JOIN `states` AS st ON ct.state_id = st.id";
$citQuery = $conn->query($cityQuery);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City List</title>
</head>
<body>
    

<a href="city-add.php">City Add</a>
<?php require_once("message.php"); ?>
    <table border="1" cellspacing="0">
        <tr>
            <th>Sr.No</th>
            <th>Country</th>
            <th>State</th>
            <th>City</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php 
        $i = 1;
        if($citQuery->num_rows) { 
            while($_city = mysqli_fetch_assoc($citQuery)) {
        ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $_city["country_name"] ?></td>
            <td><?= $_city["state_name"] ?></td>
            <td><?= $_city["name"] ?></td>
            <td><?= ($_city["status"]=="1")?"Enable":"Disable" ?></td>
            <td>
                <a href="city-edit.php?id=<?= $_city["id"] ?>">Edit</a> |
                <a href="city-delete.php?id=<?= $_city["id"] ?>">Delete</a>
            </td>
        </tr>
    <?php } 
       } else {
        ?>
        <tr>
            <td colspan="6" align="center">Data not found...</td>
        </tr>
        <?php 
       }
    ?>
    </table>



<!--
City
Table name: cities
Fields: id, country_id, state_id, name, status(1 - for Enable, 2 for Disable), created_at, updated_at 
-->

</body>
</html>