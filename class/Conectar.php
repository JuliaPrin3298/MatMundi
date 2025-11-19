<?php

<<<<<<< HEAD
$conexao = new mysqli($host, $user, $pass, $dbname);

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
=======
class Conectar extends PDO {

    private static $instancia; // singleton

    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $db = "matmundi"; // coloque seu DB correto

    private function __construct() {
        try {
            parent::__construct("mysql:host=$this->host;dbname=$this->db;charset=utf8", $this->usuario, $this->senha);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro de conexão: " . $e->getMessage());
        }
    }

    // pega a instância única
    public static function getInstance() {
        if (!isset(self::$instancia)) {
            self::$instancia = new Conectar();
        }
        return self::$instancia;
    }

    // executa query simples
    public function sql($query, $params = []) {
        $stmt = $this->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }
>>>>>>> a79907ff51adc113a712848bf23fde8e6c28d04d
}
?>
