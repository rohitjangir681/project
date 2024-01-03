<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is Assignment Operator</title>
</head>
<body>

<h3>In this lession we will learn about the "Assignment Operator"</h3>


<?php 

$assigment = "=, -=, +=, /=, %=, *=, **=";

echo $assigment, "<br>";

$a = 40;
$b = 30;

$a = ($a + $b);

echo $a;

$b = ($a - $b);

echo $b;



// =====================

echo "<br>";

$ab = 50;
$ac = 40;

$ab += $ac;

echo $ab;

echo "<br>";

$ac -= $ab;

echo $ac;

echo "<br>";

// ====================

$na = 5;
$nb = 6;

$na *= $nb;

echo $na;

// echo $nb;
echo "<br>";

$nc = 42;
$nd = 5;

$nc /= $nd;

echo $nc;

echo "<br>";

// ======================

$an = 54;
$bn = 5;

$an %= $bn;

echo $an;

echo "<br>";
// =======================

$newone = 3;
$newtwo = 4;

$newone **= $newtwo;

echo "<b>Total:</b> 3<sup>$newtwo</sup> = $newone";




?>



</body>
</html>