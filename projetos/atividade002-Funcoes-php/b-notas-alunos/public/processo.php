<?php

function calcularResultado($n1, $n2, $n3, $n4) {
    $media = ($n1 + $n2 + $n3 + $n4) / 4;

    if ($media >= 7) {
        return ["media" => $media, "situacao" => "Aprovado"];
    } elseif ($media >= 5) {
        return ["media" => $media, "situacao" => "Recuperação"];
    } else {
        return ["media" => $media, "situacao" => "Reprovado"];
    }
}

$aluno = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrar'])) {
    $nome = trim($_POST['nome']);
    $n1 = floatval($_POST['nota1']);
    $n2 = floatval($_POST['nota2']);
    $n3 = floatval($_POST['nota3']);
    $n4 = floatval($_POST['nota4']);

    $resultado = calcularResultado($n1, $n2, $n3, $n4);

    $aluno = [
        "nome" => $nome,
        "media" => number_format($resultado['media'], 2, ',', '.'),
        "situacao" => $resultado['situacao']
    ];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Aluno</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<header>
    <h1>Resultado</h1>
</header>

<main>
    <section>

    <form class="formulario">
        <?php
            if ($aluno) {
                echo "Aluno:" . htmlspecialchars($aluno['nome']) . "<br>";
                echo "Média:" . $aluno['media'] . "<br>";
                echo "Situação:" . $aluno['situacao'] . "<br>";
            
            } else {
                echo "Nenhum dado recebido";
            }
            
        ?>

        <br><br>
        <a href="../index.php">Cadastrar outro aluno</a>
        <br><br>
    </form>

        
    </section>
</main>

</body>
</html>
