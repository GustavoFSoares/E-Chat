 <header>
            <nav class="nav">


                <ul class="toolbar">
                    <?php if (!isset($_GET['id'])) { ?>
                        <li class="home">
                                <a href="#" id="home">E-Chat</a>
                        </li>
                        <li><a href="#" id="criar">Criar</a></li>
                        <li><a href="#" id="procurar">Procurar</a></li>
                    <?php } else { ?>
                            <li class="home">
                            <a href="logado.php" id="home">E-Chat</a>
                            </li>
                            <li><a href="logado.php" id="criar">Criar</a></li>
                            <li><a href="logado.php" id="procurar">Procurar</a></li>
                                <?php } ?>
                    <li class="userNome">
                            <?=(isset($_SESSION['usuario_logado'])? $_SESSION['usuario_logado'] : "")?>@localhost
                    </li>
                    <li class="sair">
                        <?= (isset($_SESSION['usuario_logado'])) ? "<a href='sair.php'>Sair</a>" : "<a href='#'>Sair</a>" ?>
                    </li>
                </ul>

            </nav>
        </header>
