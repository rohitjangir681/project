<?php 

echo "<h3>This is String Function class in PHP</h3>";


// $chopf = "This is chop function";

// echo $chopf;

// echo chop($chopf, "function")."<br>";

// $chorfirst = chr(65);
// $chorsecond = chr(66);

// echo ("2 $chorfirst 3 $chorsecond") . "<br>";

// echo ord("Bis") . "<br>";

// $newchr = chr(64) . chr(67) . chr(54) . chr(88);

// echo $newchr . "<br>";

// $neword = ord("Ab");

// echo $neword;

// ========================================






// echo strpbrk("This is strpbrk function", "s");
// echo strncmp("Hello php", "Hello function", 6);
// word wrap function:
// $name = "This is word wrap function";
// echo wordwrap($name, 3, "<br>", true);
// ucwords function
// echo ucwords("this is uppercase function");
// echo ucfirst("this is first character uppercase");
// echo strtr("Thmr is strtr function", "mr", "is");
// echo strrchr("Hello world What a beautiful day", "world");


// ========================================


// // icfirst(); // Converts the first character of a string to lowercase
// echo lcfirst("This is lowercase function");
// print "<br>";
// echo $ic = "Converts The First Character Of A String To Lowercase <br>";
// echo lcfirst($ic);



// print "<br>";
// // ucfirst(); // Converts the first character of a string to uppercase
// echo ucfirst("this is uppercase function");
// print "<br>";
// echo $up = "converts the first character of a string to uppercase <br>";
// echo ucfirst($up);


// echo "<br>";
// // ucwords(); Converts the first character of each word in a string to uppercase
// echo ucwords("this is uppercase for each word function <br>");
// echo $ucwords = "converts the first character of each word in a string to uppercase <br>";
// echo ucwords($ucwords);



// // strtoupper(); Converts a string to uppercase
// echo "<br>";
// echo $strtoup = "converts a string to uppercase <br>";
// echo strtoupper($strtoup);


// // strtolower(); converts a string to lowercase
// echo "<br>";
// echo $strtolow = "CONVERTS A STRING TO UPPERCASE <br>";
// echo strtolower($strtolow);


// // trim(); Removes whitespace or other predefined characters from both sides of a string  
// echo "<br>";
// echo $fortrim = " Removes whitespace or other predefined characters ";
// echo "<br>";
// echo trim($fortrim);


// // ltrim();  Removes whitespace or other characters from the left side of a string
// echo "<br><br>";
// echo $forltrim = " Removes whitespace from the left side ";
// echo "<br>";
// echo ltrim($forltrim);


// // rtrim(); Removes whitespaces or other predefined characters from the right side of a string
// echo "<br><br>";
// echo $forrtrim = " Removes whitespace from the right side ";
// echo "<br>";
// echo rtrim($forrtrim);


// // number_format(); Formats a number with grouped thousands
// echo "<br><br>";
// echo $fornumber = 2304043434;
// echo "<br>";
// echo number_format($fornumber);
// echo "<br><br>";
// echo $fornumber2 = 343432.5433;
// echo "<br><br>";
// echo number_format($fornumber2, 2);
// echo "<br><br>";
// echo $fornumber3 = 3289023;
// echo "<br>";
// echo number_format($fornumber3, 2);
// # other examples
// echo "<br><br>";
// $num = 2999.9;

// $formatNum = number_format($num) . "<br>";
// echo $formatNum;

// $formatNum = number_format($num, 2);
// echo $formatNum;


// // strlen(); Returns the lenght of a string, it will count with space
// echo "<br><br>";
// $forstrlen = "This is string lenght function";

// echo $forstrlen;
// echo "<br>";
// echo strlen($forstrlen);


// // str_word_count(); Count the number of words in a string
// echo "<br><br>";
// $forstrcount = "This is string word count function";
// echo $forstrcount;
// echo "<br>";
// echo str_word_count($forstrcount);



