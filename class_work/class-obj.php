<?php 





abstract class Car {
    function forName() {
        echo "This is righr";
    }
}

// $test = new Car();







// ---------------------------------------------------------------------------

// class Classname{
//     const NEW_NAME = "This is new constant class";
//     function newname() {
//         echo self::NEW_NAME;
//     }
// }

// $test = new Classname();
// $test->newname();


// class Classnem {
//     const NEW_CONST = "This is constant class";
// }

// $test = new Classnem();
// echo $test::NEW_CONST;



// ----------------------------------------------------------------------------

// Properties Overrding and Methods Overrding

// class First {
//     public $name = "This is test name";
//     public function addnumber($a, $b) {
//         return $a * $b;
//     }
// }
// class Second extends First {
//     // public $name = "This is Second name";
//     function addnumber($a, $b) {
//         return $a + $b;
//     }
// }
// $test = new Second();
// echo $test->addnumber(5, 10);


// ---------------------------------------------------------------------------------------------

// class Employee{
//     public $name;
//     public $age;
//     public $salary;

//     function __construct($n, $a, $s)
//     {
//         $this->name = $n;
//         $this->age = $a;
//         $this->salary = $s;
//     }

//     function info() {
//         echo "Name: " . $this->name . "<br>";
//         echo "Name: " . $this->age . "<br>";
//         echo "Name: " . $this->salary . "<br>";
//     }
// }

// class Manager extends Employee {
//     public $ta = 1000;
//     public $phone = 300;
//     public $totalSalary;
    
//     function info() {
//         $this->totalSalary = $this->salary + $this->ta + $this->phone;

//         echo "Name: " . $this->name . "<br>";
//         echo "Name: " . $this->age . "<br>";
//         echo "Name: " . $this->totalSalary . "<br>";
//     }
// }

// $test = new Manager("Rohit", 25, 20,000);

// $test->info();


// -------------------------------------------------------------------------

// class Oneclass {
//     protected $name;
//     function __construct($n) {
//         $this->name = $n;
//     }
//     private function myName() {
//         echo "Call for: $this->name <br>";
//     }
// }

// class Seclass extends Oneclass {
//     function secondFun() {
//         echo "Second Function: " . $this->name;
//     }
// }
// $test = new Seclass("This is name");
// // $test->myName();
// echo "<br>";
// $test->secondFun();
// echo "<br>";
// // echo $test->name;





// ------------------------------------------------------------------------

// class Fruit{
//     public $name;
//     public $color;

//     public function __construct($nam, $col) {
//         $this->name = $nam;
//         $this->color = $col;
//     }

//     function __destruct() {
//         echo "The fruit is {$this->name} and color is {$this->color}";
//     }
// }
// $apple = new Fruit("Apple", "Red");



// ------------------------------------------------------------------

// class Fruit{
//     public $name;
//     public function __construct($nam) {
//         $this->name = $nam;
//     }

//     function __destruct() {
//         echo "This fruit is {$this->name}";
//     }
// }
// $apple =  new Fruit("Apple");


// -----------------------------------------------------------------

// class Fruit {
//     public $name;
//     public $color;
//     public $weight;
//     function __construct($nam, $col, $wei = "No Weight") {
//         $this->name = $nam;
//         $this->color = $col;
//         $this->weight = $wei;
//     }

//     // get name
//     function get_name() {
//         return $this->name;
//     }

//     // get color
//     function get_color() {
//         return $this->color;
//     }

//     // get weight
//     function get_weight() {
//         return $this->weight;
//     }

// }

// // for apple
// $apple = new Fruit("Apple", "Red", 20);
// echo "Name: " . $apple->get_name();
// echo "<br>";
// echo "Color: " . $apple->get_color();
// echo "<br>";
// echo "Weight:" . $apple->get_weight() . "Kg";

// echo "<br>---------------------------------<br>";
// // for banana
// $banana = new Fruit("Banana", "Yellow", 30);
// echo "Name: " . $banana->get_name();
// echo "<br>";
// echo "Color: " . $banana->get_color();
// echo "<br>";
// echo "Weight:" . $banana->get_weight() . "Kg";


// ----------------------------------------------------------------------

// class Fruit{
//     public $name;
//     function set_name($nam) {
//         $this->name = $nam;
//     }
//     function ge_name() {
//         return $this->name;
//     }
// }
// $apple = new Fruit();
// $banana = new Fruit();
// var_dump($banana instanceof Fruit);


// -----------------------------------------------------------------------

// class Fruit{
//     public $name;
//     public $color;
//     public $weight;
//     public $price;

