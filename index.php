<?php include("cabecalho.php"); ?>
  <?php
    if (!estaLogado()) {
      require_once("loginFormulario.php");
    } else {
      require_once("salasFormulario.php");
      echo "salas";
    }
  ?>
  </body>
</html>
