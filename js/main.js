
$(document).ready(function(){

    $('#send').click(enviarMsg);

});

function enviarMsg(){
    
    var data = {
        id: $("#idSala").val(),
        msg: $("#msg").val()
    };

    $.ajax({
        type: "POST",
        url: "http://localhost/echat/adicionaMensagem.php",
        data: data,

        success: function(data){

            $(".mensagens-list").empty();
            
            var string;

            for (var i = 0; i < data.length; i++) {
                string += '<li id="mensagem"><span>'+data[i].data+"</span> | <span>"+data[i].fk_usuario+"</span>: <span>"+data[i].msg+'</span></li>';
            }

            $(".mensagens-list").append(string);

        },

        error: function(err){
            console.log(err);
        },

        dataType: 'json'
    });

}