Function <br><br><br>





<style>
    table, td, tr,th{
        border-collapse:collapse;
        text-align:center;
        padding:10px;
    }
    .for_css{
        height:40px;
        width:40px;
        /* background-color:#000;  */
    }
    .test{
      background-color:#FED7CF;
    }
</style>



<?php 







function starTwoShape($n) {

  $forAdd = "";
  for($i = 1; $i <= $n; $i++) {
    for($j = 1; $j <= $i; $j++) {
      $forAdd .= "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    for($j = $n; $j >= $i; $j--) {
      $forAdd .= "X ";
    }
    $forAdd .= "<br>";
  }
  for($i = 1; $i <= $n-1; $i++) {
    for($j = 1; $j <= $n; $j++) {
      $forAdd .= "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    for($j = 1; $j <= $i+1; $j++) {
      $forAdd .= "X ";
    }
    $forAdd .= "<br>";
  }
return $forAdd;
}

echo starTwoShape(5);






//  -----------------------------------------------------------------------------------

/*
   
   *                       *
      *                  *
         *            *
            *      *
               **
*/


// function straShape($n) {
//   $forAdd = "";
//   for($i = 1; $i <= $n; $i++) {
//     for($j = 1; $j <= $i; $j++) {
//       $forAdd .= "&nbsp;&nbsp;&nbsp;";
//     }
//     for($j = 1; $j <= 1; $j++) {
//       $forAdd .= "* ";
//     }
//     for($j = 8; $j >= $i*2-1; $j--) {
//       $forAdd .= "&nbsp;&nbsp;&nbsp;";
//     }
//     for($j = 1; $j <= 1; $j++) {
//       $forAdd .= "*";
//     }
//     $forAdd .= "<br>";
//   }
//   return $forAdd;
// }

// echo straShape(5);



//  ---------------------------------------------------------------------------------
/*
0  0  0  0  0  0  0  0  
  1  1  1  1  1  1  1  
    1  1  1  1  1  1  
      1  1  1  1  1  
       1  1  1  1  
         1  1  1  
        1  1  
          1  
          0  
         0  0  
       0  0  0  
      0  0  0  0  
     0  0  0  0  0  
   0  0  0  0  0  0  
  0  0  0  0  0  0  0  
1  1  1  1  1  1  1  1  

*/


// function oneTotwo($n) {
//   $forAdd = "";
//   for($i = 1; $i <= $n; $i++) {
//     for($j = 2; $j <= $i; $j++) {
//       $forAdd .= "&nbsp;&nbsp;";
//     }
//     for($j = $n; $j >= $i; $j--) {
//       if($i == 1) {
//         $forAdd .= "0 &nbsp";
//       } else {
//         $forAdd .= "1 &nbsp";
//       }
//     }
//     $forAdd .= "<br>";
//   }

//   for($i = 1; $i <= $n; $i++) {
//     for($j = $n-1; $j >= $i; $j--) {
//       $forAdd .= "&nbsp;&nbsp;";
//     }
//     for($j = 1; $j <= $i; $j++) {
//       if($i != $n) {
//         $forAdd .= "0 &nbsp;";
//       } else {
//         $forAdd .= "1 &nbsp;";
//       }
//     }
//     $forAdd .= "<br>";
// }
// return $forAdd;
// }
// $n = 9;
// echo oneTotwo($n);


//  ----------------------------------------------------------------------------------
/*
0  0  0  0  0  0  0  0  
  1  1  1  1  1  1  1  
    1  1  1  1  1  1  
      1  1  1  1  1  
        1  1  1  1  
          1  1  1  
            1  1  
              1  
*/

// function twoNumber($n) {
//   $forAdd = "";
//   for($i = 1; $i <= $n; $i++) {
//     for($j = 2; $j <= $i; $j++) {
//       $forAdd .= "&nbsp;&nbsp;";
//     }
//     for($j = $n; $j >= $i; $j--) {
//       if($i == 1) {
//         $forAdd .= "0 &nbsp;";
//       } else {
//         $forAdd .= "1 &nbsp;";
//       }
//     }
//     $forAdd .= "<br>"; 
//   }
//   return $forAdd;
// }

// echo twoNumber(8);



