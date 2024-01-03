<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


 <!--



   -->

<?php 

$a = "First";
$b = "Second";
$c = "Third";

$test = compact('a', 'b', 'c');

echo "<pre>";
print_r($test);

?>
<br><br>

<?php 

$a=1;
// $test = 0;
for($i=1; $i<=10; $i++) {
    // echo $a++ . "<br>";
    for($j=1; $j <= 10; $j++) {
        // echo $a++ . " ";
        if($a < 10) {
            $a =  0 . $a;
        } 
        echo $a++ . " ";
    }
    echo "<br>";
}


?>

    
</body>
</html>