Array <br><br><br>

<!-- There are three types of array -->

<style>
    table,tr,td{
        border-collapse:collapse;
        padding:5px;
    }
</style>

<?php 
// 1. Indexed Arrays
// 2. Associative Arrays
// 3. Multidimensional Arrays

echo "<pre>";
// $color = ["a" => "yellow", "b" => "red", "c" => "green", "d" => "blue"];
// $color1 = ["a" => "yellow", "b" => "red", "c" => "green", "d" => ""];
// $output = array_diff($color, $color1);
// print_r($output);


// $a = [10, 20, 30, 40];
// $b = [40, 50, 60, 60];
// // output: 50, 70, 90, 100


// $c = [];
// for($i = 0; $i < count($a); $i++)
// {
//     $c[]= $a[$i] + $b[$i];
// }

// echo "<pre>";
// print_r($c);





// $c = [50, 70, 90]

// $a = [
//     [10, 20, 30, 40],
//     [50, 60, 70, 80]
// ];
// // // $c = [60, 80, 100, 120, 90]
// // echo "<pre>";

// // echo "---------------------------";
// $c = [];
// for($i = 0; $i < count($a); $i++)
// {
//     $sVal = $a[$i];
//     for($j = 0; $j < count($sVal); $j++)
//     {
//         //echo $a[$i][$j]." ";
//         $c[$j]= ($c[$j]??0) + $a[$i][$j];
//     }
//     //break;
// }
// print_r($c);







/*
$countArrayValues = ["A", "Dog", "Cat", "A", "Dog"];
$countValue = array_count_values($countArrayValues);
print_r($countValue);
*/


/*
$combineArray = ["First", "Second", "Third"];
$combineArray1 = ["F name", "S name", "T name"];
$combine = array_combine($combineArray, $combineArray1);
print_r($combine);
*/


/*
$columnArray = [
    ["First" => "For First", "Second" => "another first"],
    ["First" => "For Second", "Second" => "another second"],
    ["First" => "For Third", "Second" => "another third"]

];
$getValue = array_column($columnArray, "Second");
print_r($getValue);
*/



/*
$chunkArray = ["First", "Second", "Third", "Forth", "Fifth", "Six", "Seven", "Eight"];
$forChunk = array_chunk($chunkArray, 3);
print_r($forChunk);
*/



/* Case change for different keys ----------------------
$name = ["a" => "first", "b" => "second", "C" => "third", "D" => "forth", "E" => "FIVE"];
$forFun = array_change_key_case($name, CASE_UPPER);
print_r($forFun);
*/


/*
Change to LOWER Case  -------------------------------------
$age = ["FIRST" => 20, "SECOND" => 44, "THIRD" => 65];
print_r(array_change_key_case($age,CASE_LOWER));
*/



/* Chenge to UPPER Case -----------------------------
$age = ["first" => 35, "second" => 43, "third" => 30];
$new = array_change_key_case($age, CASE_UPPER);
print_r($new);
*/


//  ----------------------------------------------------------------------------------

// $num = [20 => 2, 3, 4, 5, 6];

// print_r($num);

// // ---
// print_r(array_combine(range(20, 25),range(2,7)));



//  ---------------------------------------------------------------------------------------------





//  --------------------------------------------------------------------------------------------

// $input = [100, 90, 80, 70, 60];
// // // //         0   1   2  3   4
// // // // $output = [10, 20, 30, 40, 60];
// echo implode(" ", $input); echo "<br><br>";
// echo "<pre>";
// $n = count($input);
// for($i=0; $i < $n-1; $i++) // 4
// {
//     for($j=0; $j < $n-1; $j++)
//     {
//         if($input[$j] > $input[$j+1])
//         {
//             $temp = $input[$j+1];
//             $input[$j+1] = $input[$j];
//             $input[$j]= $temp;
//             //print_r($input);
//             //echo implode(" ", $input); echo "<br>";
//         }
//     }
//     //echo "--------<br>";
//     //print_r($input);
// }

// print_r($input);



    // // $output = [60, 40, 30, 20, 10];
    // for($i=0; $i < $n-1; $i++) {
    //     for($j=0; $j< $n-1; $j++)
    //     {
    //         if($input[$j] < $input[$j+1]){
    //             $temp= $input[$j+1];
    //             $input[$j+1] = $input[$j];
    //             $input[$j]= $temp;
    //         }
    //     }

    // }
    // print_r($input);




//  -----------------------------------------------------------------------------------------------------------

// $input = [
//     [11, 21, 30],
//     [10, 20, 30],
//     [10, 20, 30],
//     [10, 20, 30]
// ];
// // // output : 40, 80, 120


// $output = [];

// for ($i = 0; $i < count($input[0]); $i++) {
//     $total = 0;
//     for ($j = 0; $j < count($input); $j++) {
//        $total += $input[$j][$i];
//     }
//     $output[] = $total;
// }

// print_r($output);



//  -------------------------------------------------------------------------------------------------


