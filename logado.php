<?php include("cabecalho.php");?>
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

    <div class="content">
        <?php require_once("salasFormulario.php");?>
        <?php require_once("procurar.php");?>
    </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/cabecalho.js"></script>
</body>
</html>