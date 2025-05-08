<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?= isset($tarefa['id']) ? 'Editar Tarefa' : 'Nova Tarefa' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="h4 mb-0">
                    <?= isset($tarefa['id']) ? 'Editar Tarefa' : 'Cadastrar Tarefa' ?>
                </h1>
            </div>
            <div class="card-body">
                <form action="index.php?action=salvar<?= isset($tarefa['id']) ? '&id=' . $tarefa['id'] : '' ?>" method="POST">

                    <label class="form-label">Título:</label>
                    <input type="text" name="titulo" class="form-control" value="<?= $tarefa['titulo'] ?? '' ?>" required><br>

                    <label class="form-label">Descrição:</label>
                    <textarea name="descricao" class="form-control" required><?= $tarefa['descricao'] ?? '' ?></textarea><br>

                    <label class="form-label">Status:</label>
                    <select name="status" class="form-select">
                        <option value="pendente" <?= (isset($tarefa['status']) && $tarefa['status'] == 'pendente') ? 'selected' : '' ?>>Pendente</option>
                        <option value="concluida" <?= (isset($tarefa['status']) && $tarefa['status'] == 'concluida') ? 'selected' : '' ?>>Concluída</option>
                        <option value="cancelada" <?= (isset($tarefa['status']) && $tarefa['status'] == 'cancelada') ? 'selected' : '' ?>>Cancelada</option>
                    </select><br>

                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="index.php" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
    </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>

</body>
</html>
