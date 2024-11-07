<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo "<script>alert('Você precisa estar logado para comentar.'); window.location.href='login.php';</script>";
    exit;
}

$arquivo = 'comentarios.json';

$comentarios = [];
if (file_exists($arquivo)) {
    $conteudo = file_get_contents($arquivo);
    $comentarios = json_decode($conteudo, true);
}

if (isset($_POST['comentario'])) {
    $novoComentario = [
        "usuario" => $_SESSION['usuario'], 
        "comentario" => $_POST['comentario'],
        "data" => date(format: "d-m-y")
    ];
    $comentarios[] = $novoComentario;

    file_put_contents($arquivo, json_encode($comentarios, JSON_PRETTY_PRINT));

    echo "<script>window.location.href = document.referrer;</script>";
    exit;
}
?>
