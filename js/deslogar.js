
$(window).unload(function() { //executa quando a pagina atual for fechada
    $.ajax( {
        url: "../sair.php" //pagina encaminhada quando janela for fechada
    });
});
