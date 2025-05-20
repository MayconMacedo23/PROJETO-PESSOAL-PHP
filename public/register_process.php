<?php

session_start();
require_once __DIR__ .'/../config/database.php';

$nome = $_POST['nome'];
$email =  $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

try {
    $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->execute([$nome, $email, $senha]);

    $$_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
    header("Location: login.php");
    exit;
} catch (PDOException $e) {
    $_SESSION['mensagem'] = "Erro ao cadastrar: " . $e->getMessage();
    header("Location : register.php");
    exit;
}