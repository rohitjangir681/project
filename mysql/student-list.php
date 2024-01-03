<?php 

require_once("config.php");


// To get total rows count
$pagiQuery = "SELECT COUNT(*) as total_table FROM `students`";
$pageData = $conn->query($pagiQuery);
$totalRows = mysqli_fetch_assoc($pageData);
$totalTableRow = $totalRows["total_table"];


// Pageination Calculation
$pageSize = 5;
$totalPage = ceil($totalTableRow/$pageSize);


$page = $_GET["page"]??1;
// echo $page;


$start = $page*$pageSize-$pageSize;
// $start = ($page-1)*$pageSize;
// echo $start;
// 1 - 0
// 2 - 5
// 3 - 10
// 4 - 15
// 5 - 20
// 6 - 25




// echo $totalPage;
// print_r($totalRows);
// echo $totalRows["total_table"];
// die;

$selQuery = "SELECT * FROM `students` LIMIT $start, $pageSize";
$studentQuery = $conn->query($selQuery);







// dd($studentQuery);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
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
    
<h2>This is students list</h2>

<?php require_once("message.php"); ?>
<a href="student-add.php">+Add New Student</a>

<table border="1" cellspacing="0">
    <tr>
        <th>Sr.No</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Fee</th>
        <th>Action</th>
    </tr>

 <?php 
 if($studentQuery->num_rows) {
    $i=$start+1;
while($_students = mysqli_fetch_assoc($studentQuery)) {
 ?>
    <tr>
       <td><?= $i++ ?></td>
       <td><?= $_students["name"] ?></td>
       <td><?= $_students["age"] ?></td>
       <td><?= ($_students["gender"]=="M")?"Male":"Female" ?></td>
       <td><?= $_students["phone"] ?></td>
       <td><?= $_students["email"] ?></td>
       <td><?= $_students["address"] ?></td>
       <td><?= $_students["fee"] ?></td>
       <td>
        <a href="student-edit.php?id=<?= $_students["id"] ?>">Edit</a> |
        <a href="student-delete.php?id=<?= $_students["id"] ?>" onclick="return confirm('Are you sure for delete this record');">Delete</a>
       </td>
    </tr>

<?php 
}
} else {
?>
<tr>
    <td colspan="8" align="center">No data found....</td>
</tr>
    <?php
}
?>

</table>
<br>

<div class="pagination">
  <a href="?page=<?= ($page==1)?1:$page-1 ?>">Previous &laquo;</a>
  <?php for($i = 1; $i <= $totalPage; $i++) { ?>
    <a href="?page=<?= $i ?>" class="<?= ($page == $i) ?'active':'' ?>"><?= $i ?></a>
  <?php } ?>
 
  <a href="?page=<?= $page+1 ?>">Next &raquo;</a>
</div>


</body>
</html>