<?php

require_once "../cnd.php";
require_once "../class/adicionar_cards.php";
$adicionarCard = new Cadastro_Tickets();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["form_informacoes"])) {
    $title = $_POST["title_card"];
    $subject = $_POST["tarefa_card"];
    $responsible = $_POST["responsavel_card"];

    $adicionarCard->cadastrar_tickets($title, $subject, $responsible);
    echo "ok";
}
