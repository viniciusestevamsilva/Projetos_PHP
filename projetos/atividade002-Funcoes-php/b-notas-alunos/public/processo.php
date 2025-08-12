<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Notas</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <header>
        <h1>Cadastrar Notas do Aluno</h1>
    </header>

    <main>
        <form class="formulario">
        <?php
            session_start(); // Para manter os dados de alunos na sessão

            // Função para calcular média e retornar resultado
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

            // Verifica se formulário foi enviado
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cadastrar'])) {

                $nome = trim($_POST['nome']);
                $n1 = floatval($_POST['nota1']);
                $n2 = floatval($_POST['nota2']);
                $n3 = floatval($_POST['nota3']);
                $n4 = floatval($_POST['nota4']);

                $resultado = calcularResultado($n1, $n2, $n3, $n4);

                // Guarda aluno na sessão
                $_SESSION['alunos'][] = [
                    "nome" => $nome,
                    "media" => number_format($resultado["media"], 2, ',', '.'),
                    "situacao" => $resultado["situacao"]
                ];
            }

            // Exibe a lista de alunos cadastrados
            echo "<h2>Lista de Alunos Cadastrados</h2>";

            if (isset($_SESSION['alunos']) && count($_SESSION['alunos']) > 0) {
                echo "<ul>";
                foreach ($_SESSION['alunos'] as $aluno) {
                    echo "<li><strong>{$aluno['nome']}</strong> - Média: {$aluno['media']} - Situação: <em>{$aluno['situacao']}</em></li>";
                }
                echo "</ul>";
            } else {
                echo "<p>Nenhum aluno cadastrado ainda.</p>";
            }
            echo "<button><a href='../index.php'>Cadastrar novo aluno</a></button>";
        ?>

        </form>
    </main>

</body>
</html>
