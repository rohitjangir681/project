<?php 

require_once("config1.php");

$pagiQuery = "SELECT COUNT(*) AS table_rows FROM students2";
$pagiData = $conn->query($pagiQuery);
$fetchData = mysqli_fetch_assoc($pagiData);
$totalRows = $fetchData["table_rows"];
$pageSize = 3;
$pageNumber = ceil($totalRows/$pageSize);


$page = $_GET["page"]??1;
$start = ($page-1)*$pageSize;

/*
(1-1)x3 = 0
(2-1)x3 = 3
(3-1)x3 = 6
0 = 3
3 =  3
6 =  3
*/


$selectQuery = "SELECT * FROM `students2` LIMIT $start, $pageSize";
$studentQuery = $conn->query($selectQuery);


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
            border-radius: 5px;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>




<h2>Student List..</h2>

<?php require_once("message.php"); ?> 
<a href="student-add.php">Add Student</a>
<table border="1" cellspacing="0">
    <tr>
        <th>Sr.No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>Date</th>
        <th>Address</th>
        <th>City</th>
        <th>Pin Code</th>
        <th>State</th>
        <th>Country</th>
        <th>Hobbies</th>
        <th>Other Hobbies</th>
        <th>Qualification</th>
        <th>Courses</th>
        <th>Action</th>
    </tr>
    <?php
    if($studentQuery->num_rows) { 
        $i = 1;
       while($_students = mysqli_fetch_assoc($studentQuery)) {
    ?>
    <tr>
        <td><?= $i++ ?></td>
        <td><?= $_students["fName"] ?></td>
        <td><?= $_students["lName"] ?></td>
        <td><?= $_students["email"] ?></td>
        <td><?= $_students["phone"] ?></td>
        <td><?= ($_students["gender"]=="M")?"Male":"Female"; ?></td>
        <td><?= $_students["for_date"] ?></td>
        <td><?= $_students["address"] ?></td>
        <td><?= $_students["city"] ?></td>
        <td><?= $_students["pinCode"] ?></td>
        <td><?= $_students["state"] ?></td>
        <td><?= $_students["country"] ?></td>
        <td><?= $_students["hobbies"] ?></td>
        <td><?= $_students["otherHobbies"] ?></td>
        <td><?= $_students["qualification"] ?></td>
        <td><?= $_students["courses"] ?></td>
        <td>
            <a href="student-edit.php?id=<?= $_students["id"] ?>">Edit</a> |
            <a href="student-delete.php?id=<?= $_students["id"] ?>">Delete</a>
        </td>
    </tr>
    <?php 
    } 
    } else {
    ?>

    <tr>
        <td colspan="14" align="center">No Data found....</td>
    </tr>
    <?php } ?>
</table>
<br>

<div class="pagination">
    <a href="?page=<?= ($page == 1) ? 1 : $page-1 ?>">&laquo; Prev</a>
<?php for($i=1; $i<=$pageNumber; $i++) { ?>
    <a href="?page=<?= $i ?>" class="<?= ($page == $i)? 'active':'' ?>"><?= $i ?></a>
<?php } ?>
    <a href="?page=<?= $page+1 ?>">Next &raquo;</a>
</div>


<!-- <div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#" class="active">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div> -->




</body>
</html>