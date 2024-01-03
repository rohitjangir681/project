
<?php 


// type of variable declaration

echo "<ul>";
echo "<li><b>Valid Name for begin:</b></li>";
echo "<li>We can use => _ </li>";
echo "<li>We can use => a-z, A-Z </li>";
echo "<li>We can't use => Number</li>";
echo "</ul>";


// Valid Variable Name
print "<br> <h3>Valid Variable Name:</h3>";

echo "_name <br>";
echo "name <br>";
echo "Name <br>";
echo "name23 <br>";
echo "student_name <br>";
echo "studentName <br>";



// Invalid Variable Name
print "<h3>Invalid Variable Name:</h3>";

echo "2name <br>";
echo "name student <br>";


// Best way for variable name, you can always use it
print "<h3>Best way for variable name, you can always use it:</h3>";

# There are two main way for currect variable name:

echo "studentName <br>";
echo "student_name";



echo "<br> <h3>Data types in PHP:</h3>";
print "<p>There are 8 main data types in PHP:</p>";


$dataTypeName = "<ol>
<li>String/Varchar</li>
<li>Integer/int</li>
<li>Float/decimal/Double</li>
<li>Boolean / bool</li>
<li>Array</li>
<li>Object</li>
<li>NULL</li>
<li>Resource</li>
</ol>";

echo $dataTypeName;


// function for get data type
echo gettype($dataTypeName);


// String/Varchar Data type
echo "<h3>1. String/Varchar Data type: =></h3>";

$string = "This is String data type";
$varchar = "3045 <br>";
$string1 = $string2 = "Same value <br>";


echo $string, "<br>";
echo $varchar;
echo $string1;
echo $string2;
echo "Data type: ", gettype($string);




// Integer / int data type
print "<h3>2. Integer / int: =></h3>";

$integer = 40;

$integer1 = $int = 50;


echo $integer;
echo "<br>";
echo $integer1;
echo "<br>";
echo $int;
echo "<br>";
echo "Data type: ", gettype($integer);


// Float / Decimal / Double data type
echo "<h3>3. Float/Decimal/Double: =></h3>";

$float = 40.00;
$double = 43.50;
$decimal = 30.09;

echo $float, "<br>", $double, "<br>", $decimal, "<br>";
// echo $double;
// echo $decimal;
echo "Data type: ", gettype($float), ", ", gettype($double), ", ", gettype($decimal);


// This is boolean or bool data type
echo "<h3>4. Boolean / bool: =></h3>";

$boolean = true;
$bool = false;

var_dump($boolean);
echo "<br>";
var_dump($bool);
echo "<br>";
echo gettype($boolean), ", ", gettype($bool);



// This is array data type
echo "<h3>5. Array data type: =></h3>";

/*
Type of array:
- Indexing array
- Associative array
- MultiDimentional array
*/


// indexing array :
echo "<pre>";
$array = [10, 20, 30, 40];

$array[] = 50;

print_r($array);
echo $array[1];
echo "<br>";
echo count($array);
// echo $array[3];


// Associative array
echo "<br>";
$array1 = [
    "First Name" => "Rohit",
    "Surname" => "Jangir",
    "Class" => "PHP class",
    "Location" => "SARD"
];

print_r($array1);
// echo count($array1);
// echo $array1["First Name"];



// For MultiDimentional array

$students = [
    [
     "First student" => "Student 1",
     "Age" => "20"
    ],
    [
        "First student" => "Student 1",
        "Age" => "20"
       ]
 ];
 
 print_r($students);




// Here is NULL data type
echo "<h3>NULL data type: =></h3>";

$null = null;
var_dump($null);



// Today's revise ========================
echo "<h3>Today's Revise:</h3>";

// String/varchar data type

$ra = "This is for revise ";
$rb = "40 ";

echo $ra, $rb;
echo gettype($ra);


print "<br>";
// Float/double/decimal data type 
$r1 = 40.50;

echo $r1;
echo gettype($r1);


print "<br>";
// Integer / int data type

$r2 = 50;

echo $r2;

echo gettype($r2);


print "<br>";
// Boolean / book data type

$r3 = true;
$r4 = false;

var_dump($r3, $r4);
echo gettype($r3);


echo "<br>";
// Array data type

/* 
There are three types of array such as:
- indexing 
- Associative
- MultiDimentional
*/

// Indexing array
// - Associative array
// - MultiDimentional array


// $r5 = [10,20,30,40,50];

// print_r($r5);


// print "<br><h3>Function for php version check</h3>";

// echo phpinfo();









?>