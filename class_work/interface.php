<?php


// in interface we cannto use properties and we cannto use object
// we have to use in thid method there are two keywords such as : intereface and implements 


// this is for namespace file name: traits.php and static-methods.php
namespace pro1;
class test{
    public function __construct() {
        echo "This is first class";
    }
}




// -----------------------------------------------------------------------
// class Newclass{
//     public $a;
//     function __construct($n)
//     {
//         $this->a = $n;
//     }

//     function fornew() {
//         return $this->a;
//     }
// }

// class newfo extends Newclass{

// }
// $test = new newfo("This is ");
// echo $test->fornew();





// ---------------------------------------------------------------------------

// // interface 
// interface Animal {
//     public function makeSound();
// }

// // Car class
// class Cat implements Animal {
//     function makeSound()
//     {
//         echo "Meow";
//     }
// }

// // Dog class
// class Dog implements Animal {
//     function makeSound()
//     {
//         echo "Bark";
//     }
// }

// // Mouse class
// class Mouse implements Animal {
//     function makeSound() {
//         echo "Squeak";
//     }
// }

// $cat = new Cat();
// $dog = new Dog();
// $mouse = new Mouse();
// $animals = [$cat, $dog, $mouse];
// foreach ($animals as $animal) {
//     $animal->makeSound();
// }



// ----------------------------------------------------------------------
// interface Animal {
//     function makeSound();
// }

// class Newclass implements Animal {
//     function makeSound()
//     {
//         return "This is interface OOP";
//     }
// }
// $test = new Newclass();
// echo $test->makeSound();



// -----------------------------------------------------------------

// interface First {
//     function cal($a, $b);
// }

// interface Second {
//     function sub($c, $d);
// }

// class Newcalss implements First, Second {
//     function cal($a1, $b1) {
//         return $a1 + $b1;
//     }

//     function sub($c, $d)
//     {
//         return $c - $d;
//     }

// }

// $test = new Newcalss();

// echo "Cal Function: " . $test->cal(20, 30);
// echo "<br>";
// echo "Sub Function: " . $test->sub(10, 20);






?>
