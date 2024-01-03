<!-- 
    Mene fees 10 k jmaa ki date: 13 / 09 / 2023
    Day: Wed

    Second fees payment: 
    5,000 ru
    date: 16-11-2023
    Day:Thursday (do boys aaye hue the us din)
-->


<!--
/////
/////
/////
/////
/////
/////
/////
/////
/////
/////
/////
/////
/////
/////
/////
/////
/////
/////
/////
/////
/////
/////
/////
/////
/////
/////
/////
/////
/////

/////
/////
/////

/////
/////
/////
/////
/////
-->




<h2>This is Test page..</h2>
<?php 



class Name{
    public $a = "This is class";
    function fName() {
        $this->a = "This is";
        return $this->a;
    }
}

$name = new Name();
echo $name->fName();







// $a = "This is test";
// $a .= " Hello";
// $a .= " World";
// echo $a; 



// $a = ["one", "two", "three", "four", 4, 5];

// echo count($a); 





// ------------------------------------------------------


// $a = false;
// $b = 20;

// if($a) {
//     $b = 31;
// } else {
//     $b = 41;
// }
// echo $b;




/*
Here are some superglobals variables in PHP

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION

*/


// For $_SERVER Variable -------------------------


// echo $_SERVER['PHP_SELF'];
// echo "<br>";
// echo $_SERVER['GATEWAY_INTERFACE'];
// echo "<br>";
// echo $_SERVER['SERVER_ADDR'];
// echo "<br>";
// echo $_SERVER['SERVER_NAME'];
// echo "<br>";
// echo $_SERVER['SERVER_SOFTWARE'];
// echo "<br>";
// echo $_SERVER['SERVER_PROTOCOL'];
// echo "<br>";
// echo $_SERVER['REQUEST_METHOD'];
// echo "<br>";
// echo $_SERVER['REQUEST_TIME'];
// echo "<br>";
// echo $_SERVER['QUERY_STRING'];
// echo "<br>";
// echo $_SERVER['HTTP_ACCEPT'];
// echo "<br>";
// echo $_SERVER['HTTP_ACCEPT_CHARSET'];
// echo "<br>";
// echo $_SERVER['HTTP_HOST'];
// echo "<br>";
// echo $_SERVER['HTTP_REFERER'];
// echo "<br>";
// echo $_SERVER['HTTPS'];
// echo $_SERVER['REMOTE_ADDR'];


// echo $_SERVER['REMOTE_HOST'];

// echo $_SERVER['REMOTE_PORT'];




/*
For $GLOBALS Variable  ------------------------------

$a = 30;
$b = 25;
function add() {
    $GLOBALS["z"] = $GLOBALS["a"] + $GLOBALS["b"];
}
add();
echo $z;
*/






//  --------------------------------------------------------------------------------------------------------

// echo strlen("This is length function") . "<br>";
// echo str_word_count("This is word count function") . "<br>";
// echo strrev("This is reverse function") . "<br>";
// echo strpos("This is position function", "position");
// echo "<br>";
// echo str_replace("replace", "test", "This is replace function (replace function)");
// echo "<br>";
// $second_replace = "This is Second replace";
// echo str_replace("Second", "Rpart", $second_replace);
// echo "<br>";
// echo is_int(100); // check for integer value
// var_dump(is_int(100));
// echo "<br>";
// echo is_integer(2); // check for integer value
// var_dump(is_integer(2));
// echo "<br>";
// echo is_long(3); // check for integer value
// var_dump(is_long(3));
// echo "<br>";
// echo is_float(2.4);
// var_dump(is_float(2.4)); // check for float data type
// echo "<br>";
// echo is_double(32.4);
// var_dump(is_double(32.4));
// echo "<br>";
// var_dump(4.5e433);
// echo "<br>";
// echo is_numeric(34);
// var_dump(is_numeric(34));
// echo "<br>";
// echo intval(45);
// echo "<br>";
// echo intval("45");
// echo "<br>";
// echo (int)234.43;;

