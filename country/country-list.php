<?php 
require_once("config.php");

$countQuery = "SELECT COUNT(*) AS country_table FROM countries";
$countData = $conn->query($countQuery);
$countFetchData = mysqli_fetch_assoc($countData);

$pageSize = 5;
$countryRow = $countFetchData["country_table"];
$totalRow = ceil($countryRow/$pageSize);


$pageNumber = $_GET["page"]??1;

// 0 = 5
// 1 = 10
// 2 = 15

$start = $pageNumber*$pageSize-$pageSize;


$countryQuery = "SELECT * FROM `countries` LIMIT $start, $pageSize";
$counQuery = $conn->query($countryQuery);


// echo $totalRow;
// echo $countFetchData["country_table"];
// dd($countFetchData);






// dd($counQuery);
// dd($_countriesData);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country List</title>
    <style>
        .pagination {
            display: inline-block;
        }

        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }

        .pagination a.active {
            background-color: #4CAF50;
            color: white;
        }

        .pagination a:hover:not(.active) {background-color: #ddd;}
</style>
</head>
<body>
    
<a href="country-add.php">Add Country</a>
<?php require_once("message.php") ?>
<table border="1" cellspacing="0">
    <tr>
        <th>Sr.No</th>
        <th>Country</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
        <?php
        if($counQuery->num_rows) {
        $i = $start + 1; 
    while($_countriesData = mysqli_fetch_assoc($counQuery)) { 
        ?>
    <tr>
        <td><?=$i++ ?></td>
        <td><?= $_countriesData["name"] ?></td>
        <td><?= ($_countriesData["status"]=="1")?"Enable":"Disable" ?></td>
        <td>
            <a href="country-edit.php?id=<?= $_countriesData["id"] ?>">Edit</a> |
            <a href="country-delete.php?id=<?= $_countriesData["id"] ?>">Delete</a>
        </td>
        
    </tr>
    <?php } 
    } else { ?>
        <tr>
            <td colspan="4" align="center">Data not found...</td>
        </tr>
    <?php } ?>
</table>
<br>

<div class="pagination">
    <a href="?page=<?= ($pageNumber == 1) ? 1 : ($pageNumber-1) ?>">&laquo;</a>
    <?php for($i = 1; $i <= $totalRow; $i++) { ?>
        <a href="?page=<?= $i ?>" class="<?= ($pageNumber == $i) ? 'active': '' ?>"><?= $i ?></a>
    <?php } ?>
    <a href="?page=<?= $pageNumber+1 ?>">&raquo;</a>
</div>




<!-- <div class="pagination"> -->
  <!-- <a href="#">&laquo;</a> -->
  <!-- <a href="#" class="active">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a> -->
  <!-- <a href="#">&raquo;</a> -->
<!-- </div> -->



<!-- 
Country
Table name: countries
Fields: id, name, status(1 - for enable, 2 for Disable), created_at, updated_at
------------------------
State
Table name: states
Fields: id, country_id, name, status(1 - for enable, 2 for Disable), created_at, updated_at
------------------------
City
Table name: cities
Fields: id, country_id, state_id, name, status(1 - for enable, 2 for Disable), created_at, updated_at 
-->
</body>
</html>