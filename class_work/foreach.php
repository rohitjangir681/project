foreach <br><br><br>

<style>
    table, th, tr, td{
        border-collapse:collapse;
    }
</style>




<?php 



echo "<pre>";




//  -----------------------------------------------------------------------------------------------------------


// Counting Occurrences of Elements
// $items = array("Apple", "Banana", "Orange", "Apple", "Banana", "Mango", "Apple");


// $output = [
//         "Apple" => 3, 
//         "Banana" => 2,
//         "Orange" => 1,
//         "Mango" => 1
// ]

// $output = [];
// foreach($items as $_fruit) {
    
//     $output[$_fruit] = ($output[$_fruit]??0) + 1;

// }

// print_r($output);



// ----------------------------------------------------------------------------------------------------------------


// $colors = ["red", "blue", "green", "blue", "yellow", "blue", "red"];

// $targetColor = "red";

// // $output = The color blue appears 3 times;


// $a = 0;
// foreach($colors as $forBlue) {

//     if($forBlue == $targetColor) {
//         $targetColor = $forBlue;
//         $a++;
//     }
// }
// echo "The color $targetColor appears $a times";




//  --------------------------------------------------------------------------------------------------------


// Output should be: $Output : Concatenated String: Hello, world, in, PHP



// $words = ["Hello", "world", "in", "PHP"];

// $output = null;
// foreach($words as $key => $val) {
//     if($key == count($words)-1) {
//         $output.=$val;
//     } else {
//         $output.=$val . ", ";
//     }
// }

// echo "Concatenated String: $output";




//  -------------------------------------------------------------------------------------------------------

// Find the Maximum and Minimum Values in one solutions:
// Output:
// Maximum value: 88
// Minimum value: 5

// $numbers = [45, 17, 32, 88, 5, 72];




// $min = $max = $numbers[0];

// foreach($numbers as $i => $count) {
 
// if($count > $max) {
//   $max = $count;

// } 
// if($count < $min) {
//     $min = $count;

// }

// }


// echo "Maximum value: $max";
// echo "<br>";
// echo "Minimum value: $min";




//  -----------------------------------------------------------------------------------------------------------------------

/*
// Calculate Average Grades
$grades = [85, 92, 78, 88, 90];

$a = 0;
foreach($grades as $i => $count) {
   $a+=$count;
}
$average = $a/count($grades);
echo $average;
*/




//  -----------------------------------------------------------------------------------------------

// more then two array murge -----------------


// $a = [1, 2, 3, 4, 5];
// $b = [6, 7, 8, 9, 10];

// $x = [$a, $b];


// $output = [];

// for($i = 0; $i < count($x); $i++) {
//     $forInner = $x[$i];
//     for($j = 0; $j < count($forInner); $j++) {
//         $output[] = $forInner[$j];
//     }
// }

// print_r($output);

// echo "<br><br><br>--------------------------------------<br>";




// $c = [
//     [$a],
//     [$b]
// ];

// print_r($c);

// // $output = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// $output = $a;
// foreach($b as $i => $count) {
//       $output[] = $count;
// }

// print_r($output);


// $output = [];
// foreach($a as $i => $count) {
//     $output[] = $count + $b[$i];
// }

// print_r($output);





//  ----------------------------------------------------------------------------------------------------------

// $a = [1, 2, 3, 4, 5];
// $b = [6, 7, 8, 9, 10];


// // // $output = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// $output = [];
// foreach($a as $count) {
//     $output[] = $count;
// }
// foreach($b as $count) {
//     $output[] = $count;
// }
// print_r($output);




// -------------------------------------------------------------------------------------------------------------


// $input = [10, 20, "10", 30, "20", 50, 60, 10, "30"];
// $num = 10;

// // $output = 2

// $count = 0;
// foreach($input as $forTen) {
//     if($forTen === $num) {
//        $count++;
//     }
// }
// echo $count;

?>
<!------------------------------------------------------------------------------------------------------------->

<!-- <table border="1">
    <tr>
        <th></th>
        <th>Column 1</th>
        <th>Column 2</th>
        <th>Column 3</th>
        <th>Column 4</th>
    </tr> -->


<?php 

// $row_and_column = [
//     ["row_one" => "x[0][0]", "col_one" => "x[0][1]", "col_two" => "x[0][2]", "col_three" => "x[0][3]"],
//     ["row_one" => "x[1][0]", "col_one" => "x[1][1]", "col_two" => "x[1][2]", "col_three" => "x[1][3]"],
//     ["row_one" => "x[2][0]", "col_one" => "x[2][1]", "col_two" => "x[2][2]", "col_three" => "x[2][3]"]
// ];


