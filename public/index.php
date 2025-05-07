<?php
session_start();

if (isset($_SESSION['mensagem'])) {
    echo '<div class="alert alert-success text-center">' . $_SESSION['mensagem'] . '</div>';
    unset($_SESSION['mensagem']);
}

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/controllers/TarefaController.php';

$controller = new TarefaController(pdo: $pdo);

$action = $_GET['action'] ?? 'index';

if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    echo "Ação inválida";
}
