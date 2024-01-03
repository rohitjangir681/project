<?php 

// for($i = 0; $i <= 10; $i++) {
//     echo $i. " ";
// }


// for($i=0; $i<=10; $i++)
// echo $i. " ";


// for($i=0; $i<=10; $i++):
//     echo $i. " ";
//     echo "<br>";
// endfor;


// for($i=0; $i<=11; $i++);
// echo $i;


// $age = 19;
// if($age >= 18)
//   echo "Yesssss";
// else 
//   echo "Noooooo";


// $age = 19;
// if($age > 18):
//     echo "Yesss";
// else:
//     echo "Nooooo";
// endif;


// -------------------------------------------


class Pyramid 
{
    public $count = 0;
    function __construct($no) {
        $this->count = $no;
    }

    function stOne() {
        $output = "";
        for($i=1; $i <= $this->count; $i++) {
            for($j=1; $j<=$i; $j++) {
                $output.=$j." ";
            }
            $output.="<br>";
        }
        return $output;
    }
}

$test = new Pyramid(5);
// echo $test->stOne();


class Tables extends Pyramid 
{
    private $tabl = 0;
    function __construct($no1) {
        $this->tabl = $no1;
        parent::__construct($no1);
    }

    // function getTable() {
    //     return $this->tableOf();
    // }

    // function getStructure() {
    //     // return $this->stOne();
    //     return self::statFunct();
    // }

    function tableOf() {
        $output = "";
        for($i = 1; $i <= 10; $i++) {
            $output.=$i*$this->tabl."<br>";
        }
        return $output;
    }

    // public function statFunct() {
    //     return "This is static function";
    // }
}


// echo Tables::statFunct();

$tabObj = new Tables(6);
echo $tabObj->tableOf();
echo $tabObj->stOne();


// echo $tabObj->tabl;

// echo $tabObj->getTable();
// echo $tabObj->getStructure();






















?>