// echo "<br>";
// // Math function in php
// echo pi();
// echo "<br>";
// echo M_PI . "<br>"; 
// echo M_PI_2 . "<br>";
// echo M_PI_4 . "<br>";
// echo M_1_PI . "<br>";
// echo M_2_PI . "<br>";
// echo M_SQRTPI . "<br>";
// echo M_2_SQRTPI . "<br>";
// echo(pi()); // we also write "echo" as
// echo "<br>";
// echo max(20, 40, 50, 1) . "<br>";
// echo min(20, 30, 5, 2, -50) . "<br>";
// echo min(array(-2, 49, 5, 8)) . "<br>";
// echo abs(-11.3) . "<br>";
// echo sqrt(36) . "<br>"; // return will be 6
// echo sqrt(-36) . "<br>"; // return will be NAN
// echo sqrt(36.65) . "<br>";
// echo sqrt(0) . "<br>"; // return will be 0
// echo round(245.49) . "<br>"; // return will be 245
// echo round(245.51) . "<br>"; // return will be 246 
// echo round(0.60) . "<br>";
// echo round(0.708782, 2) . "<br>";
// echo round(-40.90) . "<br>";
// echo round(7.5,0, PHP_ROUND_HALF_EVEN) . "<br>";
// echo round(7.5,0, PHP_ROUND_HALF_ODD) . "<br>";
// echo rand(10,300) . "<br>"; // rand(min, max) it is used for random number like OTP
// echo "<br><br>";
// echo number_format(100000000,5);
// echo "<br><br>";

// $number = 1324590053.433;
// $forget = number_format($number,2);
// echo $forget;





// =========================================
// $a = 42;
// $b = 20;
// $c = $a + $b;
// echo $c . "<br>"; // 62
// $c += $a;  
// echo $c . "<br>"; // 104
// $c *= $a; 
// echo $c . "<br>"; // 4368
// $c /= $a; 
// echo $c . "<br>"; // 104
// $c %= $a;
// echo $c . "<br>"; // 20

// ========================================
// $a = 3+(3+3)**3/3-3*3;
//  ============================================
// $a = 36-2*(20+12/4*3-2*2)+10;

// / 36-2*(20+3*3-2*2)+10
// 36-2*(20+9-4)+10
// 36-2*25+10
// 36-50+10
// -14+10
// = -4

// ===================================

// 10 * (12-6) + (24-12);

// ========================================
//  10; // 45
//        
//  * 10;  // 90
//    
//  10 / 2;  // 25
//     
// / 4 - 2; // 18  
//     
// / (4 - 2); // 40
//    
// / 4 - 2;  // 8.5
//   
// ) / (4 - 2); // 9

// ===========================================
// $x = 18;
// $y = 4;
// var_dump($x + $y); // 22
// 

// var_dump($x - $y); // 14
// 

// var_dump($x * $y); // 72
// 

// var_dump($x / $y); // 4.5
// 

// var_dump($x ** $y); // 104976
// 

// var_dump(5 ** 3); //  125
// 

// var_dump(++$x); // 19


// ==============================================
// if ($x ==== 14 or $y == 13) 
//  
// if ($x == 17 xor $y == 9) 
//  
// if ($x == 17 && $y == 13) 
// 
// if ($x == 17 || $y == 14) 
//  
// if (!($x == 13)) 
// 

// ===================================================
// $a = 42;
// $b = 0;

// if( $a && $b ) {
//    : Bot "This will be called<br/>";
// }

// if( "This will be called<br/>";
// }

// if( $a || $b ) {
//    ill be called<br/>";
// }else{
//    : Bot$b ) {
//    ill be called<br/>";
// }else {
//    : Bot/ $b = 20;

// if( $a ) {
//    ill be called <br/>";
// }else {
//    : a  is false<br/>";
// }

// if( $b ) {
//    ill be called <br/>";
// }else {
//    : b  is false<br/>";
// }

// if( !$a ) {
//    : a is true <br/>";
// }else {
//    ill be called<br/>";
// }

// if( !$b ) {
//    : b is true <br/>";
// }else {
//    ill be called<br/>";
// }


// ========================================
// // Comparing Integers 
// ; // 0
// 
// ; // -1
// 
// ; // 1
// 
// // Comparing Floats
//  1.5; // 0
// 
//  2.5; // -1
// 
//  1.5; // 1
// 
// // Comparing Strings
//  "x"; // 0
// 
//  "y"; // -1
// 
//  "x"; //1



// ===============================================
// $x = "Bit "; 
// $y = "De "; 
// $z = "gree"; 
//  . $z, "\n"; // Bit de gree
// 
  
// $x .= $y . $z; 
// Bit de gree

// ===================================================
// $x = 17;
// $y = 13;
// $z = false;
  
// if ($x ==
// if ($x == 14 or $y == 13) // false or true = true
//      
//   
// if ($x == 17 xor $y == 9) // true xor false = true
//      
//   
// if ($x == 17 && $y == 13) // t 
// if ($x == 17 || $y == 14) // true or false = true
//      
//   
// if (!($x == 13))  // false = true
//     

