<?php
    require_once('conecta.php');
    require_once('logicaUsuario.php');
    require_once('class/UsuarioDAO.php');


    $userNome = $_SESSION['usuario_logado'];
    $usuarioDAO = new UsuarioDAO($conecta);

    $usuarioDAO->removeUsuario($nome);
    session_destroy();
    session_start();
    $_SESSION['danger'] = "Usuario ".$userNome." deslogado!";

    header("Location: index.php");
    die();
