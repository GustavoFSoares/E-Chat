<?php
  session_start();

  function estaLogado()
  {
    return isset($_SESSION['usuario_logado']);
  }


  function verificaUsuario()
  {
    if (!estaLogado()) { ?>
      <script>alert("Você não está logado!"); window.location.href='index.php';</script> <?php
    }

  }

  function logarUsuario($nome)
  {
    $_SESSION['usuario_logado'] = $nome;
  }
