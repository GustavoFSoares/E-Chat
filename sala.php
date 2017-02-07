<?php
    include_once("logado.php");
    require_once("class/MensagemDAO.php");

    $salaDAO = new SalaDAO($conecta);
    $usarioDAO = new UsuarioDAO($conecta);
    $mensagemDAO = new MensagemDAO($conecta);

    $userId = $usuarioDAO->selecionaId($_SESSION['usuario_logado']);
    $salaId = $_GET['salaId'];


    if ($salaDAO->verifica($userId, $salaId)) {
<<<<<<< HEAD
        echo "load nas mensagens da sala";
    } else {
        $salaDAO->entrarSala($salaId, $userId);

=======
    } else {
        $salaDAO->entrarSala($salaId, $userId);
        header("location:sala.php?id=$salaId");
        die();
>>>>>>> e46e29eae7a6cab5a15a9831df2f4739fd37c48f
    }

    $mensagens = $mensagemDAO->exibirMensagem($salaId);
    foreach ($mensagens as $mensagem) { ?>
        <ol>
            <?=$UsuarioDAO->buscaNome($mensagem['id_usuario'])?>
            <div id="mensagem"><?=$mensagem['msg']?></div>
        <ol>     <?php
    }   ?>

    <form action="adicionaMensagem.php" method="POST">
        <input type="hidden" name="salaId" value="<?=$salaId?>">
        <textarea name="mensagem"> Digite um mensagem</textarea>
        <button type="submit">Envia</button>
    </form>
