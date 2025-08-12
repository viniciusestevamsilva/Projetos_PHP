<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Operadores Aritméticos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <header>
        <h1>Exibir Tabuada de 1 a 10</h1>
    </header>

    <main>
        <form class="formulario">
            <?php

                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['exibir']) && isset($_POST['numero'])) {

                    $numero = (int) $_POST['numero'];

                    if ($numero >= 1 && $numero <= 10) {

                        function exibirTabuada($n) {
                            echo "<h2>Tabuada do $n</h2>";
                            for ($i = 1; $i <= 10; $i++) {
                                echo "$n x $i = " . ($n * $i) . "<br>";
                            }
                        }

                        exibirTabuada($numero);

                    } else {
                        echo "Número fora do intervalo. Escolha de 1 a 10.";
                    }

                } else {
                    echo "Acesso inválido. Volte para a <a href='../index.php'>página inicial</a>.";
                }
            ?>
        </form>    
    </main>

</body>
</html>