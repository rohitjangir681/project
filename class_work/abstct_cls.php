<?php 



// abstract class Parentclass {
//     abstract protected function intro($name);
// }

// class Childclass extends Parentclass {
//     public function intro($nam, $dear =".", $lastn ="Dear") {
//         if($nam == "Male") {
//             $preName = "Mr.";
//         } elseif($nam == "Female") {
//             $preName = "Mrs.";
//         } else {
//             $preName = "";
//         }
//         return "{$lastn} {$dear} {$preName} {$nam}";
//     }
// }

// $childClass = new Childclass();
// echo $childClass->intro("Male");



// -------------------------------------------------------

// abstract class ParentClass {
//     abstract protected function preName($name);
// }

// class Childclass extends ParentClass {
//     public function preName($nam)
//     {
//         if($nam == "Male") {
//             $pren = "Mr.";
//         } elseif ($nam == "Female") {
//             $pren = "Mrs.";
//         } else {
//             $pren = "";
//         }
//         return "{$pren} {$nam}";
//     }
// }

// $childclass = new Childclass();
// echo $childclass->preName("Male");



// -------------------------------------------------------------------

// abstract class Car {
//     public $name;

//     public function __construct($nam)
//     {
//         $this->name = $nam;
//     }

//     abstract public function intro() : string;
// }


// class Audi extends Car {
//     function intro() : string
//     {
//         return "This is Audi: $this->name";
//     }
// }


// class Volvo extends Car {
//     function intro() : string {
//         return "This is Volvo: $this->name";
//     }
// }


// class Citroen extends Car {
//     function intro() : string {
//         return "This is Citroen: $this->name";
//     }
// }


// $audi = new Audi("Audi");
// echo $audi->intro();
// echo "<br>";

// $volvo = new Volvo("Volvo");
// echo $volvo->intro();
// echo "<br>";

// $citroen = new Citroen("Citroen");
// echo $citroen->intro();

// -------------------------------------------------------

// // this is abstract class 
// abstract class bank
// {
//     abstract function id_proof();
// }

// class icici extends bank
// {
//     function id_proof()
//     {
//         echo "This is ICICI bank ID Proof";
//     }
// }

// class sbi extends bank 
// {
//     function id_proof()
//     {
//         echo "This is SBI bank id proof";
//     }
// }


// $icici = new icici();
// $icici->id_proof();
// echo "<br>";

// $sbi = new sbi();
// $sbi->id_proof();


// -------------------------------------------------

// abstract class Newclass {
//     abstract function forThisClass();
// }


// class Twoclass extends Newclass {
//     function forThisClass()
//     {
//         echo "This is abstract class";
//     }
    
// }


// $test = new Twoclass();
// $test->forThisClass();




