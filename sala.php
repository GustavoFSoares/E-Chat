<?php   include_once("logado.php"); 
        require_once("class/MensagemDAO.php");

    $salaDAO = new SalaDAO($conecta);
    $usarioDAO = new UsuarioDAO($conecta);
    $userId = $usuarioDAO->selecionaId($_SESSION['usuario_logado']);
    $mensagemDAO = new MensagemDAO($conecta);

    $userId = $usuarioDAO->selecionaId($_SESSION['usuario_logado']);
    $salaId = $_GET['id'];

    $salaDAO = new SalaDAO($conecta);
    

    if ($salaDAO->verifica($userId, $salaId)) {

        $mensagens = $mensagemDAO->exibirMensagem($salaId);

        foreach ($mensagens as $mensagem) { ?>
            <ol>
                <?=$usuarioDAO->buscaNome($mensagem['fk_usuario'])?>
                <div id="mensagem"><?=$mensagem['msg']?></div>
            <ol>     <?php
        }

    } else {
        $salaDAO->entrarSala($salaId, $userId);
        header("location:sala.php?id=$salaId");
        die();
    }
    echo "teste";
    ?>
    
    <form action="adicionaMensagem.php" method="POST">
        <input type="hidden" name="idSala" value="<?=$salaId?>">
        <textarea name="mensagem" placeholder="Digite sua mensagem"></textarea>
        <button type="submit">Envia</button>
    </form>