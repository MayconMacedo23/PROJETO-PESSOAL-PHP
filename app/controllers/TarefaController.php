<?php

require_once __DIR__ . '/../models/tarefa.php';

class TarefaController {
    private $tarefaModel;

    public function __construct($pdo){
        $this->tarefaModel = new Tarefa ($pdo);
    }

    public function index() {
        $tarefas = $this->tarefaModel->listar();
        require __DIR__ . '/../views/listar.php';
    }

    public function criar() {
        require __DIR__ .'/../views/formulario.php';
    }
}