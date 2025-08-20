<?php
session_start();

$usuarios = [
    "joao" => "12345",
    "maria" => "abcde",
    "ana" => "senha123"
];

$limiteTentativas = 3;

if (!isset($_SESSION['tentativas'])) {
    $_SESSION['tentativas'] = 0;
}

function validarLogin($usuario, $senha, $usuarios) {
    if (isset($usuarios[$usuario]) && $usuarios[$usuario] === $senha) {
        return true;
    }
    return false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logar'])) {
    $usuario = trim($_POST['usuario']);
    $senha = trim($_POST['senha']);

    if ($_SESSION['tentativas'] >= $limiteTentativas) {
        echo "Você excedeu o número de tentativas permitidas. Tente novamente mais tarde.";
        exit();
    }

    if (validarLogin($usuario, $senha, $usuarios)) {
  
        echo "Bem-vindo, " . htmlspecialchars($usuario) . "! Você fez login com sucesso.";
        $_SESSION['tentativas'] = 0;

    } else {
  
        $_SESSION['tentativas']++;
        $restam = $limiteTentativas - $_SESSION['tentativas'];
        echo "Usuário ou senha incorretos. Tentativas restantes: $restam";
    }
} else {
    echo "Acesso inválido.";
}
?>