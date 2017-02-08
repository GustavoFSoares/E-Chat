<?php include("logado.php"); ?>
<div class="content">
    <div class="lista">
        <?php
            require_once('conecta.php');
            require_once('class/SalaDAO.php');

            $salaDAO = new SalaDAO($conecta);
            $salasId = $salaDAO->listaSala($userId);

            ?>
            <ul class="salas">

            <h2><span><</span> Todas salas <span>></span></h2>
            <?php
            foreach ($salasId as $id) {
            ?>
                <li><a href="sala.php?id=<?= $id['id_sala']?>">~ <?= $id['nome']?></a></li>
            <?php
            }
            ?>
            </ul>
            <h2><span>< /</span> Todas salas <span>></span></h2>
    </div>
</div>