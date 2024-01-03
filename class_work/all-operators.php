<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is All Operators lesson</title>
</head>
<body>


<pre title="For test">Lorem Ipsum is simply dummy text of the 
    printing and typesetting industry. Lorem 
    Ipsum has been the industry's standard dummy text ever since the 
    1500s, when an unknown printer took a galley of type and scrambled 
    it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</pre>








<p>In this lesson we will learn about "<i><b>All operators in PHP</b></i>"</p>
    
<?php 


echo "<br>";
echo $fortrim = " Removes whitespace or other predefined characters ";
echo "<br>";
echo rtrim($fortrim);


// Arithmetic Operator 
echo "<h3>1. Arithmetic Operator: +, -, /, %, *, **</h3>";



// for " + " ============================================

$a = 30;
$b = 20;

$c = ($a + $b);

echo $c;


// For " - " =============================================
echo "<br>";


$aa = 40;
$ab = 30;

$ca = ($aa - $ab);

echo $ca;

# ---------
echo "<br>";

$aa1 = 30;
$ab1 = 40;

$ca1 = ($aa1 - $ab1);

echo $ca1;

// for " * "  =============================================
echo "<br>";

$mlt = 6;
$mlt1 = 4;

$mltt = ($mlt * $mlt1);

echo $mltt, "<br>";

// for " % "  =====================================

$dubles = 57;
$dubles1 = 5;

$dublet = ($dubles % $dubles1);

echo $dublet, "<br>";

// for " ** " = ==================================

$ex = 5;
$ex2 = 2;

$extotal = ($ex ** $ex2);

echo $ex, "<sup>$ex2</sup> Total: ", $extotal, "<br>";



// for " / "  =====================================

$divide = 47;
$divide1 = 5;

$divideT = ($divide / $divide1);

echo $divideT;


echo "<br><br> <h3>2. Assignment Operator: =, -=, +=, %=, /=, **=, *=</h3>";

// for " -= " =======================

$assign = 30;
$assign1 = 20;

$assign -= $assign1;

echo $assign;


$assmi = 40;
$assmi1 = 50;

$assmi -= $assmi1;

echo "<br> $assmi <br>";


// for " += "  ===========================

$plus = 25;
$plus1 = 40;

$plus += $plus1;

echo $plus;


// for " /= "  =============================

$divideas = 47;
$divideas1 = 10;

$divideas /= $divideas1;

echo "<br> $divideas <br>";

// for " %= "  =============================

$modual = 30;
$modual1 = 4;

$modual %= $modual1; 

echo $modual;

// for " *= " ==================================

$multiple = 50;
$multiple1 = 3;

$multiple *= $multiple1;

echo "<br>", $multiple, "<br>";


// for " **= " ==================================

$expo = 2;
$expo1 = 5;

$expo **= $expo1;

echo $expo;



echo "<br><br> <h3>3. Comparison Operator: ==, ===, !=, !==, <>, >, <, <=, >=, <=> </h3>";

// for " == "  =================================

$comp = 20;
$comp1 = 20;

$compto = ($comp == $comp1);

var_dump($compto);

// for " === "  ================================

$triple = 25;
$triple1 = "25";

$tripletotal = ($triple === $triple1);

echo "<br>";
var_dump($tripletotal);
echo "<br>";


// for " != (Not equal) "  ==================================

$notequal = 30;
$notequal1 = 20;

$notequalt = ($notequal != $notequal1);

var_dump($notequalt);
echo "<br>";


// for " !== "  ===================================

$notdublee = 40;
$notdublee1 = "25";

$notdubleeto = ($notdublee !== $notdublee1);

var_dump($notdubleeto);
echo "<br>";


// for " <> (He is also not equal) " ===================

$othernot = 40;
$othernot1 = "40";

$othernotto = ($othernot <> $othernot1);
 
var_dump($othernotto);
echo "<br>";


// for " < "  ================================

$lessthan = 10;
$lessthan1 = 20;

$lessoutput = ($lessthan < $lessthan1);

var_dump($lessoutput);
echo "<br>";


// for " > "  ==============================

$greaterthan = 30;
$greaterthan1 = 40;

$greateroutput = ($greaterthan > $greaterthan1);

var_dump($greateroutput);
echo "<br>";

// for " <= "  ================================

$lessequl = 30;
$lessequl1 = 29;

$lessequloutput = ($lessequl <= $lessequl1);

var_dump($lessequloutput);
echo "<br>";


// for " >= "  ===============================

$greatereq = 40;
$greatereq1 = 30;

$output = ($greatereq >= $greatereq1);

var_dump($output);
echo "<br>";

// for " <=> "  =============================

$spaceship = 20;
$spaceship1 = 30;

$spaceoutput = ($spaceship <=> $spaceship1);

var_dump($spaceoutput);


echo "<h3>4. Increment / Decrement Operator: ++ (Pre/post increment, -- (Pre/post decrement)</h3>";

// for " ++ Post increment "  ==========================

$increment = 30;

$increment++;

echo $increment, "<br>";

// for " ++ Pre increment "  ==========================

$incrementp = 30; 

++$incrementp;

echo $incrementp, "<br>";

// for " -- Post decrement operator "  =================

$dcrement = 30;

$dcrement--;

echo $dcrement, "<br>";

// for " -- Pre decrement "  ================================

$dcrementp = 30;

--$dcrementp;

echo $dcrementp;


















?>




</body>
</html>