

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Jogo de Adivinhação</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<header>

    <h1>Resultado</h1>

</header>

<main>
    <section>

        <form class="formulario" method="post" action="public/processo.php">

            <?php
                session_start();

                function verificarPalpite($palpite, $numeroSecreto) {
                    if ($palpite < $numeroSecreto) {
                        return "Seu palpite é MENOR que o número secreto.";
                    } elseif ($palpite > $numeroSecreto) {
                        return "Seu palpite é MAIOR que o número secreto.";
                    } else {
                        return "CORRETO! Você acertou!";
                    }
                }

                if (!isset($_SESSION['numero_secreto'])) {
                    $_SESSION['numero_secreto'] = rand(1, 100);
                    $_SESSION['tentativas'] = 0;
                }

                $palpite = $_POST['palpite'];
                $_SESSION['tentativas']++;

                $resultado = verificarPalpite($palpite, $_SESSION['numero_secreto']);

                echo "<h1>Resultado:</h1>";
                echo "<p>$resultado</p>";

                if ($palpite == $_SESSION['numero_secreto']) {
                    echo "<p>Você acertou em {$_SESSION['tentativas']} tentativas!</p>";
                    echo "<a href='index.php'>Jogar novamente</a>";
                    echo "<br><br>";

                    session_destroy();
                } else {
                    echo "<a href='../index.php'>Tentar novamente</a>";
                    echo "<br><br>";
                }
            ?>
        </form>

    </section>
</main>

</body>
</html>