<?php
include("Conectar.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $verifica = $conn->prepare("SELECT * FROM usuario WHERE email_usuario = ?");
    $verifica->bind_param("s", $email);
    $verifica->execute();
    $resultado = $verifica->get_result();

    if ($resultado->num_rows > 0) {
        echo "<script>alert('Esse e-mail já está cadastrado!'); window.location='../index.php#loca';</script>";
    } else {
        $sql = $conn->prepare("INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario) VALUES (?, ?, ?)");
        $sql->bind_param("sss", $nome, $email, $senha);

        if ($sql->execute()) {
            echo "<script>alert('Cadastro realizado com sucesso!'); window.location='../index.php#loca';</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar!'); window.location='../index.php#loca';</script>";
        }
    }
}
?>
