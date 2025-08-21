<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Cadastro e Pesquisa de Produtos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

    <header>
        <h1>Sistema de Produtos</h1>
    </header>

    <main>

        <form class="formulario">

            <?php 
            
                session_start();

                if (!isset($_SESSION['produtos'])) {
                    $_SESSION['produtos'] = [];
                }

                function adicionarProduto($nome, $preco) {
                    $_SESSION['produtos'][] = ['nome' => $nome, 'preco' => $preco];
                }

                function listarProdutos() {
                    if (empty($_SESSION['produtos'])) {
                        echo "Nenhum produto cadastrado.<br>";
                        echo '<br>';
                        echo '<a href="../index.php">Voltar</a>';
                        echo '<br><br>';
                        return;
                    }
                    echo "<h3>Produtos cadastrados:</h3>";
                    foreach ($_SESSION['produtos'] as $p) {
                        echo htmlspecialchars($p['nome']) . " - R$ " . number_format($p['preco'], 2, ',', '.') . "<br>";
                    }
                }

                function pesquisarProduto($termo) {
                    $achados = [];
                    foreach ($_SESSION['produtos'] as $p) {
                        if (stripos($p['nome'], $termo) !== false) {
                            $achados[] = $p;
                        }
                    }
                    if (!$achados) {
                        echo "Nenhum produto encontrado com '$termo'.<br>";
                        
                        return;
                    }
                    echo "<h3>Produtos encontrados:</h3>";
                    foreach ($achados as $p) {
                        echo htmlspecialchars($p['nome']) . " - R$ " . number_format($p['preco'], 2, ',', '.') . "<br>";
                    }
                }

                $acao = $_POST['acao'] ?? '';

                if ($acao == 'cadastrar') {

                    ?>
                    <form method="post" action="processo.php">
                        <input type="hidden" name="acao" value="salvar">
                        <label>Nome do Produto:</label><br>
                        <input type="text" name="nome" required><br><br>
                        <label>Preço:</label><br>
                        <input type="number" step="0.01" min="0" name="preco" required><br><br>
                        <button type="submit">Salvar</button>
                        <a href="../index.php">Voltar</a><br>
                    </form>
                    <?php
                } elseif ($acao == 'salvar' && isset($_POST['nome'], $_POST['preco'])) {
                    $nome = trim($_POST['nome']);
                    $preco = floatval($_POST['preco']);
                    if ($nome !== '' && $preco > 0) {
                        adicionarProduto($nome, $preco);
                        echo "Produto '$nome' cadastrado com sucesso!<br>";
                    } else {
                        echo "Dados inválidos.<br>";
                    }
                } elseif ($acao == 'listar') {
                    listarProdutos();
                } elseif ($acao == 'pesquisar') {

                    ?>
                    <form method="post" action="processo.php">
                        <input type="hidden" name="acao" value="buscar">
                        <label>Nome para pesquisar:</label><br>
                        <input type="text" name="termo" required><br><br>
                        <button type="submit">Pesquisar</button>
                    </form>
                    <?php
                } elseif ($acao == 'buscar' && isset($_POST['termo'])) {
                    $termo = trim($_POST['termo']);
                    if ($termo !== '') {
                        pesquisarProduto($termo);
                    } else {
                        echo "Digite um termo para pesquisar.<br>";
                    }
                } else {
                    echo "Selecione uma ação válida no menu.<br>";
                };

            ?>
            
        </form>

    </main>
</body>
</html>