<?php
    require_once('conecta.php');
    require_once('logicaUsuario.php');
    require_once('class/UsuarioDAO.php');


    $userNome = $_SESSION['usuario_logado'];
    $usuarioDAO = new UsuarioDAO($conecta);

    $usuarioDAO->removeUsuario($userNome);
    session_destroy();
    header("Location: index.php");
