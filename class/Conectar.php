<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "matmundi";

$conexao = new mysqli($host, $user, $pass, $dbname);

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}
?>
