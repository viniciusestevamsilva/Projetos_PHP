<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Cadastro e Pesquisa de Produtos</title>
</head>
<body>
    <h1>Sistema de Produtos</h1>

    <form method="post" action="processo.php">
        <label>Escolha uma opção:</label><br>
        <select name="acao" required>
            <option value="">--Selecione--</option>
            <option value="cadastrar">Cadastrar Produto</option>
            <option value="listar">Listar Produtos</option>
            <option value="pesquisar">Pesquisar Produto</option>
        </select><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
