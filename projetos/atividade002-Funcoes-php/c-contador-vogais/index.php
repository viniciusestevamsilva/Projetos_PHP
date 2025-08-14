<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contador de Vogais</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>

<header>
    <h1>Contador de Vogais</h1>
</header>

<main>
    <form class="formulario" action="public/processo.php" method="post">
        <label for="frase">Digite uma frase:</label><br>
        <input type="text" id="frase" name="frase" required><br><br>

        <button type="submit">Contar Vogais</button>
    </form>    
</main>

</body>
</html>