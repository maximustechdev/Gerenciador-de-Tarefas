<?php

require_once "../cnd.php";
require_once "../class/cadastro.php";

$cadastro = new Cadastro();

if ($_POST) {
    if ($_POST["form_cadastro"]) {
        $name = $_POST["input_name"];
        $email = $_POST["input_email"];
        $password = $_POST["input_password"];
        // $is_admin = $_POST["input_is_admin"];


        $response = $cadastro->cadastro($name, $email, $password);

        echo "<script>console.log('Adicionamente realizado!'</script>";

        echo "<script>
                $(documente).ready(function () {
                    Swal.fire({
                    title: 'Success!',
                    text: 'Cadastro realizado com sucesso!',
                    icon: 'success'
                    });
                });
            </script>";
    }
}
