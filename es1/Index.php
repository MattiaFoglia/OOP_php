<?php
header("Content-Type: application/json");

require_once "Alunno.php";

$studenti = [
    new Alunno("a","e",1),
    new Alunno("b","f",2),
    new Alunno("c","g",3),
    new Alunno("d","h",4),
];

echo json_encode($studenti);
?>