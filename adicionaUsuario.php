<?php
    require_once('conecta.php');
    require_once('logicaUsuario.php');
    require_once('class/UsuarioDAO.php');

    $userNome = $_POST['userNome'];

    $usuarioDAO = new UsuarioDAO($conecta);

    if ($userNome != null) {

        if ($usuarioDAO->adicionaUsuario($userNome)) {
          logarUsuario($userNome);
          header("location: index.php");
        } else {

          echo "Nao deu!";

        }
    }
