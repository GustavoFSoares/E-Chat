<?php
    require_once('conecta.php');
    require_once('logicaUsuario.php');
    require_once('class/UsuarioDAO.php');
    require_once('class/SalaDAO.php');

    $salaNome = $_POST['nome'];
    $salaTipo = $_POST['tipo'];
    $userNome = $_SESSION['usuario_logado'];


    $usuarioDAO = new UsuarioDAO($conecta);
    $userId = $usuarioDAO->selecionaId($userNome);

    $salaDAO = new SalaDAO($conecta);

    if ($salaNome != null) {

        if ($salaDAO->adicionaSala($salaNome, $salaTipo, $userId)) {
            $salaId = $salaDAO->selecionaId($salaNome);
            $salaDAO->entrarSala($salaId, $userId);
            header("location: index.php");
        } else {

            echo "Nao deu!";

        }
    }
