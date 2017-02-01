<?php
    require_once('conecta.php');
    require_once('class/UsuarioDAO.php');

    $nome = $_POST['nome'];

    $usuarioDAO = new usuarioDAO($conecta);

    if($usuarioDAO->adicionaUsuario()) { ?>
      <script> alert("Usuario Adicionado!"); window.location.href="index.php";</script> <?php
    }else{ ?>
      <script> alert("Usuario não foi adicionado! /n Mude o seu nome!"); window.location.href="index.php";</script> <?php
    }
