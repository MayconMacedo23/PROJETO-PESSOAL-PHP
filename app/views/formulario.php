<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nova Tarefa</title>
</head>
<body>
    <h1>Cadastrar Tarefa</h1>
    <form action="index.php?action=salvar" method="POST">
        <label> Titulo:</label><br>
        <input type ="text" name ="titulo"><br><br>

        <label>Descrição:</label><br>
        <textarea> name="descricao"></textarea><br><br>

        <label>Status:</label><br>
        <select> name="status"
            <option> value="pendente">Pendente</option>
            <option> value="concluida">Concluída</option>
            <option> value="cancelada">Cancelada</option>
        
        </select><br><br>

        <button> type="submit">Salvar</button>
    </form>
</body>
</html>