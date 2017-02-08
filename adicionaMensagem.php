<?php
    require_once('conecta.php');
    require_once('logicaUsuario.php');
    require_once('class/MensagemDAO.php');
    require_once('class/UsuarioDAO.php');

    $usuarioDAO = new UsuarioDAO($conecta);
    $userId = $usuarioDAO->selecionaId($_SESSION['usuario_logado']);

    $idSala = $_POST['id'];
    $mensagem = $_POST['msg'];

    $mensagemDAO = new MensagemDAO($conecta);

    if ($mensagem != null) {

        $mensagemDAO->adicionaMensagem($mensagem, $idSala, $userId);
       // header("location: sala.php?id=$idSala");
    } else {
        $mensagemDAO->adicionaMensagem("", $idSala, $userId);
        //header("location: sala.php?id=$idSala");
    }

    $arr = $mensagemDAO->exibirMensagem($idSala);

    echo json_encode($arr);
