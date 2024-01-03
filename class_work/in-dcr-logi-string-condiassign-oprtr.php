<?php 








// # this is chunk_split function:
// $str = "This is chunk split function";
// echo chunk_split($str,2,".");

// ====================================
// $a = 10;
// $b = 20;

// $result = ($a > $b) ? "This is big ".$a:"This is smaal ".$b;

// echo $result;


// ===========================================
// $expr1 = NULL;
// $expr2 = "This page isn't working";
// $g = $expr1 ?? $expr2;
// echo $g;

// ============================================
// $expr1 = 7 > 10;
// $expr2 = "This is true part";
// $expr3 = "This is false part";

// $y = $expr1?$expr2:$expr3;

// echo $y;


// =========================================
// $xy = "The ";
// $yz = "is precious";
// $xyz = " I want ";

// echo $xy . $yz . $xyz . 10 . "kg" . "<br>";


// $new = "This is ";
// $new2 = "precious sweets";
// $new .= $new2;
// echo $new;


// =========================================
// $x = true;
// $y = false;

// $x = ($x and $y); // x = true && false = x = false
// $y = $x or $y; // y = false
// $y = $x && $y; // y false
// $x = $x || !$y; // x = true

// echo "<br>";

// // echo $x."-<br>-".$y;

// var_dump($x);
// var_dump($y);
// ====================================

// $a1 = true;
// $a2 = false;
// $a3 = ($a1 and $a2);
// var_dump($a3);
// // var_dump(!$a3);




// false false true

// =========================================================
// $x = 11;
// ++$x;
// echo $x++."<br>"; // x = 12
// --$x; // x = 12
// $y=$x; // y = 12
// echo $x--."<br>"; // x = 12
// echo $x += $x++; // 11 + 12 = x = 23
// echo "<br>".$y--."<br>".--$y;
// echo "<br>";
// echo $x -= ++$x; // x = 24 - 24 = 0
// echo "<br>";

// ===================================================

// $x = 10;
// $y = 15;

// $z = $x == $y; // z = false
// echo $z."<br>"; // z = false
// $z = $x === $y; // z = false
// $z = $x != $y; // z = true
// echo $z."<br>"; // z =true
// $z = $x <> $y; // z = true
// $z = $x !== $y; // z = true
// echo $z."<br>"; // z =true
// $x = $z?$x:$y; // value will be 10
// $z = $x > $y;
// echo $z."<br>";
// $z = $x < $y;
// $z = $x >= $y;
// echo $z."<br>";
// $z = $x <= $y;
// $z = $x <=> $y;
// echo $z."<br>";



// $test1 = "30";
// $test2 = 30;

// $test3 = $test1 !== $test2;

// var_dump($test3);

// ============================================
// $x = 10;
// $y = 20;

// $x += $y; // x = 30
// $y -= $y; // y = 0
// $x *= $y; // x = 0
// echo $x."<br>".$y; // echo = 0,0
// $x = $y; // x = 0
// $y /= $y; // y = 0
// $x %= $y; // 0
// echo $x."<br>".$y;



// ==============================================
echo "<br><br>";

echo "<h3>Logical Operators</h3>";
/* 
There are three types of Logical operators which are:
First is = ||, or , The second is = && , and ! (Logical NOT)
Output will be in boolean such as true and false
*/

$logical = true;
$logical1 = true;
$logical2 = false;
$logical3 = ($logical && $logical1 and $logical2); // In "and" operator total value must be true then value will be true;
var_dump($logical3); // value will be false

echo "<br>";

$logical = 30;
$logical1 = 39;
$logical2 = 0;
$logical3 = ($logical && $logical1 and $logical2);
var_dump($logical3); // value will be false

echo "<br>";

$logi1 = false;
$logi2 = true;
$logi3 = false;

$logi4 = ($logi1 || $logi2 or $logi3);

var_dump($logi4); // value will be true

echo "<br>";



// This is not operator " ! " if value true then output will be false

$not1 = true;
$not2 = false;

$not3 = !($not1 && $not1);
var_dump($not3); // value will be false

echo "<br>";

$not11 = false;
$not22 = false;

$not33 = !($not11 || $not22);

var_dump($not33); // value will be true




// ==================================================
echo "<br><br>";
echo "<h3>This is Increment/Decrement Operators</h3>";

/*
There are two types of increment and decrement operator
Which are: ++ (pre increment / post increment), -- (pre decrement / post decrement)

a++; // a = a + 1
++a; // a = 1 + a

a--; // a = a - 1
--a; // a = 1 - a

*/


// $a = 20;

// $a++; // 20
// ++$a; // 22
// echo $a; // Final print will be = 22
// echo "<br>";
// --$a; // 21
// ++$a; // 22
// echo $a; // Final value will be = 22
// echo "<br>";
// $a++; // 23
// $a--; // 22
// echo $a; // Final value will be 22
// echo "<br>";
// $a++; // 22
// --$a; // 22
// echo $a; // Final value will be 22



// Exercise ====


/*

======================================== Done
$x = 10;
$y = 20;

$x += $y;
$y -= $y;
$x *= $y;
echo $x."<br>".$y;
$x = $y;
$y /= $y;
$x %= $y;
echo $x."<br>".$y;

======================================== Done

$x = 10;
$y = 15;

$z = $x == $y;
echo $z."-<br>";
$z = $x === $y;
$z = $x != $y;
echo $z."-<br>";
$z = $x <> $y;
$z = $x !== $y;
echo $z."-<br>";
$x = $z?$x:$y;
$z = $x > $y;
echo $z."-<br>";
$z = $x < $y;
$z = $x >= $y;
echo $z."-<br>";
$z = $x <= $y;
$z = $x <=> $y;
echo $z."-<br>";

======================================== Done

$x = 11;
++$x;
echo $x++."-<br>";
--$x;$y=$x;
echo $x--."-<br>";
echo $x += $x++;
echo "-<br>".$y--."-<br>".--$y;
echo "-<br>";
echo $x -= ++$x;
echo "-<br>";

======================================== Done

$x = true;
$y = false;
$x = $x and $y;
$y = $x or $y;
$y = $x && $y;
$x = $x || !$y;
echo $x."-<br>-".$y;
echo !$x;

======================================== Done

$t1 = "asdf";
$t2 = "jkl";
echo $t1.=$t2."gh<br>";


*/




/*


There are many type of operators:

Arithmetic operators:

+ = Addition
- = Subtraction
* = Multiplication
/ = Division
% = Modulus
** = Exponentiation


Assignment Operators:
=, -=, +=, \=, %=, *=, **=



Comparison Operators:

==   => Equal
===  => Identical
!=   => Not equal
<>   => Not equal
!==  => Not identical
<    => Less than
>    => Greater than
<=   => Less than or equal to
>=   => Greater than or equal to
<=>  => Spaceship


Increment and decrement operators:
++$a  => pre increment 
$a++  => post increment 
--$a  => pre decrement
$a--  => post decrement


Logical Operators:
&&   => and operator
and  => and operator
||   => Or operator
or   => or operator
!    => Not operator



String Operators:
.   => Concatenation operator
.=  => Concatenation assignment operator


Conditional assignment operator:
?:  => Ternary operator
??  => Null coalescing


Array Operators:
+   => Union
==  => Equality
=== => Identity
!=  => Inequality
<>  => Inequality
!== => Non identity










*/




?>