<?php

$todoList = [
    "Fare la spessa",
    "Dormire di pomeriggio",
    "Fare rifornimento",
    "Portare Gabri al parco ",
    "Domenica alle ore 10, guardare One Peace",
    "Domenica alle ore 20, guarde Kimetsu no Yaiba",
];

header('Content-Type: application/json');

$stringaConDati = json_encode($todoList);

echo $stringaConDati;
