<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Operadores Aritméticos</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>

    <header>
        <h1>Exibir Tabuada de 1 a 10</h1>
    </header>

    <main>
        <form class="formulario" action="public/processo.php" method="post">
            <label for="numero">Digite um número de 1 a 10:</label><br>
            <input type="number" name="numero" id="numero" min="1" max="10" required><br><br>

            <button type="submit" name="exibir">Exibir Tabuada</button>
        </form>    
    </main>

</body>
</html>