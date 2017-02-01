<?php
  session_start();

  function verificaUsuario(){
    if(!isset($_SESSION['NAME'])){?>
      <script>alert("Você não está logado!"); window.location.href='index.php';</script> <?php
  }
