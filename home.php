<?php
session_start();
if (!isset($_SESSION["id_usuario"])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo ao MatMundi!</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
    <nav>
        <p>Bem-vindo, <?php echo $_SESSION["nome_usuario"]; ?> 🎉</p>
        <a href="class/logout.php">Sair</a>
    </nav>

    <h1>🌎 MatMundi - Continue sua jornada!</h1>
</body>
</html>
