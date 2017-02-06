
    <div class="lista">
        <div>
            <?php
                require_once('conecta.php');
                require_once('class/SalaDAO.php');

                $salaDAO = new SalaDAO($conecta);
                $idSalas = $salaDAO->listaSala($idUser);

                ?>

                <ul class="salas">

                <?php
                foreach ($idSalas as $id) {
                ?>
                    <li><a id="<?php echo 'sala-'.$id['id']?>" href="#"><?= $id['nome']?></a></li>

                <?php
                }
                ?>
                </ul>
        </div>
    </div>
