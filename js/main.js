
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

        success: function (data){

            $(".mensagens-list").empty();

            var string;

            for (var i = 0; i < data.length; i++) {
                data = ((typeof data == "undefined") ? 'defaultValue' : data);
                string +=
                "<div id='mensagem'>"+
                    "<span class='data'>"+data[i].data+"  -!-  </span>"+
                    "<span class='nome'>"+data[i].fk_usuario+ ": </span>"+
                    "<span class='msg'>"+data[i].msg+"</span>"+
                "</div>";
            }

            $(".mensagens-list").append(string);
        },

        error: function(err){
            console.log(err);
        },

        dataType: 'json'
    });

}
