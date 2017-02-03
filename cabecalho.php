<?php
    require_once("logicaUsuario.php");
    require_once("mostraMensagem.php");
?>

<html>
    <head>
        <link rel="shortcu icon" href="img/chatIco.png">
        <link rel="stylesheet" type="text/css" href="css/geral.css">
        <link rel="stylesheet" type="text/css" href="css/loginFormulario.css">
        <link rel="stylesheet" type="text/css" href="css/cabecalho.css">
        <link rel="stylesheet" type="text/css" href="css/menuLateral.css">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
        <meta charset="utf-8">
        <title>EChat</title>
    </head>

    <body>

        <header>
            <nav class="nav">


                <ul class="toolbar">
                    <li class="home">
                            <a href="#" id="home">E-Chat</a>
                    </li>
                    <li><a href="#" id="criar">Criar</a></li>                   
                    <li><a href="#" id="procurar">Procurar</a></li>
                    <li class="nomeUser">
                        <?=(isset($_SESSION['usuario_logado'])? $_SESSION['usuario_logado'] : "")?>
                    </li>
                    <li class="sair">
                        <?= (isset($_SESSION['usuario_logado'])) ? "<a href='sair.php'>Sair</a>" : "<a href='#'>Sair</a>" ?>
                    </li>
                </ul>

            </nav>
        </header>
<?php require_once("menuLateral.php"); ?>
<?php require_once("salasFormulario.php");?>
<?php require_once("procurar.php");?>
            <?=mostrarMensagemUsuario()?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/cabecalho.js"></script>
</body>
</html>