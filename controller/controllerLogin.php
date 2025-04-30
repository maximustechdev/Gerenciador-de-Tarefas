<?php

require_once "../cnd.php";
require_once __DIR__ . '/../class/Login.php';

$login = new Login();

if ($_POST) {
    if ($_POST["form_login"]) {
        $email = $_POST["input_email"];
        $password = $_POST["input_password"];

        $response = $login->verificarLogin($email, $password);

        echo "<script>console.log('Adicionamente realizado!'</script>";

        echo "<script>
                $(documente).ready(function () {
                    Swal.fire({
                    title: 'Success!',
                    text: 'Login realizado com sucesso!',
                    icon: 'success'
                    });
                });
            </script>";
    }
}
