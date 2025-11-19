<?php
include_once __DIR__ . '/Conectar.php';

class Listar
{
    private $conexao;

    public function __construct()
    {
        // pega a conexão criada no Conectar.php
        global $conexao;
        $this->conexao = $conexao;
    }

    public function listarTop($limite = 10)
    {
        // segurança básica
        $limite = intval($limite);

        $sql = "
            SELECT u.nome_usuario, g.nome_jogo, j.pontuacao
            FROM usuario u
            JOIN jogar j ON u.id_usuario = j.id_usuario
            JOIN jogo g ON g.id_jogo = j.id_jogo
            ORDER BY j.pontuacao DESC
            LIMIT $limite
        ";

        $resultado = $this->conexao->query($sql);

        if (!$resultado) {
            echo "Erro na consulta: " . $this->conexao->error;
            return [];
        }

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
}
?>
