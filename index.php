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
      if(verificaUsuario()){
        require_once("login-formulario.php");
      }else {
        require_once("escolher-salas.php");
      }
     ?>
    </body>
</html>
