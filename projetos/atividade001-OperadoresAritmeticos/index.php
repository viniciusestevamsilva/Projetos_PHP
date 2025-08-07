<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Operadores Aritméticos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<header>

    <h1>Calculadora: Operadores Aritméticos</h1>

</header>

<main>

    <form id="formulario" action="resultado.php" method="POST">
        <label for="numero1">Digite o primeiro número:</label><br>
        <input type="number" id="numero1" name="numero1" required><br>

        <label for="numero2">Digite o Segundo número:</label><br>
        <input type="number" id="numero2" name="numero2" required><br>

        <label for="operacao">Escolha a operação:</label><br>
        <select id="operacao" name="operacao">
            <option value="">--Selecione--</option>
            <option value="soma">Soma (+)</option>
            <option value="subtracao">Subtração (-)</option>
            <option value="multiplicacao">Multiplicação (x)</option>
            <option value="divisao">Divisão (÷)</option>
        </select><br><br>

        <button type="submit">Calcular</button>
    </form>
    <div id="mensagem-erro" ></div>
    
</main>
 
    <script src="js/script.js"></script>
    
</body>
</html>