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
    
    public function salvar() {
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $status = $_POST['status'];

        $this->tarefaModel->criar($titulo, $descricao, $status);

        header('Location: index.php');
    }
    
    public function excluir ()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "DELETE FROM tarefas WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$id]);
        }

        header("Location: index.php");
        exit;
    }


}