<?php include("cabecalho.php");?>
<?php include("navbar.php");?>

<?php
    if (!estaLogado()) {
        header("location: index.php");
    }
?>
    <body>
        <?php
            require_once("menuLateral.php");
        ?>
    </body>
</html>
