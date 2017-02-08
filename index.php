<?php include("cabecalho.php"); ?>
<?php include("loginFormulario.php"); ?>
<?php
if (estaLogado()) {
        header("location: logado.php");
    }
     ?>
  </body>
</html>
