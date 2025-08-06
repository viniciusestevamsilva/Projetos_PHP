<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<header>

    <h1> Resultado da Operação</h1>

</header>

<main>

   <section class="caixa">
        <?php
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacao = $_POST['operacao'];
        $resultado = 0;

        if ($operacao == "soma") {
            $resultado = $numero1 + $numero2;
            echo "Resultado de <strong>$numero1 + $numero2 = $resultado</strong>";
        } elseif ($operacao == "subtracao") {
            $resultado = $numero1 - $numero2;
            echo "Resultado de <strong>$numero1 - $numero2 = $resultado</strong>";
        } elseif ($operacao == "multiplicacao") {
            $resultado = $numero1 * $numero2;
            echo "Resultado de <strong>$numero1 x $numero2 = $resultado</strong>";
        } elseif ($operacao == "divisao") {
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
                echo "Resultado de <strong>$numero1 ÷ $numero2 = $resultado</strong>";
            } ifelse ( $numero1 != 0) {
                $resultado = $numero1 / $numero2;
                echo "Resultado de <strong>$numero1 ÷ $numero2 = $resultado</strong>";
            } else {
                echo "Erro: divisão por zero não é permitida.";
            }
        } else {
            echo "Operação inválida.";
        }
        ?>
        <br>
        <br>

        <a href="index.php">Fazer outro Calculo</a>

    </section>

</main>


</body>
</html>
