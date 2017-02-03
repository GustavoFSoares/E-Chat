<?php include("cabecalho.php"); ?>
  <?php
    if (!estaLogado()) {
      require_once("loginFormulario.php");
    } else {
      //  header("location: index.php");
    }
  ?>
  </body>
</html>
