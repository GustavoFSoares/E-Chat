<?php include("logado.php"); ?>
<div class="content">
    <div class="formulario">
            <form action="adicionaSala.php" method="post">
                    <h1>Criar sala</h1>
                    <input type="text" name="nome" placeholder="Digite nome da Sala">
                    <input type="radio" name="tipo" value="privado"> Privado </input>
                     <input type="radio" name="tipo" value="publico" checked="checked"> Público </input>
                    <br><br> 
                    <button class="btn-login" type="submit">Criar</button>
            </form>
    </div>
</div>