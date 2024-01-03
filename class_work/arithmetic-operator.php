<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arithmetic Operator Tutorial</title>
</head>
<body>

<h3>+, -, /, *, **, %</h3>

<?php 


// + Arithmetic oprator


$a = 30;
$b = 40;

$c = ($a + $b);

echo "<br> $c <br> $a <br>$b";

echo $c;

print $a;

$ab = 10;
$bc = 20;
$ce = 5;
$e = 10;
$f = 40;

$d = ($ab + $bc + $ce + $e + $f);

echo "<br> Total Number: ", $d;

// Second way


$first = 30;
$second = 10;
$third = 20;

$total = ($first + $second + $third);

echo "<br> Total Number: $total <br>";


// - Arithmetic Oprator



# This is first way

$firstminus = 30;
$secominus = 20;

$minusTotal = ($firstminus - $secominus);

echo "$minusTotal <br>";


# another way for - oprator

$anone = 50;
$ansecond = 30;
$anthird = 10;

$antotal = ($anone - $ansecond - $anthird);

echo $antotal, "<br>";


// It is multiply oprator *


# first way

$multiply = 5;
$multiplyf = 10;

$multiplyTotal = ($multiply * $multiplyf);

echo $multiplyTotal, "<br>";


# second way


$multiplyfirst = 5;
$multiplysecond = 5;
$multiplythird = 5;

$allmultiplyTotal = ($multiplyfirst * $multiplysecond * $multiplythird); 

echo $allmultiplyTotal, "<br>";


// / oprator


$dividef = 73;
$divides = 10;

$divideTotal = ($dividef % $divides);

echo $divideTotal, "<br>";


// exponentiation oprator **


$exponentiationf = 4;
$exponentiations = 3;


$Totalexponentiation = ($exponentiationf ** $exponentiations);

echo "Total: $exponentiationf <sup>$exponentiations</sup> $Totalexponentiation";

echo "<br>";

$today = 40;
$todaysecond = 50;

$todaytotal = ($today + $todaysecond);

echo $todaytotal;

echo "<br> -, +, %, /, *, **";




 ?>



</body>
</html>