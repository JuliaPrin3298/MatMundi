<?php
include_once __DIR__ . '/Conectar.php';

class Listar
{
    private $con;

    public function listarTop($limite = 10)
    {
        try {
            $this->con = Conectar::getInstance();

            $sql = "SELECT u.nome_usuario, g.nome_jogo, j.pontuacao
                    FROM usuario u
                    JOIN jogar j ON u.id_usuario = j.id_usuario
                    JOIN jogo g ON g.id_jogo = j.id_jogo
                    ORDER BY j.pontuacao DESC
                    LIMIT :limite";

            $stmt = $this->con->prepare($sql);
            $stmt->bindValue(':limite', $limite, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro de banco de dados: " . $e->getMessage();
        }
    }
}
?>
