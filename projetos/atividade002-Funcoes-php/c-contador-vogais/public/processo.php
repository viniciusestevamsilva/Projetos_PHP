<?php
function contarVogais($frase) {
  
    $frase = strtolower($frase);

   
    $vogais = ['a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0];

    
    for ($i = 0; $i < strlen($frase); $i++) {
        $letra = $frase[$i];
        if (isset($vogais[$letra])) {
            $vogais[$letra]++;
        }
    }

    return $vogais;
}


if (isset($_POST['frase'])) {
    $frase = $_POST['frase'];
    $resultado = contarVogais($frase);
} else {
    echo "Nenhuma frase foi enviada.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado de vogais</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

   <header>
         <h1>Resultado da Contagem de Vogais</h1>
    </header>

<main>


    <form class="formulario">

        <?php
            echo "<p>Frase digitada: <strong>" . htmlspecialchars($frase) . "</strong></p>";
        ?> 

        <ul>
        <?php
                foreach ($resultado as $vogal => $quantidade) {
                    echo "<li>" . strtoupper($vogal) . ":" . $quantidade . "</li>";
                }
            ?>
        </ul>

        <br><br>
        <a href="../index.php">Voltar</a>
        <br><br>

    </form>
</main>
    
</body>
</html>
