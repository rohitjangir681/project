<?php 
require_once("config.php");

// $selQuery = "SELECT * FROM `states`";
$selQuery = "SELECT s.*, c.name AS country_name FROM `states` AS s INNER JOIN `countries` AS c ON s.country_id = c.id";
$stateQuery = $conn->query($selQuery);

// dd($stateQuery);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State List</title>
</head>
<body>
    

<a href="state-add.php">Add State</a>
<?php require_once("message.php"); ?>
<table border="1" cellspacing="0">
    <tr>
        <th>Sr.No</th>
        <th>Country</th>
        <th>State</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    <?php 
    if($stateQuery->num_rows) {
    $i = 1;
        while($_states = mysqli_fetch_assoc($stateQuery)) {
    ?>
    <tr>
        <td><?= $i++ ?></td>
        <td><?= $_states["country_name"] ?></td>
        <td><?= $_states["name"] ?></td>
        <td><?= ($_states["status"]=="1")?"Enable":"Disable" ?></td>
        <td>
            <a href="state-edit.php?id=<?= $_states["id"] ?>">Edit</a> |
            <a href="state-delete.php?id=<?= $_states["id"] ?>">Delete</a>
        </td>
    </tr>
    <?php } 
    } else {
    ?>
        <tr>
            <td colspan="5" align="center">Data not found...</td>
        </tr>
    <?php 
    }
    ?>
</table>



<!-- 

State
Table name: states
Fields: id, country_id, name, status(1 - for Enable, 2 for Disable), created_at, updated_at
------------------------

 -->
 
</body>
</html>