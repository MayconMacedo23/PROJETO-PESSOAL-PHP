<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card mx-auto" style="max-width: 400px;">
      <div class="card-body">
        <h2 class="text-center mb-4">Cadastrar Usuário</h2>
        <form action="register_process.php" method="POST">
          <div class="mb-3">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>E-mail:</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Senha:</label>
            <input type="password" name="senha" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
        </form>
        <div class="text-center mt-3">
          <a href="login.php">Já tem conta? Entrar</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
