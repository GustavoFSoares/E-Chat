<?php
    require_once('conecta.php');
    require_once('logicaUsuario.php');
    require_once('class/UsuarioDAO.php');

    $nome = $_POST['nome'];

    $usuarioDAO = new UsuarioDAO($conecta);

    if ($nome != null) {

        if ($usuarioDAO->adicionaUsuario($nome)) {
          logarUsuario($nome);
          header("location: index.php");
        } else {
              
          echo "Nao deu!"

        }
      }
