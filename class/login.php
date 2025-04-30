<?php

require_once "../conexao.php";

class Login
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = Conexao::conectar();
    }

    public function verificarLogin($email, $senha)
    {
        $sql = "SELECT * FROM users WHERE email = :email AND password = :senha";
        $stm = $this->conexao->prepare($sql);
        $stm->execute();
        if (!$sql) {
            echo "<script>console.log('Erro ao verificar login')</script>";
        } else {
            return $stm->fetch(PDO::FETCH_ASSOC);
        }
    }
}
