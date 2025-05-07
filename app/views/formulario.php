<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nova Tarefa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card">
            <div class ="card-header">
                <h1 class ="h4 mb-0">Cadastrar Tarefa </h1>
        </div>
        <div class="card-body">

    </div>
 


    <form action="index.php?action=salvar" method="POST">
        <label> Titulo:</label><br>
        <input type ="text" name ="titulo"><br><br>

        <label>Descrição:</label><br>
        <textarea name="descricao"></textarea><br><br>

        <label>Status:</label><br>
        <select name="status"> 
            <option value="pendente">Pendente</option>
            <option value="concluida">Concluída</option>
            <option value="cancelada">Cancelada</option>
        
        </select><br><br>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</body>
</html>