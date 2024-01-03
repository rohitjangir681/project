<?php 
echo "<h4>This is Conditional Statements</h4>";

/*
There are many types of conditional statements:
=> if
=> if else
=> if elseif......else
=> switch
*/
// ==================================================================



/*
Leap year program
like - 2024, 2028 is a leap year,
2025... not a leap year
*/
/*
$leap = 2048;

if($leap % 4 == 0) {
  echo "It is a leap year";
} else {
  echo "It is NOTE a leap year";
}

// leap year like: 2032, 2036, 2040, 2044, 2048
*/
// ===================================================================
/*
Grade Calculation 
90 - 100 -> Your grade is A+
81 - 90 Your grade is A
71 - 80 Your grade is B

61 - 70 Your grade is C

50 - 60 Your grade is D
otherwise  Your grade is F
*/
/*
$grade = 100;

if($grade <= 100 && $grade >= 91) {
  echo "Your grades is A+";
} else if($grade <= 90 && $grade >= 81) {
  echo "Your grades is A";
} else if($grade <= 80 && $grade >= 71) {
  echo "Your grades is B";
} else if($grade <= 70 && $grade >= 61) {
  echo "Your grades is C";
} else if($grade <= 60 && $grade >= 50) {
  echo "Your grades is D";
} else {
  echo "Your grades is F";
}
*/

// for speed ==========================================
// $speed = 101;

// if($speed <= 50) {
//     echo "Safe driving speed";
// } elseif($speed > 50 && $speed <= 100) {
//     echo "You are burning extra fuel";
// } else {
//     echo "its dangerous for you";
// }

// ===================================================
// $a = 18;
// if($a >= 20) {
//     echo "You could go";
// } else {
//     echo "You can't go";
// }

// ========================================================

/*
check if a number is positive, negative, zero
if value 1 then positive 
if value -2 then negative
if value 0 then zero
*/


// $value = 20;

// if($value == 0) {
//   echo "Zero";
// } else if($value >= -0) { 
//     echo "Positive";
// } else {
//     echo "Negative";
// }

// --- Second way

// $a = -0;

// if($a == 0) {
//     echo "Zero";
// } else if ($a > 0){
//     echo "Postitive";
// } else {
//     echo "Negative";
// }


// =====================================================
// // For even number and odd number
// $num = 6;

// if($num % 2 == 0) {
//   echo "Even number";
// } else {
//   echo "odd name";
// }


// ==================================================
/*
$age = 67;

if($age < 18) {
  echo "You are a minor.";
} else if($age >= 18 && $age < 65) {
  echo "You are an adult.";
} else if($age >= 65) {
  echo "You are a senior citizen";
} else {
  echo "Invalid age";
}
*/

// ==================================================
/*
$marks = 89;

if($marks <= 33) {
  echo "Result: fail";
} else if($marks >= 34 && $marks < 50) {
  echo "Result: D grade";
} else if($marks >= 50 && $marks < 65) {
  echo "Result: C grade";
} else if($marks >= 65 && $marks < 80) {
  echo "Result: B grade";
} else if($marks >= 80 && $marks < 90) {
  echo "Result: A grade";
} else if($marks >= 90 && $marks < 100) {
  echo "Result: A+ grade";
} else {
  echo "Invalid input";
}
*/


//  =====================================================
//  1 - 50 -- 6
//  51 - 150 -- 5
//  151 - 250 - 4
//  251 - .... - 3

// $a = 251;

// if(($a >= 1) && ($a <= 50)) {
//    echo "Total amount: " . $a*6; // 300
// } else if(($a >= 51) && ($a <= 150)) {
//    echo "Total amount: " . ($a-50)*5+300; // 800
// } else if(($a >= 151) && ($a <= 250)) {
//    echo "Total amount: " . ($a-150)*4 + 800; // 1200
// } else if($a >= 251) {
//     echo "Total amount: " . ($a-250)*3+1200;
// } else {
//     echo "Last value";
// }
//  =====================================================


// echo (50*6) + (100*5) + (100*4) + (1*3); 

// echo (50*6) + (90*5); 800

// echo 150*5; // 750




// =========================================================
/*
$a = 30;
$b = 40;

if($a > $b) {
   echo "A is big";
} else {
   echo "B is big";
}
*/

// About if statements
/*
$a = 30;
$b = 20;

if($a > $b) {
  echo "A is big";
}
*/







?>