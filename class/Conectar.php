<?php
$host = "localhost";
$user = "root";
$pass = "1234";
$dbname = "matmundi";

$conexao = new mysqli($host, $user, $pass, $dbname);
if ($conexao->connect_error) {
    error_log("Erro de conexão: " . $conexao->connect_error);
    die("Erro ao conectar ao banco de dados."); // mensagem genérica
}

?>

