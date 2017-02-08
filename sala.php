<?php   include_once("logado.php"); 
        require_once("class/MensagemDAO.php");
        ?>
    <div class="chat">
        <?php
    $salaDAO = new SalaDAO($conecta);
    $usuario_logadoarioDAO = new UsuarioDAO($conecta);
    $userId = $usuarioDAO->selecionaId($_SESSION['usuario_logado']);
    $mensagemDAO = new MensagemDAO($conecta);

    $userId = $usuarioDAO->selecionaId($_SESSION['usuario_logado']);
    $salaId = $_GET['id'];

    $salaDAO = new SalaDAO($conecta);
    
    if ($salaDAO->verifica($userId, $salaId)) {

        $mensagens = $mensagemDAO->exibirMensagem($salaId);
        foreach ($mensagens as $mensagem) { ?>
            <ol>
                <li id="mensagem">
                    <span class="data"><?= $mensagem['data']."  -!-  "?></span>
                    <span class="nome"><?=$usuarioDAO->buscaNome($mensagem['fk_usuario'])." : "?></span>
                    <span class="msg"><?= $mensagem['msg']?></span>
                    
                </li>
            </ol>     <?php
        }

    } else {
        $salaDAO->entrarSala($salaId, $userId);
    }
    ?>
    
    <form action="adicionaMensagem.php" method="POST">
        <input type="hidden" name="idSala" value="<?=$salaId?>">
        <span><?= $_SESSION['usuario_logado'] . ": ~$"?></span> <input class="mensagem" name="mensagem" checked="checked">  </input>
        <button class="btn-enviar">INSERT</button>
    </form>
    </div>