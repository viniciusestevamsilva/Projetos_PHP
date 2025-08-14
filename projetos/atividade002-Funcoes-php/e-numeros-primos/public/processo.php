<?php
// Função para verificar se um número é primo
function ehPrimo($numero) {
    if ($numero < 2) return false;

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i === 0) {
            return false;
        }
    }

    return true;
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['limite'])) {
    $limite = intval($_POST['limite']);
    $primos = [];

    // Laço para gerar primos até o limite
    for ($i = 1; $i <= $limite; $i++) {
        if (ehPrimo($i)) {
            $primos[] = $i;
        }
    }
} else {
    echo "Nenhum número foi enviado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado - Números Primos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<header>
    <h1>Números Primos até <?= $limite ?></h1>
</header>

<main>

    <form class="formulario">

        <p>Primos encontrados:</p>
    <ul>
        <?php
        foreach ($primos as $primo) {
            echo "<li>$primo</li>";
        }
        ?>
    </ul>
    </form>
    
</main>

</body>
</html>