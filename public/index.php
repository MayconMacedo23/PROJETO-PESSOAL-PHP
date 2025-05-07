<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/controllers/TarefaController.php';

$controller = new TarefaController($pdo);

$action = $_GET['action'] ?? 'index';

if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    echo "Ação inválida";
}