// foreach($row_and_column as $key => $forRC) {
//     echo "<tr>";
//     echo "<td>". "Row ". $key+1 ."</td>";
//     echo "<td>". $forRC["row_one"] ."</td>";
//     echo "<td>". $forRC["col_one"] ."</td>";
//     echo "<td>". $forRC["col_two"] ."</td>";
//     echo "<td>". $forRC["col_three"] ."</td>";
//     echo "</tr>";
// }
?>

<!-- </table> -->



<!------------------------------------------------------------------------------------------------------------->

<!-- <table border="1">
    <tr>
        <th>Key</th>
        <th>Value</th>
    </tr>
 -->
<?php 

// $key_and_value = [
//     ["key" => "corn", "value" => "yellow"],
//     ["key" => "beet", "value" => "red"],
//     ["key" => "carrot", "value" => "orange"],
//     ["key" => "pepper", "value" => "green"],
//     ["key" => "broccoil", "value" => "green"]
// ];


// foreach($key_and_value as $kVal) {
//     echo "<tr>";
//     echo "<td>" . $kVal["key"] . "</td>";
//     echo "<td>" . $kVal["value"] . "</td>";
//     echo "</tr>";
// }

?>

<!-- </table> -->



<!------------------------------------------------------------------------------------------------------------->

<!-- <table border="1">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Total</th>
    <th>Links</th>
</tr> -->

<?php 

// $name_With_Price = [
//     ["name" => "Orange", "price" => 58.8, "quantity" => 1, "total" => 58.8],
//     ["name" => "Banana", "price" => 16, "quantity" => 2, "total" => 32],
//     ["name" => "Apple", "price" => 13, "quantity" => 1, "total" => 13],
//     ["name" => "WaterMelon", "price" => 88, "quantity" => 2, "total" => 176]
// ];

// foreach($name_With_Price as $key => $totalData) {
//     echo "<tr>";
//     echo "<td>". $key+1 ."</td>";
//     echo "<td>". $totalData["name"] ."</td>";
//     echo "<td>". $totalData["price"] ."</td>";
//     echo "<td>". $totalData["quantity"] ."</td>";
//     echo "<td>". $totalData["total"] ."</td>";
//     echo "<td> <a href='#'>Edit</a> | <a href='#'>View</a> | <a href='#'>Delete</a></td>";
//     echo "</tr>";
    
// }
?>

<!-- </table> -->

<!------------------------------------------------------------------------------------------------------------->



<?php 
echo "<pre>";

// ----------------------------------------------------------------------------------------



// $brands = [
//     ["name" => "Trek", "model" => "Emonda", "year" => "2017", "category" => "Hybrid", "gender" => "Unisex", 
//     "color" => "black", "weight" => "1,50"],
//     ["name" => "Cannondale", "model" => "Synapse", "year" => "2016", "category" => "Road", "gender" => "Unsix",
//     "color" => "matte black", "weight" => "1.00"]
// ];


// echo "<table border='1'>";
// echo "<tr>";
// echo "<th>ID</th>";
// echo "<th>Brand</th>";
// echo "<th>Model</th>";
// echo "<th>Year</th>";
// echo "<th>Category</th>";
// echo "<th>Gender</th>";
// echo "<th>Color</th>";
// echo "<th>Weight KG</th>";
// echo "</tr>";
// foreach($brands as $i => $_brand) {
//     echo "<tr>";
//         echo "<td>" .($i+1)."</td>";
//         echo "<td>". $_brand["name"] ."</td>";
//         echo "<td>". $_brand["model"] ."</td>";
//         echo "<td>". $_brand["year"] ."</td>";
//         echo "<td>". $_brand["category"] ."</td>";
//         echo "<td>". $_brand["gender"] ."</td>";
//         echo "<td>". $_brand["color"] ."</td>";
//         echo "<td>". $_brand["weight"] ."</td>";
    
//     echo "</tr>";
// }
// echo "</table>";


//  ----------------------------------------------------------------------------------------



// $colors = ["red", "blue", "green", "blue", "yellow", "blue", "red"];

// $targetColor = "red";

// // $output = The color blue appears 3 times;


// $a = 0;

// foreach($colors as $key => $forBlue) {