//     // set name and get name
//     public function set_name($nam) {
//         $this->name = $nam;
//     }
//     public function get_name() {
//         return $this->name;
//     }

//     // set color and get color
//     function set_color($col) {
//         $this->color = $col;
//     }
//     function get_color() {
//         return $this->color;
//     }

//     // set weight and get weight
//     public function set_weight($wei) {
//         $this->weight = $wei;
//     }
//     function get_weight() {
//         return $this->weight;
//     }

//     // set price and get price
//     function set_price($pri) {
//         $this->price = $pri;
//     }
//     function get_price() {
//         return $this->price;
//     }

// }

// // for apple 
// $apple = new Fruit();
// $apple->set_name("Apple");
// $apple->set_color("Red");
// $apple->set_weight("5");
// $apple->set_price("120");

// // for banana
// $banana = new Fruit();
// $banana->set_name("Banana");
// $banana->set_color("Yellow");
// $banana->set_weight("20");
// $banana->set_price("50");

// // for apple
// echo "Name: " . $apple->get_name();
// echo "<br>";
// echo "Color: " . $apple->get_color();
// echo "<br>";
// echo "Weight: " . $apple->get_weight() . " Kg";
// echo "<br>";
// echo "Price: " . "Rs." . $apple->get_price();
// echo "<br>-----------------------------<br>";
// // for banana
// echo "Name: " . $banana->get_name();
// echo "<br>";
// echo "Color: " . $banana->get_color();
// echo "<br>";
// echo "Weight: " . $banana->get_weight() . " Kg";
// echo "<br>";
// echo "Price: " . "Rs." . $banana->get_price();



// -----------------------------------------------------------------------------

// class Fruit {
//     public $name;
//     public function set_name($nam) {
//         $this->name = $nam;
//     }

//     public function get_name() {
//         return $this->name;
//     }
// }

// $apple = new Fruit();
// $banana = new Fruit();
// $mango = new Fruit();
// $pineapple = new Fruit();

// $apple->set_name("Apple");
// $banana->set_name("Banana");
// $mango->set_name("Mango");
// $pineapple->set_name("Pine Apple");


// echo $apple->get_name();
// echo "<br>";
// echo $banana->get_name();
// echo "<br>";
// echo $mango->get_name();
// echo "<br>";
// echo $pineapple->get_name();



// --------------------------------------------------------------------

// class Getset{

//     public $name;

//     function set_name($na, $sur) {
//         $this->name = $na . $sur;
//     }
//     function get_name() {
//         return $this->name;
//     }
// }

// $forSet = new Getset();
// $forSet->set_name("My Name", " - SurName");
// echo $forSet->get_name();


// --------------------------------------------------------------------------

// class Newclass {
//     public $a;

//     function __construct($n) {
//         $this->a = $n;
//     }
//     public function forLoop() {
//         $output = "";
//         for($i=1; $i<=$this->a; $i++) {
//             for($j=1; $j<=$i; $j++) {
//                 $output.="*" . " ";
//             }
//             $output.="<br>";
//         }
//         return $output;
//     }
// }
// $newCreate = new Newclass(5);
// echo $newCreate->forLoop();



// ----------------------------------------------------------------------------------

// class Forconstr {
//     // function __construct() {
//     //     echo "This is for construct function";
//     // }

//     function test() {
//         echo "This is for test";
//     }
// }

// $newst = new Forconstr();
// $newst->test();


// ----------------------------------------------------------------------------------

// class Pyramid 
// {
//     public $count=0;

//     function __construct($no)
//     {
//         $this->count = $no;
//     }

//     public function stOne() 
//     {
//         $output="";
//         for($i=1; $i<= $this->count; $i++) {
//             for($j=1; $j<=$i; $j++) {
//                 $output.=$j." ";
//             }
//             $output.="<br>";
//         }
//         return $output;
//     }

//     public function stTwo() 
//     {
//         $output = "";
//         for($i=1; $i<=$this->count; $i++) {
//             for($j=1; $j <= $i; $j++) {
//                 $output.=$i. " ";
//             }
//             $output.="<br>";
//         }
//         return $output;
//     }


//     // This is for understanding
//     // function __destruct() {
//     //     $this->count = 0;
//     //     echo $this->count;
//     // }

// }

// $stObj1 = new Pyramid(5);
// $stObj2 = new Pyramid(10);

// echo $stObj1->stOne()."<br>--------------<br>";
// echo $stObj2->stOne()."<br>--------------<br>";

// echo $stObj1->stTwo()."<br>--------------<br>";
// echo $stObj2->stTwo();

// echo "<br>--------------<br>";

// echo $stObj1->stOne();



?>