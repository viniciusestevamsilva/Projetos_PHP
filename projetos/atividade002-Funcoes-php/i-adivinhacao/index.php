<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Jogo de Adivinhação</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>

<header>

    <h1>Jogo de Adivinhação</h1>

</header>

<main>
    
    <section>

        <form class="formulario" method="post" action="public/processo.php">
            <label for="palpite">Digite um número entre 1 e 100:</label><br>
            <input type="number" id="palpite" name="palpite" min="1" max="100" required><br><br>

            <button type="submit">Enviar Palpite</button>
        </form>

    </section>

</main>

</body>
</html>