//     if($forBlue == $targetColor) {
//         $targetColor = $forBlue;
//         $a = $a+1;
//     }
// }

// echo "The color $targetColor appears $a times";




//  ---------------------------------------------------------------------------------------------

/*
$a = [
    [10, 20, 30],
    [60, 40, 50],
    [50, 10, 90]

];
$b = [
    [70, 80, 90],
    [40, 50, 60],
    [10, 20, 30]
];

// // $output = [
// //     [80, 100, 120],
// //     [100, 90, 110],
// //     [60, 30, 120]
// // ];

$output = [];
foreach($a as $i => $count) {
    foreach($count as $j => $tVal) {
       $output[$i][$j] = $a[$i][$j] + $b[$i][$j];
    }
}

print_r($output);
*/



/*
$input = [
    [10, 20, 30, 40],
    [10, 20, 30, 40],
    [10, 20, 30, 40],
    [10, 20, 30, 40]
];
// $output = [40, 80, 120, 160];

$output = [];

foreach($input as $i => $row) {
    foreach($row as $j => $column) {
        $output[$j] = ($output[$j]??0) + $column;
    }
}
print_r($output);
*/




/*
$input = [
    [10, 20, 30],
    [40, 50, 60],
    [60, 70, 80]
];
// $output = [110, 140, 170];

$output = [];
foreach($input as $i => $forCount) {
    foreach($forCount as $j => $_value) {
        $output[$j] = ($output[$j]??0) + $_value;
    }
}

print_r($output);
*/





/*
$input = [
    [10, 20, 30],
    [40, 50],
    [60, 70, 80]
];
// $output = [60, 90, 210];

// $output = [];

foreach($input as $count) {
    $totalCount = 0;
    foreach($count as $j) {
        $totalCount = $totalCount+$j;
    }
    $output[] = $totalCount;
}
print_r($output);
*/





/*
$count = [10, 10, 10, 10, 10, 10];
$output = 0;
foreach($count as $forCount) {
    $output = $output+$forCount;
}
echo $output;
*/


echo "</pre>";
?>







   
<?php
// echo "<table border='1'>"; 
// echo "<pre>";
// $num = [
//     [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
//     [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
//     [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
//     [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
// ];

// foreach($num as $nums) {
//     echo "<tr>";
//     foreach($nums as $j) {
//         $count = $j*2;
//         echo "<td>$count</td>";
//     }
//     echo "</tr>";
// }

// echo "</table>";
?>



<?php 

/*
$test = [
   "One" => ["name" => "first", "class" => "PHP 1 ", "age" => 20],
    "Two" => ["name" => "second", "class" => "PHP 2 ", "age" => 45],
    "Three" => ["name" => "third", "class" => "PHP 3 ", "age" => 32],
    "Four" => ["name" => "forth", "age" => 21, "class" => "PHP 4 "],
    "Five" => ["name" => "five", "class" => "PHP 5 ", "age" => 19]
];

foreach($test as $key => $value) {
    foreach($value as $jkey => $inner) {
        echo $inner;
    }
    echo "<br>";
}
*/




echo "<pre>";







// Class work  --------------------------



// $nos = [
//     [10, 20, 30, 40, 50],
//     [10, 20, 30, 40, 50]
// ];

// $output = [];

// foreach($nos as $i => $sVal) {
    
//     foreach($sVal as $j => $val) {
//         $output[$j] = ($output[$j]??0) + $val;
//     }
// }

// echo "<pre>";
// print_r($output);




/*
echo "<table border='1'>";
echo "<tr>";
echo "<th>Sr.</th>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "<th>Class</th>";
echo "</tr>";

$students = [
    ["name" => "Student 1", "age" => 20, "class" => "PHP 1"],
    ["name" => "Student 2", "age" => 30, "class" => "PHP 2"],
    ["name" => "Student 3", "age" => 24, "class" => "PHP 3"],
    ["name" => "Student 4", "class" => "PHP 4", "age" => 29],
    ["name" => "Student 5", "age" => 19, "class" => "PHP 5"],
];

echo "<pre>";

foreach($students as $key => $_student) {
    echo "<tr>";
    echo "<td>". ($key+1)."</td>";
    echo "<td>". $_student["name"] ."</td>";
    echo "<td>". $_student["age"] ."</td>";
    echo "<td>". $_student["class"] ."</td>";
    echo "</tr>";
    

}

echo "</table>";

// print_r($students);
*/















?>