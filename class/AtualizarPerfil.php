<?php
session_start();
include("Conectar.php");

if (!isset($_SESSION["id_usuario"])) {
    header("Location: index.php");
    exit();
}

$id = $_SESSION["id_usuario"];
$novoNome = $_POST["nome_usuario"] ?? "";

if ($novoNome === "") {
    header("Location: perfil.php?erro=1");
    exit();
}

$sql = $conexao->prepare("UPDATE usuario SET nome_usuario = ? WHERE id_usuario = ?");
$sql->bind_param("si", $novoNome, $id);

if ($sql->execute()) {
    header("Location: ../perfil.php");
    exit;
} else {
    header("Location: perfil.php?erro=2");
}
