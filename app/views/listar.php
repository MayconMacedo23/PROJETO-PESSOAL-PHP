<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Lista de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class ="container mt-5">
        <h1 class="mb-4">Minhas Tarefas</h1>

        <a href="index.php?action=criar" class="btn btn-sucess mb -3">+ Nova Tarefa</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <>
                <?php foreach ($tarefas as $t): ?>
                <tr>
                <td><?= htmlspecialchars($t['titulo']) ?></td>
                <td><?= nl2br(htmlspecialchars($t['descricao'])) ?></td>
                <td><?= ucfirst($t['status']) ?></td>
                <td>
                    <a href="index.php?action=editar&id<?= $t['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                    <a href ="index.php?action=excluir$id=<?= $t['id'] ?> "class="btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                </td>
            </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>