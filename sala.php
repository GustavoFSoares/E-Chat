<?php include_once("logado.php"); 
    
    $usarioDAO = new UsuarioDAO($conecta);
    $userId = $usuarioDAO->selecionaId($_SESSION['usuario_logado']);

    $salaId = $_GET['id'];

    $salaDAO = new SalaDAO($conecta);
    

    if ($salaDAO->verifica($userId, $salaId)) {
        echo "ja ta na sala";
    } else {
        $salaDAO->entrarSala($salaId, $userId);
    }

?>