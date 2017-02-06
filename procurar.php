
    <div class="lista">
        <div>
            <?php
                require_once('conecta.php');
                require_once('class/SalaDAO.php');

                $salaDAO = new SalaDAO($conecta);
                $idSalas = $salaDAO->listaSala($idUser);

                ?>

                <table>

                <?php
                foreach ($idSalas as $id) 
                {
                ?>
                    <tr><td><?= $id['nome']?></td><td><button class="btn-entrar" type="submit" value="Entrar"></td></tr>

                <?php
                }
                ?>
                </table>
        </div>
    </div>
