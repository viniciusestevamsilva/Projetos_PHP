<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login Simples</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>

    <header>
        <h1>Login</h1>
    </header>

    <main>

        <form class="formulario" action="public/processo.php" method="post">
            <label for="usuario">Usuário:</label><br>
            <input type="text" id="usuario" name="usuario" required><br><br>

            <label for="senha">Senha:</label><br>
            <input type="password" id="senha" name="senha" required><br><br>

            <button type="submit" name="logar">Entrar</button>
        </form>

    </main>

</body>
</html>
