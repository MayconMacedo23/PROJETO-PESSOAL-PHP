<?php
session_start();

if (isset($_SESSION['mensagem'])) {
    echo '
    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        ' . $_SESSION['mensagem'] . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    </div>';
    unset($_SESSION['mensagem']);
}


require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/controllers/TarefaController.php';

$controller = new TarefaController($pdo);

$action = $_GET['action'] ?? 'index';

if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    echo "Ação inválida";
}
