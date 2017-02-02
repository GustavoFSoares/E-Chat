<?php
    require_once("logicaUsuario.php");
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/geral.css">
        <link rel="stylesheet" type="text/css" href="css/loginFormulario.css">
        <link rel="stylesheet" type="text/css" href="css/cabecalho.css">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
        <meta charset="utf-8">
        <title>EChat</title>
    </head>

    <body>
        <header>
            <div class="nav">

                <h1><?=(isset($_SESSION['usuario_logado'])? $_SESSION['usuario_logado'] : "")?></h1>
                <div class="toolbar">
                    <a href="index.php" class="echat">E-Chat</a>
                    <a href="criar.php">Criar</a>
                    <span><a href="sair.php">Sair</a></span>
                </div>

            </div>
        </header>