// =======================================================
// $x = 25;
// $y = 35;
// $z = "25";
// var_dump($x == $z);  // true
// 
// var_dump($x === $z); // false
// 
// var_dump($x != $y);  // true
// 
// var_dump($x !== $z); // true
// 
// var_dump($x < $y);   // true
// 
// var_dump($x > $y);  // false
// 
// var_dump($x <= $y); // true 
// 
// var_dump($x >= $y); // false





/* Useful websites links:

https://www.w3resource.com/index.php
https://www.w3resource.com/php-exercises/php-for-loop-exercises.php
https://codeforwin.org/c-programming/for-do-while-loop-programming-exercises
https://www.tutorjoes.in/c_programming_tutorial/for_loop_pattern_examples

for nested loop could be helpful:
    https://www.dremendo.com/c-programming-tutorial/c-for-loop-questions/q11-print-all-pairs-of-two-digit-twin-prime-numbers-in-c
https://arbokraft.github.io/exercises/2016-11-19-05-MoreLoop-3D/

*/


/*
practice -------------------------

Variables Scope in PHP:
PHP has three different variable scopes:
    local 
    global
    static

Data type in PHP
   PHP has 8 data type such as :
   - string = ex: "This is string data type"
   - integer = 20
   - boolean = true and false
   - float (double) = 40.50
   - null is null
   - array = $array = [];
   - object
   - resource


   Operators in PHP -----
     Arithmetic operator
     Assignment operator
     comparison operator
     increment/decrement operator
     logical
     string
     array operator
     conditional assignment operator

Arithmetic operators:
     +
     -
     /
     %
     *
     **

Assignment operators:
     =
     +=
     -=
     *=
     %=
     /=

Comparison operators
     ==
     ===
     !=
     !==
     <
     >
     <=
     >=
     <>
     <=>

Increment/ Decrement operators:
     $a++;
     ++$a;
     $b--;
     --$b;

Logical operators:
     && and
     || or
     and
     or
     ! not
     xor
     
String operators:
     .
     .=

Array operators:
    +
    ==
    ===
    !=
    <>
    !==

Conditional assignment operators:
    ?: = Ternary
    ?? = null coalescing


Conditional statements:
    if
    if else
    if elseif else
    switch


Sorting array:
    sort();
    rsort()
    asort()
    ksort()
    arsort()
    krsort()

Loop in PHP
   for loop
   while loop
   do..while loop
   foreach loop for array





*/





// $cars = ["First Car", "Two Car", "Third Car"];
// $carsCount = [1, 2, 3, 4, 5];

// echo sizeof($carsCount);





/*
function name($a, $b) {
    $a+=$b;
    return $a;
}
echo name(10, 20);
*/



/*


// 1, 2, 3, 4, 5, 9, 10, 11, 16, 17, 18, 19, 20, 21, 22, 23, 24
// 6 7 8 / 12 13 14 15
for($i = 1; $i <= 24; $i++) {
    if($i >= 6 && $i <= 8) {
        continue;
    } elseif($i >= 12 && $i <= 15) {
        continue; 
    } elseif($i == 21) {
        break;
    }
    echo $i . " ";
}
*/





// $color_name = "black";

// switch ($color_name) {
//     case "red":
//         echo "Color is red";
//         break;
//     case "white":
//         echo "Color is White";
//         break;
//     case "green":
//         echo "Color is Green";
//         break;
//     case "black":
//         echo "Color is black";
//         break;
//     default:
//         echo "Not in Color";
// }


// $i = 1;

// while($i <= 20) {
//     if($i > 6 && $i <= 10) {
//         $i++;
//         continue;
//     } elseif($i == 16) {
//         break;
//     }
    
//     echo $i . " ";
//     $i++;
// }



// for($i = 1; $i <= 20; $i++) {
//     if($i > 6 && $i <= 10) {
//         continue;
//     } elseif($i == 16) {
//         break;
//     }
//     echo $i . " ";
// }


// $a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16];
// $output = [];

// foreach($a as $i => $num) {
//     if($a[$i] >= 5 && $a[$i] <= 9) {
//         continue;
//     } elseif($a[$i] == 15) {
//         break;
//     } 
//     $c = $num;
//     $output[] = $c;
    
// }
// echo "<pre>";
// print_r($output);

// $count = 1;
// for($i = 1; $i <= 4; $i++) {
//     for($j = 1; $j <= $i; $j++) {
//        echo $count . " ";
//        $count++;
//     }
//     echo "<br>";
// }



