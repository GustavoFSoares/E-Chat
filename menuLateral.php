    <div class="menuLateral">
        <div class="links">
            <?php
                require_once('conecta.php');
                require_once('logicaUsuario.php');
                require_once('class/UsuarioDAO.php');
                require_once('class/SalaDAO.php');

                $nomeUser = $_SESSION['usuario_logado'];
                $usuarioDAO = new UsuarioDAO($conecta);
                $userDAO = $usuarioDAO->selecionaId($nomeUser);
                $idUser = $userDAO['id_usuario'];

                $salaDAO = new SalaDAO($conecta);
                $idSalas = $salaDAO->salaporId($idUser); //salapoId
                ?>

                <ul>

                <?php
                foreach ($idSalas as $id) 
                {
                ?>
                    <li><a href="sala.php?id=<?= $id['id_sala'] ?>"><?= $id['nome']?></a></li>

                <?php
                }
                ?>
                </ul>
        </div>
    </div> 