// // substr(); Returnts a part of string
// echo "<br><br>";
// // Positive numbers:
// echo $forsubstr = "This is substr function";
// echo "<br>";
// echo substr($forsubstr, 0, 13), "...";
// // Negative numbers:
// echo "<br>";
// echo $forsubstrn = "This is substr function for negative numbers";
// echo "<br>";
// echo substr($forsubstrn, -10);


// // substr_compare(); Compares two strings from a specified start position 
// echo "<br><br>";
// echo substr_compare("Hello world Test Test", "Hello world Test", 0);


// echo "<br><br>";
// // substr_count(); Counts the number of times a substring occurs in a string

// $forsubcount = "This is this substr count function this function This is this";

// echo substr_count($forsubcount, "this");
// echo "<br>";
// $forsubcount1 = "This is this is second example this This is this";
// echo strlen($forsubcount1);
// echo "<br>";
// echo substr_count($forsubcount1, "this", 9);



// // substr_replace(); Replaces a part of a string 
// echo "<br><br>";

// echo substr_replace("This is substr replace function", "This is replace", 0);
// echo "<br>";
// echo substr_replace("Hello world", "earth", 6);


// echo "<br><br>";
// // strpos(); Returns the position of the first occurrence of a string inside another string 

// // echo strpos("This is strpos function", "is");
// $forsubpos = "This is strpos function";

// echo strpos($forsubpos, "strpos");


// echo "<br><br>";
// // strrpos(); find the position of the last occurrence of php inside the string

// echo strrpos("This is right position of the last", "is");
// echo "<br>";
// echo strrpos("Right is right, right is Right", "right");


// echo "<br><br>";
// // stripos();  Find the position of the first occurrence of php inside the string

// echo stripos("I love php, I love php too", "php");


// echo "<br><br>";
// // strripos(); Case-insensitive , 

// echo strripos("This class of php class, php class is this", "php");




// echo "<br><br>";
// // strrev(); Reverses a string
// $strrev = "I would like to reverse this string";
// echo strrev($strrev);



// echo "<br><br>";
// // strtolower(); 

// $strtolower = "This Is Strtolower Function";

// echo strtolower($strtolower);
// echo "<br>";
// echo ucfirst(strtolower($strtolower));
// echo "<br>";


// echo "<br><br>";
// // for new exercise

// $lastdemo = "THIS IS LAST DEMO FOR THIS";
// echo strtolower($lastdemo);
// echo "<br>";
// $lastdemo1 = strtolower($lastdemo);
// echo ucfirst($lastdemo1);


// // str_replace(); 

// echo "<br><br>";

// $domain = "www.domain1.com";

// echo str_replace("ww.domain1", "dom", $domain);


// // is_int();
// echo "<br><br>";

// $age = 20;

// // echo is_int($age);

// var_dump(is_int($age));


// // abs, round, floor, ceil functions
// echo "<br><br>";
// $price = 20344.64;

// echo abs($price);
// echo "<br>";
// echo round($price);
// echo "<br>";
// echo floor($price);
// echo "<br>";
// echo ceil($price);


// echo "<br><br>";

// echo max(10, 30, 5, 45);
// echo "<br>";
// echo min(10, 30, 5, 45);

// echo "<br><br>";

// echo number_format(13453.55, 4);

// echo "<br><br>";

// echo sqrt(25);

// echo "<br><br>";

// echo rand(100, 999);


// echo "<br><br><h2>Today class is:</h2>";

// $addcslashes = "Hello world again hello world";

// echo addcslashes($addcslashes, "w")."<br>";
// echo addcslashes($addcslashes, "a..z")."<br><br>";

// // stripslashes()

// echo "This i\s strip function";
// echo stripslashes("This i\s strip function")."<br><br>";

// echo addslashes('This is "addslashes" function');

// echo "<br><br>";
// // bin2hex() ================

// $binhex = "This is binhex function";

// echo $hexbin = bin2hex($binhex);
// echo "<br>";
// echo hex2bin($hexbin);

























?>