//  ---------------------------------------------------------------------------------------

/*
        A
      A B A
    A B C B A
  A B C D C B A
A B C D E D C B A

*/
//   My way  -----------------------------
// function abcPyramid($n) {
  
//   $forAdd = "";
//   for($i = 1; $i <= $n; $i++) {
//     $alpha = 65;
//     for($j = $n-1; $j >= $i; $j--) {
//       $forAdd .= "&nbsp;&nbsp;&nbsp;&nbsp;";
//     }
//     for($j = 1; $j <= $i; $j++) {
//       $forAdd .= chr($alpha) . " ";
//       $alpha++;
//     }
//     $alpha = 65;
//     for($j = 2; $j <= $i; $j++) {
//       $count = $alpha + $i - $j;
//       $forAdd .= chr($count) . " ";
//     }
//     $forAdd .= "<br>";
//   }
//   return $forAdd;
// }

// echo abcPyramid(5);


// The other way which is taken form internet  ---
// function print_pattern($num) {
//   for ($i = 1; $i <= $num; $i++) {
//   for($k = $num; $k > $i; $k-- ) {
//   echo "";
//   }
//   for($j = 1; $j <= $i; $j++ ) {
//   echo chr(64+$j)." ";
//   }
//   for($j = $i-1; $j >= 1; $j-- ) {
//   echo chr(64+$j)." ";
//   }
//   echo "<br>";
//   }
//   }
//   $num = 5;
//   print_pattern($num);



//  -----------------------------------------------------------------------
/*
A
B A
C B A
D C B A
E D C B A
*/

// function reverseABC($n) {
//   $reverseCount = "";
//   $alpgha = 65;
//   for($i = 1; $i <= $n; $i++) {
//     for($j = 1; $j <= $i; $j++) {
//       $count = $alpgha + $i - $j;
//       $reverseCount .= chr($count) . " ";
//     }
//     $reverseCount .= "<br>";
//   }
//   return $reverseCount;

// }

// echo reverseABC(5);



//  -------------------------------------------------------------------------------------

/*
F E D C B A
F E D C B A
F E D C B A
F E D C B A
F E D C B A
F E D C B A
*/

// function reverseABC($n) {
//   $addCount = " ";
//   for($i = 1; $i <= $n; $i++) {
//     $alpha = 70;
//     for($j = 1; $j <= $n; $j++) {
//        $addCount .= chr($alpha) . " ";
//        $alpha--;
//     }
//     $addCount .= "<br>";
//   }
//   return $addCount;
// }
// echo reverseABC(6);




//  ---------------------------------------------------------------------------------------
/*
A
B G
C H M
D I N S
E J O T Y
F K P U Z _
*/

// function aTozShape($n) {
//   $add = " ";
//   for($i = 1; $i <= $n; $i++) {
//     $alpha = 64;
//     $temp = $i;
//     for($j = $i; $j >= 1; $j--) {
//       $add .= chr($alpha + $temp) . " ";
//       $temp = $temp + 5;
//     }
//     $add .= "<br>";
//   }
//   return $add;
// }

// echo aTozShape(6);


//  ---------------------------------------------------------------------------------------

// function forTable($n) {
//   $tableData = "<table border='1'>";
//   $count = 1;
//   $tableData .= "<th>Name</th>";
//   $tableData .= "<th>Last Name</th>";
//   $tableData .= "<th>Math</th>";
//   $tableData .= "<th>Science</th>";
//   $tableData .= "<th>Biology</th>";
//   $tableData .= "<th>English</th>";
//   $tableData .= "<th>Hindi</th>";
//   $tableData .= "<th>Class</th>";
//   $tableData .= "<th>Marks</th>";
//   $tableData .= "<th>Precent</th>";
//   for($i = 1; $i <= $n; $i++) {
//     $tableData .= "<tr>";
//     for($j = 1; $j <= $n; $j++) {
//        if($count%2 ==0) {
//         $tableData .= "<td class='test'>$count</td>";
//        } else {
//         $tableData .= "<td>$count</td>";
//        }
//         $count++;
//     }
//     $tableData .= "</tr>"; 
//   }
//   $tableData .= "</table>";
//   return $tableData;
// }

// echo forTable(10);



