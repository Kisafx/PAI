<?php
// class Fruit{
//     public $name;
//     public $color;

//     function set_name($name){
//         $this->name=$name;
//     }
//     function get_name(){
//         return $this->name;
//     }
// }

// $apple =new Fruit();
// $banana=new Fruit();
// $apple ->set_name('Apple');
// $banana ->set_name('Banana');

// echo $apple->get_name();
// echo "<br>";
// echo $banana->get_name();

// class Fruit{
//     public $name;
//     public $color;

//     function __construct($name){
//         $this->name=$name;
//     }
//     function get_name(){
//         return $this->name;
//     }
// }
// $apple= new Fruit("Apple");
// echo $apple->get_name();


class Fruit{
    public $name;
    public $color;




    function __construct($name){
        $this->name=$name;
    }
    function __destruct() {
        echo "The fruit is {$this->name}. <br>";
    }
}




$apple =new Fruit("Apple");
$banana=new Fruit("Banana");




?>

?>
