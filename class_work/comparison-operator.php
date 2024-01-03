<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is Comparison Operator</title>
</head>
<body>
    
<h3>This is Comparison Operator</h3>

<?php 


// Outpur will always be in Boolean Value

$comparison = "==, ===, !=, !==, <>, <, >, <=, >=, <=>";

echo $comparison;


//   " == " Operator
echo "<br>";


$a = 40;
$b = 40;

$ab = ($a == $b);

var_dump($ab);

echo "<br>";

$aeq = 60;
$beq = 50;

$eqtotal = ($aeq == $beq);

var_dump($eqtotal);



//   " === " Operator
echo "<br>";


# This will be true
$tri = 50;
$trisecond = 50;

$tritotal = ($tri === $trisecond);

var_dump($tritotal);


# but this will be false because "===" checks value with data type, so in this case result will be below:
echo "<br>";

$trione = 50;
$trithird = "50";

$tritotals = ($trione === $trithird);

var_dump($tritotals);

echo "<br>";



// Now we would learn " != " Operator

# In this case if the value is equal then the output will be "false" and if the value is not equal then the output will be "true"

$equala = 30;
$equalb = 30;

$equaloutput = ($equala != $equalb);

var_dump($equaloutput);

echo "<br>";

$equalab = 40;
$equalbc = 30;

$equalaboutput = ($equalab != $equalbc);

var_dump($equalaboutput);

echo "<br>";


// Now we would learn " !== " Operator
# in this case boths are value and data type will be count 

$dubleequal = 40;
$dubleequalnext = 30;

$dubletotal = ($dubleequal !== $dubleequalnext);

var_dump($dubletotal);

echo "<br>";

$duba = 40;
$dubb = "40";

$dubtotal = ($duba !== $dubb);

var_dump($dubtotal);

echo "<br>";



// Now we will learn " <> " Operator

$gret = 40;
$less = 43;

$gretlesstotal = ($gret <> $less);

var_dump($gretlesstotal);

echo "<br>";

$gretone = 40;
$lessone = 40;

$lesstotal = ($gretone <> $lessone);

var_dump($lesstotal);


echo "<br>";


// Next Operator " > (greater than) and < (less than)"  

$gone = 50;
$gtwo = 40;

$goutput = ($gone > $gtwo);

var_dump($goutput);

echo "<br>";

$gonenext = 40;
$gtwonext = 50;

$gnextoutput = ($gonenext > $gtwonext);

var_dump($gnextoutput);


echo "<br>";
# < (less than) 

$lessnext = 40;
$lessnexts = 30;

$lessonetotal = ($lessnext < $lessnexts);

var_dump($lessonetotal);

echo "<br>";

$nextless = 40;
$nextlesss = 50;

$nexttotalout = ($nextless < $nextlesss);

var_dump($nexttotalout);



echo "<br>";

// Now I would like to learn use of " <= " Operator

$lessequal = 50;
$lessequals = 60;

$lesseoutput = ($lessequal <= $lessequals);

var_dump($lesseoutput);

echo "<br>";

$lesseone = 50;
$lessetwo = 50;

$lessetotalout = ($lesseone <= $lessetwo);

var_dump($lessetotalout);

echo "<br>";

$lessegreat = 50;
$lessegreats = 40;

$outputlessgreats = ($lessegreat <= $lessegreats);

var_dump($outputlessgreats);



echo "<br>";
// Use of " >= " Operator

$small = 50;
$big = 60;

$smallbigout = ($small >= $big);

var_dump($smallbigout);


echo "<br>";

$bigone = 60;
$smallone = 50;

$bigoutput = ($bigone >= $smallone);

var_dump($bigoutput);

echo "<br>";

$nextbig = 23;
$nextonebig = 23;

$nextbigoutput = ($nextbig >= $nextonebig);

echo "<br>";



// Now we will learn spaceship operator " <=> "

$spaceship = 30;
$spaceshipone = 40;

$spanceshipout = ($spaceship <=> $spaceshipone);

var_dump($spanceshipout);

echo "<br>";

$spaceone = 40;
$spacetwo = 30;

$spaceoutput = ($spaceone <=> $spacetwo);

var_dump($spaceoutput);

echo "<br>";

$spaceend = 50;
$spacetheend = 50;

$spaceendout = ($spaceend <=> $spacetheend);

var_dump($spaceendout);







?>


</body>
</html>