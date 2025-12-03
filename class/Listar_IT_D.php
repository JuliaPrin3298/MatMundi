<?php
include_once __DIR__ . '/Conectar.php';

// LISTA O RANKING ILHA DO TESOURO DIFÍCIL

class Listar_IT_D
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
            SELECT u.nome_usuario, jg.nome_jogo, jg.dificuldade, jgr.pontuacao
            FROM usuario u
            JOIN jogar jgr ON u.id_usuario = jgr.id_usuario
            JOIN jogo jg ON jg.id_jogo = jgr.id_jogo
            WHERE jg.dificuldade = 'Dificil'
            ORDER BY jgr.pontuacao DESC 
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