// $input = [
//     [10, 20, 30],
//     [40, 50, 60],
//     [60, 70, 80]
// ];

// // output : 110, 140, 170

// $output = [];

// $n = count($input);

// for ($i = 0; $i < $n; $i++) {
//     $total = 0;
//     for ($j = 0; $j < $n; $j++) {
//        $total += $input[$j][$i];
//     }
//     $output[] = $total;
// }

// print_r($output);





//  --------------------------------------------------------------------------------------------

// $input = [
//     [10, 20, 30],
//     [40, 50],
//     [60, 70, 80]
// ];

// // // // $output = [60, 90, 210];


// $output = [];
// for($i = 0; $i < count($input); $i++) {
//     $forInner = $input[$i];
//     $total = 0;
//     for($j = 0; $j < count($forInner); $j++) {
//         $total = $total + $forInner[$j] . " ";
//     }
//     $output[] = $total;
// }

// print_r($output);



// -------------------------------------------------------------------------------------------------





// $a = [1, 20, 11, 8, 3];
// $b = [10, 2, 5, 10, 0];








//  -------------------------------------------------------------------------------------------------

// $india = [
//     [10, 20],
//     [30, 40],
//     [50, 60]
// ];


// // print_r($india);



// // echo $india[1][1];

// $countFor = count($india);


// for($i = 0; $i < $countFor; $i++) {
//     $innerLoop = $india[$i];
//     for($j = 0; $j < count($innerLoop); $j++) {
//         // echo $innerLoop[$j];
//         echo $india[$i][$j];
//     }
//     echo "<br>";
// }


//  -------------------------------------------------------------------------------------------------------

// $states = ["Rajasthan", "Gujrat", "Haryana", "Punjab"];

// $countValue = count($states);

// for($i = 0; $i < $countValue; $i++) {
//     echo $i ." ". $states[$i];
//     echo "<br>";
// }



// --------------------------------------------------------------------------------------------------------

// $cars = ["First Car ", "Second Car ", "Third Car"];

// echo $cars[0];
// echo $cars[1];
// echo $cars[2];



// --------------------------------------------------------------------------------------------------------------------
// function for small value in array  ---------------------------------


// function smallValue($input) {
    
//     $smallVal = $input[0];

//     for($i = 0; $i < count($input); $i++) {
//         if($input[$i] < $smallVal) {
//             $smallVal = $input[$i];
//         }
//     }
//     return $smallVal;
// }

// $a = [5, 6, 20, 44, 1, 21];

// echo smallValue($a);



//  function for biggest value in array  ---------------------------------------



// function getBigValue($input) {

//     $saveValue = $input[0];

//     for($i = 0; $i < count($input); $i++) {
//         if($input[$i] > $saveValue) {
//             $saveValue = $input[$i];
//         }
//     }
//     return $saveValue;
// }

// $a = [43, 5, 32, 67, 23, 92];

// echo getBigValue($a);




// // for small value ----------------------------

// $input = [11, 7, 55, 45, 44, 2, 57];


// $smallValue = $input[0];

// for($i = 0; $i < count($input); $i++) {
//     if($input[$i] < $smallValue) {
//         $smallValue = $input[$i];
//         // echo $smallValue . " ";
//     } 
// }
// echo $smallValue;


// ----
// ----


// for biggest value ----------------------


// $input = [60, 70, 55, 45, 90, 105];
// //         0  1  2   3   4   5
// // output 45

// $forOutput = $input[0];

// for($i = 0; $i < count($input); $i++) {
//     if($input[$i] > $forOutput) {
//         $forOutput = $input[$i];
//         echo $forOutput . " ";
//     } 
    
// }

// echo $forOutput;





//  ------------------------------------------------------------------------------------------------------
// $num = [
//     [10,20,30],
//     [40,50,60]
// ];

// for($i = 0; $i < count($num); $i++) {
//     $total = $num[$i];
//     for($j = 0; $j < count($total); $j++) {
//         // echo $total[$j] . " ";
//         echo $num[$i][$j];
//         echo "<br>";
//     }
// }


// $num = [
//     [10,20,30],
//     [40,50,60]
// ];

// // print_r($num);

// for($i = 0; $i < count($num); $i++) {
//     $total = $num[$i];
// }
// print_r($total);



//  ---------------------------------------------------------------------------------

// $students = [
//     "Name" => "Rohit",
//     "Class" => "PHP Student",
//     "Year" => "2023",
//     "Qualification" => "Whatever"
// ];

// echo "<pre>";
// // print_r($students);



// $Student = [
//     "One" => [
//         "First" => "1 name",
//         "Class" => "1 class",
//         "year" => "1 2023"
//     ],
//     "Two" => [
//         "Second" => "2 name",
//         "class" => "2 class",
//         "year" => "2 2023"
//     ],
//     [
//         "Third" => "3 name",
//         "class" => "3 class",
//         "year" => "3 2023"
//     ]
// ];


