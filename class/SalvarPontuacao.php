<?php
include("class/Conectar.php");
session_start(); 

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $pontuacao = $_POST["pontuacao"] ?? 0;
    $id_jogo = $_POST["id_jogo"] ?? null;

    // usuário da sessão
    $id_usuario = $_SESSION["id_usuario"] ?? null;

    if (!$id_usuario || !$id_jogo) {
        echo "ERRO";
        exit;
    }

    $sql = "INSERT INTO jogar (pontuacao, id_usuario, id_jogo)
            VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("dii", $pontuacao, $id_usuario, $id_jogo);

    if ($stmt->execute()) {
        echo "OK";
    } else {
        echo "ERRO";
    }
}
