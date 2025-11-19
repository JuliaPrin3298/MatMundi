<?php
include("class/Conectar.php");

$mensagem = ""; // Só pra mostrar o retorno na mesma página

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = $_POST["txtnome"] ?? "";
    $email = $_POST["txtemail"] ?? "";
    $senha = $_POST["txtsenha"] ?? "";

    if ($nome != "" && $email != "" && $senha != "") {

        $sql = "INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario)
                VALUES ('$nome', '$email', '$senha')";

        if ($conexao->query($sql) === TRUE) {
            $mensagem = "Usuário cadastrado com sucesso!";
        } else {
            $mensagem = "Erro ao cadastrar: " . $conexao->error;
        }
    } else {
        $mensagem = "Preencha todos os campos!";
    }
}
?>
