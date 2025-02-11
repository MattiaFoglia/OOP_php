<?php
require_once "Veicolo.php";
require_once "Automobile.php";

$automobili = [
    new Automobile("a",1,"e"),
    new Automobile("b",2,"f")
];

foreach($automobili as $car){
    $car->stampaVeicolo();
}
?>