<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Conversão</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>

<header>
    <h1>Conversor de Temperaturas</h1>
</header>

<main>
    <form class="formulario" action="public/processo.php" method="post">
        <label for="valor">Digite o valor da temperatura:</label><br>
        <input type="number" id="valor" name="valor" required><br><br>

        <label for="conversao">Escolha a conversão:</label><br>
        <select id="conversao" name="conversao" required>
            <option value="">--Selecione--</option>
            <option value="c_f">Celsius → Fahrenheit</option>
            <option value="c_k">Celsius → Kelvin</option>
            <option value="f_c">Fahrenheit → Celsius</option>
            <option value="f_k">Fahrenheit → Kelvin</option>
            <option value="k_c">Kelvin → Celsius</option>
            <option value="k_f">Kelvin → Fahrenheit</option>
        </select><br><br>

        <button type="submit">Converter</button>
    </form>
</main>

</body>
</html>