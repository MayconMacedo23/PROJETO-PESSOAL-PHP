<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once __DIR__ . '/../config/database.php';

$nome  = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

try {
    $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->execute([$nome, $email, $senha]);

    $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
    header("Location: login.php");
    exit;
} catch (PDOException $e) {
    die("Erro ao cadastrar: " . $e->getMessage()); // Mostra o erro
}
