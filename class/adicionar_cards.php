<?php
require_once "../conexao.php";

class Cadastro_Tickets
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = Conexao::conectar();
    }

    public function cadastrar_tickets($title, $subject, $responsible)
    {
        try {
            $sql = "INSERT INTO tasks (title, subject, responsible) VALUES (?, ?, ?)";
            $stm = $this->conexao->prepare($sql);
            return $stm->execute([$title, $subject, $responsible]);
        } catch (PDOException $e) {
            echo "Erro ao cadastrar: " . $e->getMessage();
            return false;
        }
    }
}
