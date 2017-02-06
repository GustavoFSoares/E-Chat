<?php
    require_once('conecta.php');
    require_once('logicaUsuario.php');
    require_once('class/MensagemDAO.php');

    $salaId = $_POST['salaId'];
    $mensagem = $_POST['mensagem'];

    $mensagemDAO = new MensagemDAO($conecta);

    if ($mensagem != null) {

        $mensagemDAO->adicionaMensagem($mensagem, $salaId);
        header("location: sala.php?salaId=$salaId");
    }
