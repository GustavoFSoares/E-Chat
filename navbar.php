        <header>
            <nav class="nav">


                <ul class="toolbar">

                        <li class="home">
                                <a href="logado.php">E-Chat</a>
                        </li>
                        <li><a href="salasFormulario.php">Criar</a></li>
                        <li><a href="procurar.php">Procurar</a></li>

                    <li class="userNome">
                            <?=(isset($_SESSION['usuario_logado'])? $_SESSION['usuario_logado'] : "")?>@localhost
                    </li>
                    <li class="sair">
                        <?= (isset($_SESSION['usuario_logado'])) ? "<a href='sair.php'>Sair</a>" : "<a href='#'>Sair</a>" ?>
                    </li>
                </ul>

            </nav>
        </header>
