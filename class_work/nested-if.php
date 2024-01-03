<h3>Nested If else Statement:</h3>

<?php











// ====== Today's Task  ==========================================

/*
For weights under 5 kg: $5 for the US, $10 for Canada, $15 for other countries.
For weights 5 kg or more: $10 for US, $20 for Canada, $30 for other countries.

The shipping cost to {$destination} for a {$weight}-kg package is {$shippingCost}.";
*/

// $weight = 3;
// $destination = "canada";



// if($weight < 5) {
//     if($destination == "US") {
//         $shippingCost = "$5";
//     } else {
//         if($destination == "Canada") {
//             $shippingCost = "$10";
//         } else {
//             $shippingCost = "$15";
//         }
//     }
// } else {
//     if($weight >= 5) {
//         if($destination == "US") {
//             $shippingCost = "$10";
//         } else {
//             if($destination == "Canada") {
//                 $shippingCost = "$20";
//             } else {
//                 $shippingCost = "$30";
//             }
//         }
//     }
// }


// echo "The shipping cost to $destination for a $weight-kg package is $shippingCost.";




// Is given task to me ============================================================
/*
$age = ?
$isMember = yes/no

age >= 65
 then discount = 15% (input this value in discount variable)
 
otherwise 
     age > 18 and isMember = yes
     then discount = 10%
     otherwise
     discount = 0%

Output: You are eligible for a (discount variable value) discount

*/

// second way , first way below  ----------------------
// $age = 20;
// $isMember = "no";

// if($age >= 65) {
//     $discount = "15%";
// } else {
//     if($age > 18 && $isMember == "yes") {
//         $discount = "10%";
//     } else {
//         $discount = "0%";
//     }
// }

// echo "You are eligible for a $discount discount";


// first way ----------------------------------------


// $age = 37;
// $isMember = "yes";

// if($age >= 65) {
//     echo "Discount: 15%";
// } else {
//     if($age > 18) {
//         if($isMember == "yes") {
//             echo "Discount: 10%";
//         } else {
//             echo "Discount: 0%";
//         }
//     } else {
//         echo "You are not eligible";
//     }
// }


echo "<br><br>";
//  Is given task to me =======================================================================

// december, january, february == It's winter
// march, april, may == It's spring
// june, july, august == It's Summer
// september, october, november  == It's autumn (fall)
// Invalid input. Please enter a valid month.

// $month = "august";

// if($month == "december" || $month == "january" || $month == "february") {
//    echo "It's Winter";
// } elseif($month == "march" || $month == "april" || $month == "may") {
//     echo "It's Spring";
// } elseif($month == "june" || $month == "july" || $month == "august") {
//     echo "It's Summer";
// } elseif ($month == "september" || $month == "october" || $month == "november") {
//     echo "It's autumn (fall)";
// } else {
//     echo "Invalid input. Please enter a valid month.";
// }



// =======================================================================


echo "<br><br>";
// // For big Value


// $a = 50;  // 50
// $b = 60;  // 40
// $c = 70;  // 30
// $d = 80;  // 20
// $e = 10;  // 10

// if($a > $b) {
//     if($a > $c) {
//         if($a > $d) {
//             if($a > $e) {
//                 echo "A is big 1";
//             } else {
//                 echo "E is big 1";
//             }
//         } else {
//             if($d > $e) {
//                 echo "D is big 1";
//             } else {
//                 echo "E is big 2";
//             }
//         }
//     } else {
//         if($c > $d) {
//             if($c > $e) {
//                 echo "C is big 1";
//             } else {
//                 echo "E is big 3";
//             }
//         } else {
//             if($d > $e) {
//                 echo "D is big 2";
//             } else {
//                 echo "E is big";
//             }
//         }
//     }
// } else {
//     if($b > $c) {
//         if($b > $d) {
//             if($b > $e) {
//                 echo "B is big 1";
//             } else {
//                 echo "E is big 4";
//             }
//         } else {
//             if($d > $e) {
//                 echo "D is big 3";
//             } else {
//                 echo "E is big";
//             }
//         }
//     } else {
//         if($c > $d) {
//             if($c > $e) {
//                 echo "C is big 2";
//             } else {
//                 echo "E is big 11";
//             }
//         } else {
//             if($d > $e) {
//                 echo "D is big 1d";
//             } else {
//                 echo "E is big 11e";
//             }
//         }
//     }
// }






// $u = 60; // 60
// $v = 70; // 50
// $w = 80; // 40 -
// $x = 30; // 30
// $y = 20; // 20
// $z = 10; // 10

// if($u > $v) {
//     if($u > $w) {
//         if($u > $x) {
//             if($u > $y) {
//                 if($u > $z) {
//                     echo "U is big 1";
//                 } else {
//                     echo "Z is big 1";
//                 }
//             } else {
//                 if($y > $z) {
//                     echo "Y is big 1";
//                 } else {
//                     echo "Z is big 2";
//                 }
//             }
//         } else {
//             if($x > $y) {
//                 if($x > $z) {
//                     echo "X is big 1";
//                 } else {
//                     echo "Z is big 3";
//                 }
//             } else {
//                 echo "Y is big 2";
//             }
//         }
//     } else {
//         if($w > $x) {
//             if($w > $y) {
//                 if($w > $z) {
//                     echo "W is big 1";
//                 } else {
//                     echo "Z is big 4";
//                 }
//             } else {
//                 echo "Y is big 3";
//             }
//         } else {
//             echo "X is big 2";
//         }
//     }
// } else {
//     if($v > $w) {
//         if($v > $x) {
//             if($v > $y) {
//                 if($v > $z) {
//                     echo "V is big (last one)";
//                 } else {
//                     echo "Z is big (last one)";
//                 }
//             } else {
//                 echo "Y is big (last one)";
//             }
//         } else {
//             echo "X is big (last one)";
//         }
//     } else {
//         echo "W is big (last one)";
//     }
// }





echo "<br><br>";






// $a = 50;
// $b = 60;
// $c = 70;
// $d = 20;

// if($a > $b) {
//     if($a > $c) {
//         if($a > $d) {
//             echo "A is big 1"; 
//         } else {
//             echo "D is big 1";
//         }
//     } else {
//         echo "C is big 1";
//     }
// } else {
//     if($b > $c) {
//         if($b > $d) {
//             echo "B is big 1";
//         } else {
//             echo "D is big 2";
//         }
//     } else {
//         echo "C is big 2";
//     }
// }



// $a = 20; // 20
// $b = 10; // 30
// $c = 40; // 40

// if($a < $b) {
//     if($a < $c) {
//         echo "A is small 1";
//     } else {
//        echo "C is small 1";
//     }
// } else {
//     if($b < $c) {
//         echo "B is small 1";
//     }
// }






?>