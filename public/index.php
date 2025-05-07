<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/models/tarefa.php';

$tarefa = new Tarefa($pdo);
$tarefas = $tarefa->listar();

foreach ($tarefas as $t) {
    echo $t['titulo'] . "<br>";
}