//  ------------------------------------------------------------------------
// function forTable($n) {

//   $tableData = "<table border='1'>";
//   for($i = 1; $i <= $n; $i++) {
//     $tableData .= "<tr>";
//     for($j = 1; $j <= $n; $j++) {
//       $count = $i*$j;
//         $tableData .= "<td>$count</td>";
//     }
//     $tableData .= "</tr>"; 
//   }
//   $tableData .= "</table>";
//   return $tableData;
// }

// echo forTable(10);



//  --------------------------------------------------------------------------------
/*
  A B C D E F G
   A B C D E F
    A B C D E
     A B C D
      A B C
       A B
        A
       A B
      A B C
     A B C D
    A B C D E
   A B C D E F
  A B C D E F G

*/

// function forAbc($n) {
//    $forPrint = " ";
//   for($i = 1; $i <= $n; $i++) {
//     $p = 65;
//     for($j = 1; $j <= $i; $j++) {
//       $forPrint .= "&nbsp;&nbsp;";
//     }
//     for($j = $n; $j >= $i; $j--) {
//       $forPrint .= chr($p) . " ";
//       $p++;
//     }
//     $forPrint .= "<br>";
//   }
//   for($i = 2; $i <= $n; $i++) {
//     $p = 65;
//     for($j = $n; $j >= $i; $j--) {
//       $forPrint .= "&nbsp;&nbsp;";
//     }
//     for($j = 1; $j <= $i; $j++) {
//       $forPrint .= chr($p) . " ";
//       $p++;
//     }
//     $forPrint .= "<br>";
//   }
//   return $forPrint;
// }

// echo forAbc(7);








//  ---------------------------------------------------------------------------------------------
/*
A B C D E F
A B C D E
A B C D
A B C
A B
A
*/

// function triangle($n) {
//        $saveData = ""; 
//     for($i = 1; $i <= $n; $i++) {
//         $p = 65;
//         for($j = $n; $j >= $i; $j--) {
//             $saveData .= chr($p) . " ";
//             $p++;
//         }
//         $saveData .= "<br>";
//     }
//     return $saveData;
// }

// echo triangle(6);



//  -------------------------------------------------------------------------------------
/*
             A
           A B C
         A B C D E
       A B C D E F G
     A B C D E F G H I
   A B C D E F G H I J K
*/

// function forAbcd($n) {
//     $saveData = " ";
//     for($i = 1; $i <= $n; $i++) {
//         $p = 65;
//         for($j = $n; $j >= $i; $j--) {
//             $saveData .= "&nbsp;&nbsp;&nbsp;";
//         }
//         for($j = 1; $j <= $i*2-1; $j++) {
//             $saveData .= chr($p) . " ";
//             $p++;
//         }
//         $saveData .= "<br>";

//     }
//     return $saveData;
// }

// echo forAbcd(6);

//  --------------------------------------------------------------------------------------------
/*
A
A B C
A B C D E
A B C D E F G
A B C D E F G H I
A B C D E F G H I J K
*/


// function forAbcd($n) {
//     $saveData = " ";
//     for($i = 1; $i <= $n; $i++) {
//         $p = 65;
//         for($j = 1; $j <= $i*2-1; $j++) {
//             $saveData .= chr($p) . " ";
//             $p++;
//         }
//         $saveData .= "<br>";

//     }
//     return $saveData;
// }

// echo forAbcd(6);

//  ----------------------------------------------------------------------------------
/*
     A
    B C
   D E F
  G H I J
 K L M N O
P Q R S T U
*/

// function forAbcd($p) {
//     $Total = " ";
//     for($i = 1; $i <= 6; $i++) {
//         for($j = 6; $j >= $i; $j--) {
//             $Total .= "&nbsp;&nbsp;";
//         }
//         for($j = 1; $j <= $i; $j++) {
//             $Total .= chr($p) . "&nbsp;&nbsp;";
//             $p++;
//         }
//         $Total .= "<br>";
//     }
//     return $Total;
// }

// echo forAbcd(65);



//  -------------------------------------------------------------------------------------------
// Electricity Unit function
//  1 - 50 -- 6
//  51 - 150 -- 5
//  151 - 250 - 4
//  251 - .... - 3

