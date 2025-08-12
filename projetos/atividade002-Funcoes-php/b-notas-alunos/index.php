<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Notas</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>

    <header>
        <h1>Cadastrar Notas do Aluno</h1>
    </header>

    <main>
        <form class="formulario" action="public/processo.php" method="post">
            <label for="nome">Nome do Aluno:</label><br>
            <input type="text" name="nome" id="nome" required><br><br>

            <label>Digite as 4 notas:</label><br>
            <input type="number" name="nota1"  min="0" max="10" required><br>
            <input type="number" name="nota2"  min="0" max="10" required><br>
            <input type="number" name="nota3"  min="0" max="10" required><br>
            <input type="number" name="nota4"  min="0" max="10" required><br><br>

            <button type="submit" name="cadastrar">Cadastrar Aluno</button>
        </form>
    </main>

</body>
</html>



<!-- <!DOCTYPE html> entendeno mekhor
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Notas Simples</title>
</head>
<body>

<h1>Cadastrar Notas do Aluno</h1>

<form method="post">
    Nome do aluno:<br>
    <input type="text" name="nome" required><br><br>

    Nota 1:<br>
    <input type="number" name="nota1" min="0" max="10" step="0.01" required><br><br>

    Nota 2:<br>
    <input type="number" name="nota2" min="0" max="10" step="0.01" required><br><br>

    Nota 3:<br>
    <input type="number" name="nota3" min="0" max="10" step="0.01" required><br><br>

    Nota 4:<br>
    <input type="number" name="nota4" min="0" max="10" step="0.01" required><br><br>

    <button type="submit" name="cadastrar">Calcular</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrar'])) {
    $nome = trim($_POST['nome']);
    $n1 = floatval($_POST['nota1']);
    $n2 = floatval($_POST['nota2']);
    $n3 = floatval($_POST['nota3']);
    $n4 = floatval($_POST['nota4']);

    $media = ($n1 + $n2 + $n3 + $n4) / 4;

    if ($media >= 7) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    echo "<h2>Resultado do aluno $nome</h2>";
    echo "Média: " . number_format($media, 2, ',', '.') . "<br>";
    echo "Situação: $situacao";
}
?>

</body>
</html> -->
