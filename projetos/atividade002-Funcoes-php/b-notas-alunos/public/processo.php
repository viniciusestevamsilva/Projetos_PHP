<?php
session_start();

function calcularResultado($n1, $n2, $n3, $n4) {
    $media = ($n1 + $n2 + $n3 + $n4);

    if ($media >= 60) {
        return ["media" => $media, "situacao" => "Aprovado"];
    } elseif ($media >= 40) {
        return ["media" => $media, "situacao" => "Recuperação"];
    } else {
        return ["media" => $media, "situacao" => "Reprovado"];
    }
}

if (!isset($_SESSION['alunos'])) {
    $_SESSION['alunos'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrar'])) {
    $nome = trim($_POST['nome']);
    $n1 = floatval($_POST['nota1']);
    $n2 = floatval($_POST['nota2']);
    $n3 = floatval($_POST['nota3']);
    $n4 = floatval($_POST['nota4']);

    $resultado = calcularResultado($n1, $n2, $n3, $n4);

    $_SESSION['alunos'][] = [
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
    <h1>Resultado dos Alunos</h1>
</header>

<main>
    
    <section>
        <form class="formulario">
            <?php
                if (!empty($_SESSION['alunos'])) {
                    foreach ($_SESSION['alunos'] as $aluno) {
                        echo "<strong>Aluno:</strong> " . htmlspecialchars($aluno['nome']) . "<br>";
                        echo "<strong>Média:</strong> " . $aluno['media'] . "<br>";
                        echo "<strong>Situação:</strong> " . $aluno['situacao'] . "<br><br>";
                    }
                } else {
                    echo "Nenhum aluno cadastrado.";
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