// function unitAmountCheck($unit) {
//     if(($unit >= 1) && ($unit <= 50)) {
//         $count = $unit*6;
//     } elseif(($unit >= 51) && ($unit <= 150)) {
//         $count = ($unit-50)*5+300;
//     } elseif(($unit >= 151) && $unit <= 250) {
//         $count = ($unit-150)*4+800;
//     } elseif($unit >= 251) {
//         $count = ($unit-250)*3+1200;
//     } 
//     return $count;

// }

// $totalAmount = unitAmountCheck(251);

// echo "Total Amount: ".$totalAmount;


//  ---------------------------------------------------------------------------------

/*
1
1 2 3
1 2 3 4 5
1 2 3 4 5 6 7
*/

// function oneTonext($n) {
//     $forPrint = " ";
//     for($i = 1; $i <= $n; $i++) {
//         for($j = 1; $j <= $i*2-1; $j++) {
//             $forPrint .= $j . " ";
//         }
//         $forPrint .= "<br>";
//     }
//     return $forPrint;
    
// }

// echo oneTonext(4);


//  ----------------------------------------------------------------------------------------------

/*
*                 *
* *             * *
* * *         * * *
* * * *     * * * *
* * * * * * * * * *
* * * *     * * * *
* * *         * * *
* *             * *
*                 *

*/


// function forFourShapes($n) {  // function for this shape
//      $addTotal = " ";
//     for($i = 1; $i <= $n; $i++) {
//         for($j = 1; $j <= $i; $j++) {
//             $addTotal .= "* ";
//         }
//         $space = 2*($n-$i);
//         for($j = 1; $j <= $space; $j++) {
//             $addTotal .= "&nbsp;&nbsp;&nbsp;";
//         }
//         for($j = 1; $j <= $i; $j++) {
//             $addTotal .= "* ";
//         }
//         $addTotal .= "<br>";
//     }
    
//     for($i = $n-1; $i >= 1; $i--) {
//         for($j = 1; $j <= $i; $j++) {
//             $addTotal .= "* ";
//         }
//         $space = 2*($n-$i);
//         for($j = 1; $j <= $space; $j++) {
//             $addTotal .= "&nbsp;&nbsp;&nbsp;";
//         }
//         for($j = 1; $j <= $i; $j++) {
//             $addTotal .= "* ";
//         }
//         $addTotal .= "<br>";
//     }

// return $addTotal;

// }

// echo forFourShapes(5);



// $n = 5;
// for($i = 1; $i <= $n; $i++) {
//     for($j = 1; $j <= $i; $j++) {
//         echo "* ";
//     }
//     $space = 2*($n-$i);
//     for($j = 1; $j <= $space; $j++) {
//         echo "&nbsp;&nbsp;&nbsp;";
//     }
//     for($j = 1; $j <= $i; $j++) {
//         echo "* ";
//     }
//     echo "<br>";
// }

// for($i = $n-1; $i >= 1; $i--) {
//     for($j = 1; $j <= $i; $j++) {
//         echo "* ";
//     }
//     $space = 2*($n-$i);
//     for($j = 1; $j <= $space; $j++) {
//         echo "&nbsp;&nbsp;&nbsp;";
//     }
//     for($j = 1; $j <= $i; $j++) {
//         echo "* ";
//     }
//     echo "<br>";
// }








//  ----------------------------------------------------------------

// function newShape($n) {
//     $num = " ";
//     for($i = 1; $i <= $n; $i++) {
//         $a = 1;
//         for($j = 1; $j <= $i; $j++) {

//             $num .= $a . " ";
//             $a = $a*($i - $j) / $j;
//         }
//         $num .= "<br>";
//     }
//     return $num;

// }

// echo newShape(5);

// $n = 5;


// for($i = 1; $i <= $n; $i++) {
//     $a = 1;
//     for($j = 1; $j <= $i; $j++) {
//         echo $a . " ";
//       $a = $a * ($i - $j) / $j;
//     }
//     echo "<br>";
// }



//  ----------------------------------------------------------------------------------


//  ---------------------------------------------------------------------------------------

