<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is Conditional Statements lesson</title>
</head>
<body>
    
<h3>In this lesson we will learn about Conditional Statements in PHP</h3>

<p>There are four Conditional Statements:</p>

<ul>
    <li>if statement</li>
    <li>if....else statement</li>
    <li>if...elseif.....else statement</li>
    <li>switch statement</li>
</ul>

<?php 

// There are four Conditional statements which are:

/* if statement
   if.....else statement
   if....elseif.....else statement
   switch statement
*/


// This is if statement

$a = 30;
$b = 29;


if($a > $b) {
    echo "This is true Part";
}


echo "<br><br>";


// if....else statement

$c = 30;
$d = 40;

if($c > $d) {
    echo "C is Big";

} else {
    echo "D is Big";
}

echo "<br>";

if($c < $d) {     
    echo "C is Big";

} else {
    echo "D is big";
}

echo "<br><br>";

// ==========================

$ab = 95;
$bc = 105;
$ca = 160;
$cc = 170;

if($ab > $bc && $ab > $ca) {

    echo "AB is Big";

} elseif($bc > $ca && $bc > $cc) {

    echo "BC is big";

} elseif($ca > $cc) {
    echo "CA is Big";
} else {
    echo "CC is Big ";
}


echo "<br><br>";

// Switch statement

$case = 3;

switch($case) {
    case 1:
        echo "Case 1";
        break;
    case 2:
        echo "Case 2";
        break;
    case 3:
        echo "Case 3";
        break;
    default:
    echo "Default case";
    break;
}



echo "<br><br>";
// another swithc conditional statemetn


$case1 = "S";

switch($case1) {
    case "S":
        echo "Sunday";
        break;
    case "M":
        echo "Monday";
        break;
    case "T":
        echo "Tuesday";
        break;
    case "W":
        echo "Wednesday";
        break;
    case "TR":
        echo "Thursday";
        break;
    case "F":
        echo "Friday";
        break;
    case "ST":
        echo "Saturday";
        break;
    default:
        echo "No day name";
        break;
}







?>



</body>
</html>