// for($i = 1; $i <= 5; $i++) {
//     for($j = 5; $j >= $i; $j--) {
//         echo $i . " ";
//     }
//     echo "<br>";
// }


// for($i = 5; $i >= 1; $i--) {
//     for($j = 5; $j >= $i; $j--) {
//         echo $i . " ";
//     }
//     echo "<br>";
// }




// $a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// $output = [];

// foreach($a as $for_output) {
//     $output[] = $for_output;
// }

// echo "<pre>";
// print_r($output);


// $a = 13;
// echo ($a % 2 == 0) ? "True" : "False";


// $a = [1 => "first", "second", "third", "forth", 44];



// $b = [
//     ["first", "second"],
//     ["third", "forth"]
// ];

// if(in_array(["first", "second"], $b, true)) {
//     echo "Yes";
// } else {
//     echo "No";
// }

// echo "<pre>";
// print_r($b);


// $a = ["a" => "first", "b" => "second", "c" => "third", "d" => "forth", "e" => "55"];

// echo array_search("third", $a);


// $a = false;

// if($a) {
//     echo "this is right";
// }

// ------------------------------------------------------------------------------



// echo date("d"); // day of the month
// echo date("m"); // represents a month
// echo date("Y"); //  represents a year in four digit
// echo date("d-m-Y");
// // echo date("i"); // for minutes
// echo "Today is " . date("d/m/Y") . "<br>";
// echo "Today is " . date("d-m-Y") . "<br>";
// echo "Today is " . date("d.m.Y") . "<br>";
// echo date("l"); // for day name like Monday, Sunday
// echo "Today is " . date("d.m.Y l");
// echo date("H"); // 24 hour formate of an hour
// echo date("h"); // 12 hour formate of an hour
// echo date("s"); // for second 
// echo date("a"); // ante meridiem and post meridiem (am or pm)
// echo date("h:i:sa"); // current time // hour:minute:second,am or pm
// date_default_timezone_set("Asia/Calcutta");
// echo date("h:i:sa");

// mktime(hour, minute, second, month, day, year);
// $a = mktime(10, 20, 50, 2, 12, 2020);
// echo date("Y-m-d h:i:sa", $a);

// strtotime(time, now);
// $a = strtotime("10:30pm April 15 2022");
// echo date("m-d-Y h:i:sa", $a);


// $a = strtotime("tomorrow");
// echo date("Y-m-d h:i:sa", $a) . "<br>";

// $a = strtotime("next Sunday");
// echo date("Y-m-d h:i:sa", $a) . "<br>";

// $a = strtotime("+4 Months");
// echo date("Y-m-d h:i:sa", $a);


// $a = strtotime("next Year");
// echo date("Y-m-d h:i:sa", $a);

// $startdate = strtotime("Sunday");
// $enddate = strtotime("+6 weeks", $startdate);
// while($startdate < $enddate) {
//     echo date("M d", $startdate) . "<br>";
//     $startdate = strtotime("+1 week", $startdate);
// }

// echo date("d");


// checkdate function for date check false and true
// checkdate(month, day, year);
// $a = checkdate(2, 29, 2024);
// var_dump($a);

// $a = date_create("2022-04-20");
// echo date_format($a, "Y.m.d");

// echo date("F");


// $a = "textfile.txt";
// echo readfile("textfile.txt");
// echo readfile($a);

// if(readfile("textfile.txt")) {
//     echo readfile("textfile.txt");
// } else {
//     echo "This is file Not exist";
// }


// $file = "textfile1.txt";
// if(file_exists($file)) {
//     echo readfile("textfile.txt");
// } else {
//     echo "File does not exist";
// }


// $file = "textfile.txt";

// if(file_exists($file)) {
//     // echo readfile("textfile.txt");
//     // copy($file, "textfile1.txt"); // make copy of file
//     // rename("textfile1.txt", "textfile2.txt"); // rename will file
//     // unlink("textfile2.txt"); // remove file
//     // delete("textfile2.txt") // same as unlink function, this functin will file remove
// } else {
//     echo "File is Not exist";
// }


// mkdir(); // new create folder
// if(!file_exists("newfolder")) {
//     mkdir("newfolder");
// } else {
//     echo "Folder is exist";
// }


// if(file_exists("newfolder")) {
//     rmdir("newfolder");
// } else {
//     echo "Folder does not exist";
// }













?>

<!-- Website Copyright Automatic update year -->
<!-- @ 2023 <//?= //date("Y"); ?> -->

