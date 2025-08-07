<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<header>

    <h1>Resultado da Operação</h1>

</header>

<main>

    <section class="caixa">
        <?php
        if (isset($_POST['numero1'], $_POST['numero2'], $_POST['operacao'])) {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $operacao = $_POST['operacao'];
            $resultado = 0;
            $erro = false;

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
                } else {
                    echo "Erro: divisão por zero não é permitida.";
                    $erro = true;
                }
            } else {
                echo "Operação inválida.";
                $erro = true;
            }
        } else {
            echo "Dados incompletos ou não enviados.";
            $erro = true;
        }
        ?>

        <br><br>
        <a href="index.php"><?php echo isset($erro) && $erro ? "Voltar" : "Fazer outro Calculo"; ?></a>
    </section>

</main>

</body>
</html>