// print_r($Student);
// echo "</pre>";


// --------------------------------------------------------------------------
// $checkForDataType = [];

// print_r($checkForDataType);


//  -------------------------------------------------------------------------

// $num = [
//     15,
//     20,
//     40
// ];
// $total = 0;
// for($i = 0; $i < count($num); $i++) {
//     $total += $num[$i];
// }

// echo $total; // reuslt will be 75



//  ----------------------------------------------------------
//  ---  loop in arrays  ------------------------------


// echo sizeof($num);
// echo count($num);


// $num = [
//     10,
//     20,
//     30,
//     40
// ];

// echo "<pre>";
// print_r($num);

// for($i = 0; $i < count($num); $i++) {
//     echo $num[$i] . " ";
// }


//  --------------------------------------------------

// $num = [
//     [10, 20],
//     [30, 40],
//     [50, 60],
//     [70, 80]
// ];


// echo "<pre>";
// // $num[] = 70;
// // $num[1][]= 70;

// unset($num[3][1]);

// print_r($num);


//  -------------------------------------------------
//  --  how to remove value --

// $num = [
//     10,
//     20,
//     30,
//     40
// ];

// echo "<pre>";
// unset($num[1]);
// print_r($num);


//  ---------------------------------------------------------------------
//  How to add value in arrasy

// $num = [
//     10,
//     20,
//     30,
//     40
// ];

// echo "<pre>";
// $num[] = 50;
// $num[2] = 50;
// $num["Name"] = "Here Will be name";
// print_r($num);

//  -----------------------------------------------------------------------
//  ------------   Multidimensional arrays  ----------------------

// $num = [
//     [20, 30],
//     [40, 50],
//     [40, 50]  
// ];

// echo "<pre>";
// print_r($num);

// ------------------------------------------------------------------------
// -----   Associative Arrays   -------------------

// $num = [1=>10, 20, 30];
// echo "<pre>";
// print_r($num);



//  ------------------------------------------------------------------------
// ------   Indexed Arrays   ------
// $num = [10, 20, 30];
// echo "<pre>";
// print_r($num);


// $input = [
//     [10, 20, 30],
//     [40, 50],
//     [60, 70, 80]
// ];
// // $output = [60, 90, 210];
// $c = [10];
// for ($i=0; $i < count($input); $i++) { 
//     $sum = 0;
//     $sVal = $input[$i];
//     for ($j=0; $j < count($sVal); $j++)
//     { 
//         $sum+= $input[$i][$j];
//     }
//     $c[] = $sum;
// }
// echo "<pre>";
// print_r($c);

//  --------------
// // echo "---------------------------";

// $a = [
//     [10, 20, 30, 40],
//     [50, 60, 70, 80]
// ];
// $c = [];
// for($i = 0; $i < count($a); $i++)
// {
//     $sVal = $a[$i];
//     for($j = 0; $j < count($sVal); $j++)
//     {
//         //echo $a[$i][$j]." ";
//         $c[$j]= ($c[$j]??0) + $a[$i][$j];
//     }
//     //break;
// }
// print_r($c);






// Task for array -----------------------------------------------------------------------------------------


// $a = [
//     [10, 20, 30],
//     [60, 40, 50],
//     [50, 10, 90]

// ];
// $b = [
//     [70, 80, 90],
//     [40, 50, 60],
//     [10, 20, 30]
// ];



// // $output = [
// //     [80, 100, 120],
// //     [100, 90, 110],
// //     [60, 30, 120]
// // ];

// $output = [];
// for($i = 0; $i < count($a); $i++) {
//     $value = $a[$i];
//     for($j = 0; $j < count($value); $j++) {

//       $output[$i][$j] = $a[$i][$j] + $b[$i][$j];
     
//     }
// }

// print_r($output);

//  --------------------------------------------------------------------------------------------------------



// $name = [
//     ["F name","S name","T name","4 name"],
//     ["2 Class","2 Class","2 Class","2 Class"],
//     ["3 name","3 name","3 name","3 name"],
//     ["4 name","4 name","4 name","4. name"]
// ];

// // print_r($name);


// echo "<table border='1'>";
// for($i = 0; $i < count($name); $i++) {
//     $total = $name[$i];
//     echo "<tr>";
//     for($j = 0; $j < count($total); $j++) {
//         echo "<td> " .$name[$i][$j] . "</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";

// ternonary operator

//  ---------------------------------------------------------------------------------------------------

/*
$output = [
    [2, 4, 6, 8, 10, 12, 14, 16, 18, 20],
    [3, 6, 9, 12, 15, 18, 21, 24, 27, 30],
    [4, 8, 12, 16, 20, 24, 28, 32, 36, 40]
];
*/

// $x = 1;
// for($i = 0; $i < 3; $i++) {
//     $x+=1;
//     for($j = 1; $j <= 10; $j++) {
//         $a[$i][] = $j*$x;
//     }
// }
// print_r($a);








?>