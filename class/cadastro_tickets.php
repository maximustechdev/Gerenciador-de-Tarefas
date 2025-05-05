<?php
require_once "../conexao.php";

class Cadastro_Tickets
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = Conexao::conectar();
    }

    public function cadastrar_tickets($title, $description, $status)
    {
        try {
            $sql = "INSERT INTO tickets (title, description, status) VALUES ('$title', '$description', '$status')";
            $stm = $this->conexao->prepare($sql);
            return $stm->execute();
        } catch (PDOException $e) {
            echo "Erro ao cadastrar: " . $e->getMessage();
            return false;
        }
    }
}