// function pyramid($n) {
//     $emp = " ";
//      for($i = 1; $i <= $n; $i++) {
//         for($j = $n-1; $j >= $i; $j--) {
//             $emp .= "&nbsp;&nbsp;&nbsp;";
//         }
//         for($j = 1; $j <= $i*2-1; $j++) {
//             $emp .= "* ";
//         }
//         $emp .= "<br>";
//      }
//      return $emp;
// }

// echo pyramid(5);



//  ---------------------------------------------------------------------------------


// function number($n) {
//     $num = 1;
//     $a = "";
//     for($i = 1; $i <= $n; $i++) {
//         $a .= $num . "<br>";
//         $num*=11;
//     }
//     return $a;
// }
// $total = number(5);

// echo $total;


// $n = 5;
// $a = 1;
// for($i = 1; $i <= $n; $i++) {
//     echo $a;
//     $a = $a*11;
//     echo "<br>";
// }




//  ------------------------------------------------------------------------------------------

// function pyramid($n) {
//     // $star = "";
//     for($i=1; $i<=$n; $i++) {
//         for($j=1; $j <= $i; $j++) {
//             echo "* ";
//         }
//         echo "<br>";
//     }
//     return;
// }

// echo pyramid(5);


//  -----------------------------------------------------------------------------------------------
/*
-> Write a function called isEven that takes an integer as a parameter and returns true if the number is even, 
and false otherwise.
*/

// function isEven($n) {
//     $isEven = false;
//     if($n%2==0) {
//         $isEven = true;
//     } 
//     return $isEven;
// }

// $evenOrOdd = isEven(16);

// var_dump($evenOrOdd);




//  ---------------------------------------------------------------------------------------------------------

/*
-> Write a function called isPrime that checks if a given number is prime and returns true if it is, 
or false if it's not.

2, 3, 5, 7, 11, 13, 17, 19, 23, 29
*/ 


// function isPrime($n) {
//     $forPrime = true;
//     for($i = 2; $i < $n; $i++) {
//         if($n % $i == 0) {
//           $forPrime = false;
//           break;
//         }
//     }
//     return $forPrime;
// }

// $primeOrnot = isPrime(17);

// var_dump($primeOrnot);



//  ----------------------------------------------------------------------------------------------------------


/*
-> Write a function called calculateBMI that calculates the BMI (Body Mass Index) of a person given their weight in 
kilograms and height in meters. The formula for BMI is BMI = weight (kg) / (height (m) * height (m)).
*/



// function calculateBMI($weight, $kg) {

//     $BMI = $weight / ($kg * $kg);
//     return "BMI = " . $BMI;

// }

// $totalBMI = calculateBMI(78, 1.52);

// echo $totalBMI;



//  ---------------------------------------------------------------------------------------
//  ---------------------------------------------------------------------------------------

// function newTable($n) {

//     $forTable = "<table border='1'>";
//      $count = "";
//     for($i = 1; $i <= 10; $i++) {
//         $forTable = "<tr>";
//         for($j = 1; $j <= 10; $j++) {
//             $forTable = "<td>$count</td>";
            
//             $count++;
//         }
//         $forTable = "</tr>";
//     }

//     $forTable = "</table>";
//     return $count;

// }

// echo newTable(10);

// // echo $printTable;





//  ------------------------------------------------------------------------------


// function prime($n) {
//     $forPrime = true;
//     for($i = 2; $i < $n; $i++) {
//         if($n % $i == 0) {
//             $forPrime = false;
//             break;
//         } 
//     }
//     if($forPrime) {
//         echo "Prime Number: $n";
//     } else {
//         echo "Not Prime Number: $n";
//     }

// }

// prime(12);


//  -------------------------------------------------------------------------------------

// function forTable($n) {
//     $saveData = "<table border='1'>";
//     for($i = 1; $i <= $n; $i++) {
//         $saveData .= "<tr>";
//         for($j = 1; $j <= $n; $j++) {
//             $total = $i+$j;
//             if($total % 2 == 0) {
//                 $saveData .= "<td class='for_css'></td>";
//             } else {
//                 $saveData .= "<td></td>";
//             }
//         }
//         $saveData .= "</tr>";
//     }
//     $saveData .= "</table>";
//     return $saveData;

// }

// $tablePrint = forTable(10);

// echo $tablePrint;






