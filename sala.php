<?php
    include_once("logado.php");
    require_once("class:/MensagemDAO");

    $salaDAO = new SalaDAO($conecta);
    $usarioDAO = new UsuarioDAO($conecta);
    $mensagemDAO = new MensagemDAO($conecta);

    $userId = $usuarioDAO->selecionaId($_SESSION['usuario_logado']);
    $salaId = $_GET['id'];


    if ($salaDAO->verifica($userId, $salaId)) {
    } else {
        $salaDAO->entrarSala($salaId, $userId);
        header("location:sala.php?id=$salaId");
        die();
    }

    $mensagens = $mensagemDAO->exibirMensagem($salaId);
    foreach ($mensagens as $mensagem) { ?>
        <ol>
            <?=$UsuarioDAO->buscaNome($mensagem['id_usuario'])?>
            <div id="mensagem"><?=$mensagem['msg']?></div>
        <ol>     <?php
    }   ?>
    
    <form action="adicionaMensagem.php" method="POST">
        <input type="hidden" name="idSala" value="<?=$salaId?>">
        <textarea name="mensagem"> Digite um mensagem</textarea>
        <button type="submit">Envia</button>
    </form>
