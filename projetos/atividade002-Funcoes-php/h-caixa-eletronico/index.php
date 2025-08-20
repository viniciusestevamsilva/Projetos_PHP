<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <header>
        <h1>Simulador de Caixa Eletrônico</h1>
    </header>

    <main>
        <form class="formulario" method="post" action="public/processo.php">
            <label for="valor">Informe o valor para saque:</label><br>
            <input type="number" id="valor" name="valor" min="5" max="500" required>
            <button type="submit">Sacar</button><br>

            <label for="valor"><small>! Limite de somente R$500</small></label>
        </form>
    </main>
</body>
</html>