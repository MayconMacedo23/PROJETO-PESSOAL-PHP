<?php
require_once __DIR__ . '/../../config/database.php';

class Tarefa {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function listar() {
        $stmt = $this->pdo->query("SELECT * FROM tarefas");
        return $stmt->fetchAll();
    }

    
}
