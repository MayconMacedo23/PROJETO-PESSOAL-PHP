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

        if (isset($_GET['id]'])) {

            $id = $_GET['id'];
            $sql = "UPDATE tarefas SET titulo = ?, descricao = ?, status = ? WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$titulo, $descricao, $status, $id]);

        } else {

            $sql = "INSERT INTO tarefas (titulo, descricao, status) VALUES (?, ?, ?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$titulo, $descricao, $status]);
        }


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

    public function editar()
    {
        if (!isset($_GET['id'])) {
            echo "ID inválido";
            return;
        }

        $id = $_GET['id'];
        $sql = "SELECT * FROM tarefas WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $tarefa = $stmt->fetch();

        if (!$tarefa) {
            echo "Tarefa não encontrada;";
            return;
        }

        require_once __DIR__ . '/../views/formulario.php';
    }


}