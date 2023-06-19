<?php


header('Content-Type: application/json');

$todoList = file_get_contents("dati.json");

$todoListDati = json_decode($todoList, true);

if (isset($_POST['newTask'])) {
    $nuovaTask = [
        'text' => $_POST['newTask'],
        'done' => false,
    ];
    $todoListDati[] = $nuovaTask;
    file_put_contents("dati.json", json_encode($todoListDati));
} elseif (isset($_POST['toggleIndex'])) {
    $indice = $_POST['toggleIndex'];
    $todoListDati[$indice]['done'] =  !$todoListDati[$indice]['done'];
    file_put_contents("dati.json", json_encode($todoListDati));
} else if (isset($_POST['deleteAll'])) {
    $todoListDati = [];
    file_put_contents("dati.json", json_encode($todoListDati));
} else if (isset($_POST['deleteIndex'])) {
    $indice = $_POST['deleteIndex'];
    array_splice($todoListDati, $indice, 1);
    file_put_contents("dati.json", json_encode($todoListDati));
}

$todoList = json_encode($todoListDati);

echo $todoList;
