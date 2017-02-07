 <header>
            <nav class="nav">


                <ul class="toolbar">
                    <li class="home">
                            <a href="#" id="home">E-Chat</a>
                    </li>
                    <li><a href="#" id="criar">Criar</a></li>
                    <li><a href="#" id="procurar">Procurar</a></li>
                    <li class="userNome">
                            <?=(isset($_SESSION['usuario_logado'])? $_SESSION['usuario_logado'] : "")?>@localhost
                    </li>
                    <li class="sair">
                        <?= (isset($_SESSION['usuario_logado'])) ? "<a href='sair.php'>Sair</a>" : "<a href='#'>Sair</a>" ?>
                    </li>
                </ul>

            </nav>
        </header>
