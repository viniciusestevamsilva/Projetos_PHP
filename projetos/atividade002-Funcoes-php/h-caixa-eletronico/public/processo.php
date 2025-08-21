<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <header>
        <h1>Resultado do Saque</h1>
    </header>

    <main>
        <form class="formulario">
            <?php
                function calcularCedulas($valor) {
                    $cedulas = [200, 100, 50, 20, 10, 5];
                    $resultado = [];

                    foreach ($cedulas as $cedula) {
                        if ($valor >= $cedula) {
                            $quantidade = intdiv($valor , $cedula);
                            $valor = $valor % $cedula;
                            $resultado[$cedula] = $quantidade;
                        }
                    }

                    return $resultado;
                }

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $valor = (int) $_POST['valor'];

                    if ($valor < 5 || $valor % 5 != 0) {
                        echo "<p>Valor inválido. O valor deve ser múltiplo de 5.</p>";
                    } else { 
                        $resultado = calcularCedulas($valor);

                        echo "<h1>Resultado do Saque</h1>";
                        echo "<p>Valor solicitado: R$ $valor</p>";
                        echo "<ul>";
                        foreach ($resultado as $cedula => $quantidade) {
                            echo "<li>Cédulas de R$ $cedula: $quantidade</li>";
                        }
                        echo "</ul>";
                    }
                    echo "<br>";
                    echo "<a href='../index.php'>Realizar outro saque</a>";
                    echo "<br>";
                    echo "<br>";
                    };
            ?>
        </form>    
    </main>

</body>
</html>