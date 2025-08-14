<?php

function celsiusParaFahrenheit($c) {
    return ($c * 9/5) + 32;
}

function celsiusParaKelvin($c) {
    return $c + 273.15;
}

function fahrenheitParaCelsius($f) {
    return ($f - 32) * 5/9;
}

function fahrenheitParaKelvin($f) {
    return ($f - 32) * 5/9 + 273.15;
}

function kelvinParaCelsius($k) {
    return $k - 273.15;
}

function kelvinParaFahrenheit($k) {
    return ($k - 273.15) * 9/5 + 32;
}

if (isset($_POST['valor']) && isset($_POST['conversao'])) {
    $valor = floatval($_POST['valor']);
    $tipo = $_POST['conversao'];
    $resultado = 0;
    $descricao = "";

    switch ($tipo) {
        case 'c_f':
            $resultado = celsiusParaFahrenheit($valor);
            $descricao = "Celsius → Fahrenheit";
            break;
        case 'c_k':
            $resultado = celsiusParaKelvin($valor);
            $descricao = "Celsius → Kelvin";
            break;
        case 'f_c':
            $resultado = fahrenheitParaCelsius($valor);
            $descricao = "Fahrenheit → Celsius";
            break;
        case 'f_k':
            $resultado = fahrenheitParaKelvin($valor);
            $descricao = "Fahrenheit → Kelvin";
            break;
        case 'k_c':
            $resultado = kelvinParaCelsius($valor);
            $descricao = "Kelvin → Celsius";
            break;
        case 'k_f':
            $resultado = kelvinParaFahrenheit($valor);
            $descricao = "Kelvin → Fahrenheit";
            break;
        default:
            echo "Conversão inválida.";
            exit;
    }
} else {
    echo "Dados não enviados corretamente.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Conversão</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<header>
    <h1>Resultado da Conversão</h1>
</header>

<main>
    <form class="formulario">
        <?php
            echo "Conversão:" . $descricao . "<br>";
            echo "Valor original:" . $valor . "<br>";
            echo "Resultado:" . $resultado . "<br>";
        ?>

        <br>
        <a href="../index.php">Voltar</button>
    </form>
   
</main>

</body>
</html>
