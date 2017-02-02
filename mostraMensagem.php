<?php
    function mostrarMensagemUsuario()
    {
        if(isset($_SESSION['danger'])) {

            
            ?><p><?=$_SESSION['danger']?></p><?php
        }
        unset($_SESSION['danger']);
    }
