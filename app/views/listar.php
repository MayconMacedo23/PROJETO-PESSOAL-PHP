<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Lista de Tarefas</title>
</head>
<body>
<h1>Minhas Tarefas</h1>
<ul>
    <?php foreach ($tarefas as $t): ?>
        <li>
            <strong>?= htmlspecialchars($['titulo']) ?></strong>
            </li>=htmlspecialchars($t['status']) ?>
            <br>
            <?= nl2br(htmlspecialchars($t['descricao'])) ?>
        </li>
      <?php endforeach; ?>  
    </ul>
</body>
</html>