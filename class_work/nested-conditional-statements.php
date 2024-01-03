<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is Nested Conditional Statements lesson</title>
</head>
<body>
    
<h3>Nested Conditional Statements</h3>

<p>In this lesson we will learn about Nested Conditional Statements</p>

<?php 


$a = 30;
$b = 50;
$c = 70;

if($a > $b) {
    if($a > $c) {
        echo "A is big";
    } else {
        echo "C is big";
    }
} else {
    if($b > $c) {
        echo "B is big";
    } else {
        echo "C is big";
    }
}





// if($a > $b && $a > $c) {
//     echo "A is big";
// } elseif($b > $c) {
//     echo "B is big";
// } else {
//     echo "C is big";
// }


?>


</body>
</html>