//  -----------------------------------------------------------------------------------
// function primeNumber() {
//     $n = 100;
//     $total = "";
//     for($i=2; $i<=$n; $i++) {
//       $isNumber = true;
  
//         for($j=2; $j<$i; $j++) {
//             if($i%$j == 0) {
//                 $isNumber = false;
//                 break;
//             }
//         }
//         if($isNumber) {
//             $total .= $i . " ";
//         }
//     }
//     return $total;
//     echo "<br>";

// }

// $sub = primeNumber();

// echo $sub;



//  -----------------------------------------------------------------------

// function forLoop() {
//     $total = "";
//     for($i = 1; $i <= 10; $i++) {
//         $total = $total . $i . " ";
//     }
//     return $total;
// }

// echo forLoop();


//  ---------------------------------------------------------------------

// function number($a, $b) {
//     $n = $a + $b . "<br>";
//     return $n;
// }


// echo "5 + 14 = " . number(5, 14);
// echo "35 + 10 = " . number(35, 10);
// echo "20 + 20 = " . number(20, 20);
// echo "100 + 10 = " . number(100, 10); 



//  ---------------------------------------------------------------------

// function height($height=57 . " Default height") {
//     echo "Height is: $height<br>";
// }

// height(34);
// height();
// height(45);
// height(66);


//  ------------------------------------------------------------------------
// function numbers($t, $a, $b) {
//     return $t . $a + $b;
// }

// echo numbers("total: ", 5, "30");


//  ----------------------------------------------------------------------

// function name($name) {
//     echo "$name NAME <br>";
// }

// name("First");
// name("Second");
// name("Third");
// name("Forth");
// name("Fifth");


// -----------------------------------------------------------------------

// function number($math, $sc, $eng) {

//     $n = $math + $sc + $eng;

//     return $n;

// }

// function percentage($str) {
//     $str /= 3;
//     return $str . "%";
// }


// $total = number(64,50,70);
// echo $total . "<br>";

// $tNumber = percentage($total);
// echo $tNumber;

//  -----------------------------------------------------------------------------------

// function name1($fName, $sName) {
//     $a = "This is $fName and $sName <br>";
//     return $a;
// }

// $n = name1("First", "Second");
// echo $n;

// $nTwo = name1("Rohit", "Jangir");
// echo $nTwo;


//  -----------------------------------------------------------------------------

// function number($a, $b) {
//     $n = $a+$b;
//     echo $n;
// }

// $first = 30;
// $second = 25;

// number($first, $second);



//  --------------------------------------------------------------------

// function name($fName="Empty", $sName="empty2") {
//     echo "$fName $sName";
// }

// name("First");


//  -----------------------------------------------------------------------

// function hello($first, $second) {
//     echo "This is $first and $second <br>";
// }

// hello("First name", "Second name");

// hello("Rohit", "Jangir");


// ---------------------------------------------------------------------------

// function hello($fName, $fname2) {
//     echo "This is $fName function $fname2";
// }

// hello("Replace One", "replace two");

// -------------------------------------------------------------------------------

// function hello($name) {
//     echo "This is $name Function";
// }

// hello("Replace");


// -----------------------------------------------------------------------------
// function sum($a, $b, $c, $d) {
//     $n = $a*$b/$c%$d;
//     echo $n;
// }

// sum(45, 23, 43, 21);


//  ---------------------------------------------------------------------------
// function sum($a, $b, $c, $d) {
//     $n = $a+$b+$c-$d;
//     echo $n;
// }

// sum(5, 6, 10, 9);


// ----------------------------------------------------------------------------
// function sum($a, $b) {
//     $n = $a - $b;
//     $x = $a+$b;
//     echo $n . "<br>";
//     echo $x . "<br>"; 
// }

// sum(10, 3);

// sum(7, 6);



//  ---------------------------------------------------------------------------
// function sum($a, $b) {
//     $n = $a + $b;
//     echo $n . "<br>";
// }

// sum(5,15);
// sum(20, 40);


//  ------------------------------------------------------------------------------------
// function hello() {
//     echo "Hello world 1 <br>";
// }

// function hello2() {
//     echo "Second P <br>";
// }

// hello();
// hello();
// echo "Test <br>";
// hello();
// hello2();
// hello();

?>