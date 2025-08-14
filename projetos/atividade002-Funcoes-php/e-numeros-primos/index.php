<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerador de Números Primos</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>

<header>
    <h1>Gerador de Números Primos</h1>
</header>

<main>
    <form class="formulario" action="public/processo.php" method="post">
        <label for="limite">Digite um número:</label><br>
        <input type="number" id="limite" name="limite" min="1" required><br><br>

        <button type="submit" name="acao" value="gerar">Gerar Primos</button>
    </form>
</main>

</body>
</html>