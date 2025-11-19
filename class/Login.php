<?php
session_start();
include("Conectar.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["txtnome"];
    $senha = $_POST["txtsenha"];

    $sql = $conexao->prepare("SELECT * FROM usuario WHERE nome_usuario = ? AND senha_usuario = ?");
    $sql->bind_param("ss", $nome, $senha);
    $sql->execute();
    $resultado = $sql->get_result();

    if ($resultado->num_rows == 1) {
        $usuario = $resultado->fetch_assoc();
        $_SESSION["id_usuario"] = $usuario["id_usuario"];
        $_SESSION["nome_usuario"] = $usuario["nome_usuario"];
        header("Location: ../home.php");
    } else {
        echo "<script>alert('Nome ou senha incorretos!'); window.location='../index.php#loca';</script>";
    }
}
?>
