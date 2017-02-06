
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
                    <li><a href="sala.php?id=<?= $id['id_sala']?>"><?= $id['nome']?></a></li>

                <?php
                }
                ?>
                </ul>
        </div>
    </div>
