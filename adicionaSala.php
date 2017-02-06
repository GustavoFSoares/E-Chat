<?php
    require_once('conecta.php');
    require_once('logicaUsuario.php');
    require_once('class/UsuarioDAO.php');
    require_once('class/SalaDAO.php');

    $nomeSala = $_POST['nome'];
    $tipoSala = $_POST['tipo'];
    $nomeUser = $_SESSION['usuario_logado'];


    $usuarioDAO = new UsuarioDAO($conecta);
    $user = $usuarioDAO->selecionaId($nomeUser);
    $idUser = $user['id_usuario'];

    $salaDAO = new SalaDAO($conecta);

    if ($nomeSala != null) {

        if ($salaDAO->adicionaSala($nomeSala, $tipoSala, $idUser)) {
            $sala = $salaDAO->selecionaId($nomeSala);
            $idSala = $sala['id_sala'];
            $salaDAO->entrarSala($idSala, $idUser);
            header("location: index.php");
        } else {

          echo "Nao deu!";

        }
    }
