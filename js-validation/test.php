<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Test File</title>
    </head>
    <body>
        
        <?php 




//   What is deference between $ and $$ in PHP

// $a = "Value Rohit";
// $b = "a";
// echo $$b;


// ---------------------------------------------------------



echo "<br><br>----------------------------<br><br>";


class Newclass {
    public $name;
}

$newObj = new Newclass();
$newObj->name = "ROhit new";
echo $newObj->name;


echo "<br><br>-----------------<br>";
// --------------------------------------------------------------------------------------





class test{
    public $name;
    public $age;

    public function set_name($_name) {
        $this->name = $_name;
    }

    public function get_name() {
        return $this->name;
    }

    public function set_age($age) {
        $this->age = $age;
    }

    public function get_age () {
        return $this->age;
    }
}

$nObj = new test();

$nObj->set_name("This is rohit");

echo $nObj->get_name();
$nObj->set_age(20);
echo "<br>".$nObj->get_age();
echo "<br>";
var_dump($nObj instanceof test);

echo "<br><br>---------------------------------------<br><br>";


class Car {
    public $name;
    
    public function __construct($name) {
        $this->name = $name;
    }

    public function get_name() {
        return $this->name;
    }
}

$nameObj = new Car("Amit value");
// $nameObj->set_name("Amit");
echo $nameObj->get_name() . "<br>";
$nameObj->name = "New amit";
echo $nameObj->get_name();

echo "<br><br>------------------------------------<br><br>";


class Student {
    public $name;
    public $age;
    public $class;

    public function __construct($name = "No name", $age = "No age", $class = "No class")
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_age()
    {
        return $this->age;
    }

    public function get_class()
    {
        return $this->class;
    }

}


// $data = [1, 2, 3, 4, 5];

$studentObj = new Student("Rohit", 20, 10);
echo "Name: " . $studentObj->get_name() . "<br>";
echo "Age: " . $studentObj->get_age() . "<br>";
echo "Class: " . $studentObj->get_class();
echo "<pre>";
// print_r($studentObj->get_class());
echo "</pre>";

echo "<br><br>----------------------------<br><br>";


// class Fruit {
//     public $name;

//     public function __construct($name) {
//         $this->name = $name;
//     }

//     public function __destruct() {
//         echo "This is destruct function: {$this->name}";
//     }
// }

// $frObj = new Fruit("Apple");

echo "<br><br>------------------------------------<br><br>";


class Firstclass {
    public $name;
    public $age;
    public $city;

    public function set_name($name) {
        return $this->name = $name;
    }

}

class Secondclass extends Firstclass {
    public function get_name ($names) {
       return $this->name = $names;
    }
}



$newObjs = new Firstclass();
$secondObj = new Secondclass();
// $newObjs->set_name("New Modifiers");
// echo $newObjs->name;
$secondObj->get_name("New Extends");
echo $secondObj->name;

echo "<br><br>--------------------------------<br><br>";

class First {
    public $name;
    public $school;

    public function __construct($nvalue = "My Name", $svalue = "My School") {
        $this->name = $nvalue;
        $this->school = $svalue;
    }

    protected function firstClass() {
        echo "First name is : {$this->name} and school is: {$this->school}";
    }
}

class Second extends First {
    public $age;
    public function __construct($newName = "RohitNew", $newSch = "MySchool", $age = 30) {
        $this->name = $newName;
        $this->school = $newSch;
        $this->age = $age;
    }

    public function SecondFUnction() {
        echo "Name is: {$this->name} and School is : {$this->school} and Age is : {$this->age} <br>";
        $this->firstClass();
    }
}

$objNew = new Second("Amit", "AmitSchool", 40);

// echo $objNew->name . "<br>";
// echo $objNew->school . "<br>";
$objNew->SecondFUnction();
echo "<br>";

// $objNew = new First("My name", "School name");
// echo $objNew->name . "<br>";
// echo $objNew->school;



?>





    
</body>
</html>