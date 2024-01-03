<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is Logical operator lesson</title>
</head>
<body>
    
<h3>This is Logical operator lesson</h3>

<?php 

// In this lesson we wiil learn use of Logical operator

# Logical Operator: and, &&, or, ||, !

// Output will be in: true / false

// in this variable boths are value should be in true




$a = 10;
$b = 14;
$c = 5;


$output = ($a and $b && $c);

var_dump($output);


echo "<br><br>";


$nextone = "Test 1";
$nexttwo = "Test 2";
$nextfal = 0;

$nextall = ($nextone && $nexttwo && $nextfal);

var_dump($nextall);

echo "<br><br>";




// or, || Operator, in this case one value must be true



$ab = false; // value will be true
$bc = false;
$cd = false;


$abc = ($ab or $bc || $cd);

var_dump($abc);


echo "<br><br>";

// another example of this operator

$one = false; // in this case value will be false
$two = false;

$onetwo = ($one || $two);

var_dump($onetwo);



echo "<br>";
// Now we will learn " ! " Operator

$noteone = false;
$notetwo = true;
$notec = true;

$noteoutput = !($noteone || $notetwo || $notec);

var_dump($noteoutput);


echo "<br><br>";

$final = true;
$final2 = false;

$final3 = $final and $final2;

var_dump($final3);




?>


</body>
</html>