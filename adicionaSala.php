<?php
    require_once('conecta.php');
    require_once('logicaUsuario.php');
    require_once('class/UsuarioDAO.php');
    require_once('class/SalaDAO.php');

    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];


    $salaDAO = new SalaDAO($conecta);
    $usuarioDAO = new UsuarioDAO($conecta);
    $id = $usuarioDAO->selecionaId($_SESSION['usuario_logado']);

    if ($nome != null) {

        if ($salaDAO->adicionaSala($nome, $tipo, $id)) {
          header("location: index.php");
        } else {

          echo "Nao deu!";

        }
    }
