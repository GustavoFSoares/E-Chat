<?php
    require_once('conecta.php');
    require_once('logicaUsuario.php');
    require_once('class/UsuarioDAO.php');
    require_once('class/SalaDAO.php');

    $nomeSala = $_POST['nome'];
    $tipoSala = $_POST['tipo'];
    $nomeUser = $_SESSION['usuario_logado'];


    $usuarioDAO = new UsuarioDAO($conecta);
    $iduser = $usuarioDAO->selecionaId($nomeUser);

    $salaDAO = new SalaDAO($conecta);

    if ($nomeSala != null) {

        if ($salaDAO->adicionaSala($nomeSala, $tipoSala, $idUser)) {
            $idSala = $salaDAO->selecionaId($nomeSala);
            
            $salaDAO->entrarSala($idSala, $idUser);
            header("location: index.php");
        } else {

          echo "Nao deu!";

        }
    }
