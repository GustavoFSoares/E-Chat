<?php
    require_once('conecta.php');
    require_once('logicaUsuario.php');
    require_once('class/UsuarioDAO.php');
    require_once('class/SalaDAO.php');

    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $nomeUser = $_SESSION['usuario_logado'];

    $salaDAO = new SalaDAO($conecta);
    $usuarioDAO = new UsuarioDAO($conecta);
    $usuario = $usuarioDAO->selecionaId($nomeUser);
    $id = $usuario['id_usuario'];

    if ($nome != null) {

        if ($salaDAO->adicionaSala($nome, $tipo, $id)) {
          header("location: index.php");
        } else {

          echo "Nao deu!";

        }
    }
