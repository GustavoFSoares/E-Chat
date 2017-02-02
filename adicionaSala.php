<?php
    require_once('conecta.php');
    require_once('logicaUsuario.php');
    require_once('class/UsuarioDAO.php');
    require_once('class/SalaDAO.php');

    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];

    $salaDAO = new SalaDAO($conecta);

    if ($nome != null) {

        if ($salaDAO->adicionaSala($nome, $tipo)) {
          header("location: index.php");
        } else {

          echo "Nao deu!";

        }
    }
