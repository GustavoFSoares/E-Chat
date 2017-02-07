<?php
    require_once('conecta.php');
    require_once('logicaUsuario.php');
    require_once('class/MensagemDAO.php');
    require_once('class/UsuarioDAO.php');

    $usuarioDAO = new UsuarioDAO($conecta);
    $userId = $usuarioDAO->selecionaId($_SESSION['usuario_logado']);
    echo $userId;
    
    $idSala = $_POST['idSala'];
    $mensagem = $_POST['mensagem'];

    $mensagemDAO = new MensagemDAO($conecta);

    if ($mensagem != null) {

        $mensagemDAO->adicionaMensagem($mensagem, $idSala, $userId);

    }
