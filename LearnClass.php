<?PHP
class ship{

    public $name;
    public $crewsize;



    public function sail(){

            echo "корабль $this->name вмещает на борту  $this->crewsize пиратов";


    }


}


$myShip= new Ship();
$myShip->name = "12321";
$myShip-> crewsize = 201;

$myShip->sail();





?>