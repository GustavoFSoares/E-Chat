<?php   include_once("logado.php");
        require_once("class/MensagemDAO.php");
        ?>
    <div class="content">
    <div class="chat">
        <?php
    $salaDAO = new SalaDAO($conecta);
    $usuario_logadoarioDAO = new UsuarioDAO($conecta);
    $userId = $usuarioDAO->selecionaId($_SESSION['usuario_logado']);
    $mensagemDAO = new MensagemDAO($conecta);

    $userId = $usuarioDAO->selecionaId($_SESSION['usuario_logado']);
    $salaId = $_GET['id'];

    $salaDAO = new SalaDAO($conecta);

    ?>
<div id="msg_chat">

    <?php 
    if ($salaDAO->verifica($userId, $salaId)) {

        $mensagens = $mensagemDAO->exibirMensagem($salaId); ?>

        <ol class="mensagens-list">
        <?php foreach ($mensagens as $mensagem) { ?>
                <div id="mensagem">
                    <span class="data"><?= $mensagem['data']."  -!-  "?></span>
                    <span class="nome"><?=$usuarioDAO->buscaNome($mensagem['fk_usuario'])." : "?></span>
                    <span class="msg"><?= $mensagem['msg']?></span>
                </div> <?php
        } ?>
    </ol> <?php

    } else {
        $salaDAO->entrarSala($salaId, $userId);
        header("location: http://localhost/echat/sala.php?id=$salaId");
        die;
    }
    ?>

    <form action="" method="POST">

        <input id="idSala" type="hidden" name="idSala" value="<?=$salaId?>">
        <span><?= $_SESSION['usuario_logado'] . ": ~$"?></span>
        <input id="msg" class="mensagem" name="mensagem" checked="checked" placeholder="Escreva aqui !"
        style="height: 30px; width: 600px;">

        </input>

        <a id="send" type="submit" class="btn-enviar">INSERT</a>

    </form>
    </div>

</div>
</div>
