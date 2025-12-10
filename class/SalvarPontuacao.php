<?php
session_start();
header('Content-Type: application/json');

include_once 'Conectar.php'; // conexão $conexao

if (!isset($_SESSION['id_usuario'])) {
    echo json_encode(['sucesso' => false, 'erro' => 'Usuário não logado']);
    exit;
}

$id_usuario = $_SESSION['id_usuario'];
$id_jogo = $_POST['id_jogo'] ?? null;
$pontuacao = $_POST['pontuacao'] ?? null;

if ($id_jogo === null || $pontuacao === null || $pontuacao === '') {
    echo json_encode(['sucesso' => false, 'erro' => 'Dados inválidos']);
    exit;
}


// Primeiro, pega a pontuação atual do usuário nesse jogo
$sqlCheck = "SELECT pontuacao FROM jogar WHERE id_usuario = ? AND id_jogo = ?";
$stmt = $conexao->prepare($sqlCheck);
$stmt->bind_param("ii", $id_usuario, $id_jogo);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Já existe pontuação, atualiza se for maior
    $row = $result->fetch_assoc();
    if ($pontuacao > $row['pontuacao']) {
        $sqlUpdate = "UPDATE jogar SET pontuacao = ? WHERE id_usuario = ? AND id_jogo = ?";
        $stmt = $conexao->prepare($sqlUpdate);
        $stmt->bind_param("dii", $pontuacao, $id_usuario, $id_jogo);
        $stmt->execute();
    }
} else {
    // Não existe, insere
    $sqlInsert = "INSERT INTO jogar (pontuacao, id_usuario, id_jogo) VALUES (?, ?, ?)";
    $stmt = $conexao->prepare($sqlInsert);
    $stmt->bind_param("dii", $pontuacao, $id_usuario, $id_jogo);
    $stmt->execute();
}

// Retorna ranking atualizado (opcional)
$sqlRanking = "
    SELECT u.nome_usuario, g.nome_jogo, j.pontuacao
    FROM usuario u
    JOIN jogar j ON u.id_usuario = j.id_usuario
    JOIN jogo g ON g.id_jogo = j.id_jogo
    ORDER BY j.pontuacao DESC
    LIMIT 10
";
$ranking = $conexao->query($sqlRanking)->fetch_all(MYSQLI_ASSOC);

echo json_encode(['sucesso' => true, 'ranking' => $ranking]);
