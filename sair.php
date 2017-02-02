<?php
    require_once('conecta.php');
    require_once('logicaUsuario.php');
    require_once('class/UsuarioDAO.php');

    $nome = $_SESSION['usuario_logado'];
    $usuarioDAO = new usuarioDAO($conecta);

    $usuarioDAO->removeUsuario($nome);
    session_destroy();
    header("Location: index.php");
    die();
