<?php
// Array
// Indexed Array
// Assiciative Array
// Multidimesional Array

// $nums = array();
// $nums = [
//     10, 
//     20, 
//     30
// ];
// // // echo $nums[0];
// echo "<pre>";
// print_r($nums);

// unset($nums[1]);

// $nums[]= 40;
// $nums[5]= 50;

//print_r($nums);





// $nums = [
//     [10, 20, 30],
//     [30, 40]
// ];

// //echo $nums[0][1], $nums[1][0];
// echo "<pre>";
// print_r($nums);

// unset($nums[0][2]);
// print_r($nums[0]);

$nums = [
    10, 
    20, 
    30
];

for($i = 0; $i < count($nums); $i++)
{
    echo $nums[$i]." ";
}

// 60
// echo sizeof($nums);
// echo count($nums);

//  ------------------------------------------------------


// $a = [10, 20, 30, 40];
// $b = [40, 50, 60, 60];

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

?>