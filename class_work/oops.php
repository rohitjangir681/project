<?php 




// class A{
//     private $name = "This is name";

//     function hay() {
//         return "Hello: $this->name";
//     }

//     public function __get($namedddd) {
//         return "This is private proprties: $namedddd";
//     }
// }

// $test = new A();
// echo $test->hay();
// echo "<br>";
// echo $test->name;



// ----------------------------------------------------------------

// class Newclass {
//     public function first() {
//         echo "This is first function";
//         return $this;
//     }

//     public function second() {
//         echo "This is second function";
//         return $this;
//     }

//     public function third() {
//         echo "This is third function";
//     }
// }

// $test = new Newclass();
// echo $test->first()->second()->third();



// ------------------------------------------------------------------------------


// class Newclass {
//     public function first() {
//         $a = "This is first function <br>";
//         return $a;
//     }

//     public function second() {
//         $a = "This is second function <br>";
//         return $a;
//     }

//     public function third() {
//         $a = "This is third function ";
//         return $a;
//     }
// }

// $test = new Newclass();
// $print = $test->first().$test->second().$test->third();

// echo $print;



// ------------------------------------------------------------------

// class value{
//     public $a;
//     public $b;
//     public $c;
//     function __construct($name = "No name", $age ="No age") {
//         $this->a = $name;
//         $this->b = $age;
//     }

//     function forPrint() {
//         $this->c = $this->a . " -- " . $this->b;
//         return $this->c;
//     }
// }


// $newforit = new value("First name", 20);
// $newforit1 = new value("Second name", 22);
// $newforit2 = new value("Third name", 32);

// echo $newforit->forPrint() . "<br>";
// echo $newforit1->forPrint() . "<br>";
// echo $newforit2->forPrint();




// -------------------------------------------------------------------------

// class nameAge {
//     public $name = "No name";
//     public $age = "No age";

//     function forName() {
//         return $this->name . " -- " . $this->age;
//     }
// }

// $newCreate = new nameAge();

// // $newCreate->name = "This is name";
// $newCreate->age = 30;
// echo $newCreate->forName();


// --------------------------------------------------------------------

// class forSum {
//     public $a;

//     function __construct($n) {
//         return $this->a = $n;
//     }

//     function forSum() {
//         return $this->a;
//     }
// }

// $newClass = new forSum("Construct function");
// $newClass->a = "This is a variable";
// echo $newClass->forSum();


// ----------------------------------------------------------------------------

// class forname{
//     public $name, $second;
//     function for_Name() {
//         return $this->name;
//     }
//     function forSecond() {
//         return $this->second;
//     }
// }

// $asign = new forname();
// $asign->name = "This is name";
// echo $asign->for_Name();
// echo "<br>";
// $other = new forname();
// $other->second = "Second Value";
// echo $other->forSecond();


// -----------------------------------------------------------
// class newCreate{
//     public $a, $b;
//     function __construct($m, $v) {
//         $this->a = $m;
//         $this->b = $v;

//     }
// }

// $fornew = new newCreate("first", 2);

// echo $fornew->a . "\n";
// echo $fornew->b;


// --------------------------------------------------------------


// class calculation{
//     public $a, $b, $z;

//     function first() {
//         $this->z = $this->a + $this->b;
//         return $this->z;
//     }

//     function second() {
//         $this->z = $this->a - $this->b;
//         return $this->z;
//     }
// }

// $c = new calculation();

// $c->a = 20;
// $c->b = 10;

// echo $c->first();
// echo "<br>";
// echo $c->second();
// echo "<br>--------------------------<br>";

// $x = new calculation();

// $x->a = 40;
// $x->b = 50;

// echo $x->first();
// echo "<br>";
// echo $x->second();



/*----------------------------------------------------------------------------------------------*/
// ----------------------- MY CLASS --------------------------------------------------------
// $no = ["a" => "AAA", "b" => "BBB", "c" => "CCC"];

// echo "<pre>";

// print_r($no);

// echo "<br>---------------<br>";
// $no = json_encode($no);
// $no = json_decode($no);

// echo $no->b . "<br>";

// print_r($no);
// echo "<br>---------------<br>";

// $no = (array)$no;
// print_r($no);


// class Student {
//     function __construct() {
//         echo "This is construct function ";
//     }
//     function hello() {
//         return "This is Hello function " . $this->for_data();
//     }
//     protected function for_data() {
//         return " This is for_data function";
//     }
//     function __destruct() {
//         echo " This is destruct function";
//     }
// }

// $student = new Student();
// echo $student -> hello();
// echo "<br>";
// echo $student -> for_data();





?>