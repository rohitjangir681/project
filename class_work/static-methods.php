<?php 


// for namespace
// require 'traits.php';
// require 'interface.php';


// $obj = new pro\test();
// $obj1 = new pro1\test();

// ---------------------------------------------------------------





// ------------------------------------------------------------------
// class Student{
//     public function getName($nam) {
//         foreach($nam->forName() as $names) {
//             echo $names . "<br>";
//         }
//     }
// }
// class School {
//     public function forName() {
//         return ["First", "Second", "Third", "Four"];
//     }
// }

// $obj1 = new Student();
// $obj2 = new School();
// $obj1->getName($obj2);



// ------------------------------------------------------

// function sumval(array $name) {
//     foreach($name as $newname) {
//         echo $newname . "<br>";
//     }
// }

// $test = "First";
// sumval($test);




// function sum(int $n) {
//     echo $n+10;
// }

// sum("test");



// ----------------------------------------------------------------------

// This is Late method
// class First {
//     public static $name = "This is test name";
//     public function show() {
//         echo static::$name;
//         echo self::$name;
//     }
// }

// class Second extends First{
//     public static $name = "This is second name";
// }

// $test = new Second();
// $test->show();


// -----------------------------------------------------------------------


// class Table {
//     public $name = "";
//     public $rowNum;

//     public function myName() {
//         echo "This is name: $this->name and This is row: $this->rowNum";
//     }
// }

// $obj = new Table();
// $obj->name = "<b>First Name</b>";
// $obj->rowNum = 10;

// $obj->myName();


// ---------------------------------------------------------------

// class Parent3 {
//     public static $name = "This is stands for parent static";
// }

// class Newclass extends Parent3{
//     public function newFunc() {
//         return parent::$name;
//     }
// }

// $test = new Newclass();
// echo $test->newFunc();




// --------------------------------------------

// class Newclass{
//     public static $name = "This is new name";
//     public function Funct() {
//         return self::$name;
//     }
// }

// $test = new Newclass();
// echo $test->Funct();


// -------------------------------------------------

// class Newclass {
//     public static $name = "This is Properties static method";
// }

// echo Newclass::$name;


// ----------------------------------------------------------

// class Newclass {
//     protected static function welcome() {
//         echo "This is for statis method";
//     }
// }

// class Second extends Newclass{
//     public $name;
//     public function __construct(){
//         $this->name = parent::welcome();
//     }
// }

// $test = new Second();
// echo $test -> name;



// -----------------------------------------------------------

// class Newclass {
//     public static function welcome() {
//         echo "This for static method";
//     }
// }

// class Second {
//     public function seWel() {
//         Newclass::welcome();
//     }
// }
// $test = new Second();
// $test->seWel();


// -------------------------------------------------------------

// class Newclass {
//     public static function welcome() {
//         echo "This is static method";
//     }

//     public function __construct() {
//             self::welcome();
//     }

// }
// new Newclass(); 



// --------------------------------------------------
// class Classname{
//     public static function ForThis() {
//         echo "This is static method";
//     }
// }
// Classname::ForThis();





?>