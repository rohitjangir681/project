<?php 
// this is for namespace file name: interface.php and static-methods.php
namespace pro {
class test{
    public function __construct() {
        echo "This is second class";
    }
}
}


// --------------------------------------------------------

// trait first {
//     private function Newfunct() {
//         echo "From first trait";
//     }
// }

// class Newclass {
//     use first {
//         first::Newfunct as public newName;
//     }
// }

// $test = new Newclass();
// // $test->Newfunct();
// $test->newName();



// -----------------------------------------------------------------------------------


// trait first {
//     private function nameMy() {
//         echo "From first trait";
//     }
// }

// class Classnew {
//     use first {
//         first::nameMy as public;
//     }
// }

// $test = new Classnew();
// $test->nameMy();



// ------------------------------------------------------------------------------------------

// trait first {
//     public function firstF() {
//         echo "From first trait";
//     }
// }

// trait second {
//     public function firstF() {
//         echo "From second trait";
//     }
// }


// class Newclass {
//     use first, second {
//         first::firstF insteadof second;
//         second::firstF as Newname;
//     }
// }

// $test = new Newclass();
// $test->firstF();
// echo "<br>";
// $test->Newname();


// ---------------------------------------------------------

// trait first {
//     public function firstF() {
//         echo "From first trait";
//     }
// }

// class Newclass {
//     public function firstF() {
//         echo "From Newclass";
//     }
// }

// class Secondclass {
//     use first;
//     // public function firstF() {
//     //     echo "From Second class";
//     // }
// }

// $test = new Secondclass();
// $test->firstF();



// ----------------------------------------------------------------

// trait first{
//     public function forThis() {
//         echo "First function";
//     }
//     public function forSecond() {
//         echo "Second function";
//     }
// }

// class Newone {
//     use first;
//     public function forThis() {
//         echo "Will be replaced";
//     }
// }
// $test = new Newone();
// $test->forThis();
// echo "<br>";
// $test->forSecond();



// -----------------------------------------------------------------

// trait message1{
//     public function msg1() {
//         echo "This is first trait";
//     }
// }

// trait message2{
//     public function msg2() {
//         echo "This is second trait";
//     }
// }

// class Firstclass {
//     use message1,message2;
// }

// class Secondclass{
//     use message2;
// }

// $obj1 = new Firstclass();
// $obj1->msg1();
// echo "<br>";
// $obj1->msg2();
// echo "<br><br>";
// $obj2 = new Secondclass();
// $obj2->msg2();



// -----------------------------------------

// trait message1 {
//     public function msg1() {
//         echo "This is message";
//     }
// }

// class Welcome {
//     use message1;
// }

// $test = new Welcome();
// $test->msg1();

// ---------------------------------------------------------------------

// trait Newtrait {
//     function first() {
//         echo "First trait";
//     }
// }

// trait Secondtrait {
//     function second() {
//         echo "Second trait";
//     }
// }

// class NewFor {
//     use Newtrait, Secondtrait;

// }

// $obj = new NewFor();

// $obj->first();
// echo "<br>";
// $obj->second();




// --------------------------------------------------------


// trait Newtrait {
//     function newFunction() {
//         echo "This is trait";
//     }
// }

// class First {
//     use Newtrait;
// }

// $test = new First();
// $test->newFunction();

?>