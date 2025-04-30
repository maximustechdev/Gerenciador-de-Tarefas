<?php
require_once "../conexao.php";

class Cadastro
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = Conexao::conectar();
    }

    public function cadastro($name, $email, $password)
    {
        try {
            $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
            $stm = $this->conexao->prepare($sql);
            return $stm->execute();
        } catch (PDOException $e) {
            echo "Erro ao cadastrar: " . $e->getMessage();
            return false;
        }
    }
}
