<?php
header("Content-Type: application/json");
require_once "Veicolo.php";
require_once "Automobile.php";

$automobili = [
    new Automobile("a",1,"e"),
    new Automobile("b",2,"f")
];

echo json_encode($automobili);
?>