<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Notas</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>

    <header>
        <h1>Cadastrar Notas do Aluno</h1>
    </header>

    <main>

        <form class="formulario" action="public/processo.php" method="post">
            <label for="nome">Nome do Aluno:</label><br>
            <input type="text" name="nome" id="nome" required><br><br>

            <label>Digite as 4 notas:</label><br>
            <input type="number" name="nota1"  min="0" max="25" required><br><br>
            <input type="number" name="nota2"  min="0" max="25" required><br><br>
            <input type="number" name="nota3"  min="0" max="25" required><br><br>
            <input type="number" name="nota4"  min="0" max="25" required><br><br>

            <button type="submit" name="cadastrar">Cadastrar Aluno</button>
        </form>

    </main>

</body>
</html>