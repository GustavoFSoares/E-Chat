<?php
  require_once("logicaUsuario.php");
 ?>

<html>
  <head>
    <meta charset="utf-8">
    <title>EChat</title>
  </head>
  <body>

    <?php
    
      if(!estaLogado()) {
        require_once("loginFormulario.php");
      } else {
        require_once("escolherSalas.php");
        echo "salas";
      }
     ?>

    </body>
</html>
