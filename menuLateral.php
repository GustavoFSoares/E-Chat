    <div class="menuLateral">
        <div class="links">
            <?php
                require_once('conecta.php');
                require_once('logicaUsuario.php');
                require_once('class/UsuarioDAO.php');
                require_once('class/SalaDAO.php');

                $userNome = $_SESSION['usuario_logado'];
                $usuarioDAO = new UsuarioDAO($conecta);
                $userId = $usuarioDAO->selecionaId($userNome);


                $salaDAO = new SalaDAO($conecta);
                $salasId = $salaDAO->salaporId($userId); //salapoId
                ?>
                <h2><span><</span> Minhas salas <span>></span></h2>
                <ul>


                <?php
                foreach ($salasId as $id)
                {
                ?>
                    <li>
                        <a href="sala.php?id=<?= $id['id_sala'] ?>">~ <?= $id['nome']?></a>
                    </li>

                <?php
                }
                ?>
                </ul>
                <h2><span>< /</span> Minhas salas <span>></span></h2>
        </div>
    </div>
