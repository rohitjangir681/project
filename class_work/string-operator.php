<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is String Operator Class</title>
</head>
<body>
    
<h3>In this lesson we will learn what is string operator and how to use it.</h3>

<?php 

// String Operator: 

# . (Concatenation operator), .= (Concatenation assignment operator)


$a1 = "PHP ";
$a2 = "Lesson";

$a3 = $a1.$a2." Class ".$a1." Today";

echo $a3;


// .=  (Concatenation assigment operator)
echo "<br>";

$a = "First ";
$b = "Last";

$a .= $b;

echo $a;





?>


</body>
</html>