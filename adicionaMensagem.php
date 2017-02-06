<?php
    require_once('conecta.php');
    require_once('logicaUsuario.php');
    require_once('class/MensagemDAO.php');

    $idSala = $_POST['idSala'];
    $mensagem = $_POST['mensagem'];

    $mensagemDAO = new MensagemDAO($conecta);

    if ($mensagem != null) {

        $mensagemDAO->adicionaMensagem($mensagem, $idSala);

    }
