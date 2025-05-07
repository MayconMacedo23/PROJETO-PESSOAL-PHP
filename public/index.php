<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/controllers/TarefaController.php';

$controller = new TarefaController($pdo);
$controller->index();
