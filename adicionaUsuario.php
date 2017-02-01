<?php
    require_once('conecta.php');
    require_once('logicaUsuario.php');
    require_once('class/UsuarioDAO.php');

    var_dump($_POST);
    $nome = $_POST['nome'];


    $usuarioDAO = new usuarioDAO($conecta);

    if($nome != null){

        if($usuarioDAO->adicionaUsuario($nome)) {
          logarUsuario($nome); ?>
          <script> alert("Usuario Adicionado!"); window.location.href="index.php";</script> <?php
        }else{ ?>
          <script> alert("Usuario não foi adicionado! /n Mude o seu nome!"); window.location.href="index.php";</script> <?php
        }

    }
