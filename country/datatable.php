<?php 
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "country";

$conn = mysqli_connect($host, $userName, $password, $dbName);

// $conn = new mysqli($host, $userName, $password, $dbName); // this is another way to connect to database

$query = "SELECT * FROM countries";
$queryData = $conn->query($query);

// $dataFetch = mysqli_fetch_assoc($queryData);
// $dataFetch = $queryData->fetch_assoc();


// $allRows = $queryData->num_rows;
// echo $allRows;



// echo "<pre>";
// print_r($dataFetch);
// echo "</pre>";
// die();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable</title>
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>
<body>

<h2>DataTable Exercise...</h2>


<table class="myTable display">
    <thead>
        <tr>
            <th>Sr.No.</th>
            <th>Id</th>
            <th>Country</th>
            <th>Status</th>
            <!-- <th>Action</th> -->
        </tr>
    </thead>
    <tbody>

    <?php 
     $i = 1;
        while($dataFetch = mysqli_fetch_assoc($queryData)) { 
    ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $dataFetch["id"] ?></td>
            <td><?= $dataFetch["name"] ?></td>
            <td><?= ($dataFetch["status"]==1)?"Enable":"Disable" ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready( function () {
        $('.myTable').DataTable();
    } );
    
</script>

<!-- 
xl
lg
md
sm
 -->


</body>
</html>