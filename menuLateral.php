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
                $idSalas = $salaDAO->salaporId($idUser);
                ?>

                <table>

                <?php
                foreach ($idSalas as $id) 
                {
                ?>
                    <tr><td><?= $id['nome']?></td></tr>

                <?php
                }
                ?>
                </table>
        </div>
    </div> 
