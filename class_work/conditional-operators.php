<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is Conditional Operators Class</title>
</head>
<body>

<h3>In this lesson we will learn use of "Conditional Operators"</h3>

<?php 

// ?: (Ternary operator), ?? (Null Coalescing)

$a = 40;
$b = 30;

$output = (false)?"True Part":"False Part";

echo $output;



echo "<br>";
// Use of ?? (Null coalesscing)

$ab = 30;
$bc = 40;

echo $ab??"No Data";

echo "<br>";

// =============


$age = NULL;

echo $age??18;












?>


</body>
</html>