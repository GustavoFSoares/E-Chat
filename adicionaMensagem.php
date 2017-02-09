<?php
    require_once('conecta.php');
    require_once('logicaUsuario.php');
    require_once('class/MensagemDAO.php');
    require_once('class/UsuarioDAO.php');

    header('content-type: application/json; charset=utf-8');
    header("access-control-allow-origin: *");

    $usuarioDAO = new UsuarioDAO($conecta);
    $userId = $usuarioDAO->selecionaId($_SESSION['usuario_logado']);

    $mensagemDAO = new MensagemDAO($conecta);
    $idSala = $_POST['id'];

    if (isset($_POST['msg']) && !empty($_POST['msg'])){ 

        $mensagem = $_POST['msg'];


        if ($mensagem != null) {

            $mensagemDAO->adicionaMensagem($mensagem, $idSala, $userId);
           
        } else {

            $mensagemDAO->adicionaMensagem("", $idSala, $userId);
            
        }
    }


    $arr = $mensagemDAO->exibirMensagem($idSala);
    echo json_encode($arr);
