
$(document).ready(function()
{

    $('#send').click(enviarMsg);
    setInterval(passaFuncao, 1000);
    //passaFuncao();

    $('#msg').ready(
    function(){
        $(this).val('');
    });

     $('#msg').keypress(function (e) {
     var key = e.which;
     if(key == 13)  // the enter key code
      {
        $('#send').click();
        $('#msg').val('');
        return false;
      }
    });

});

function passaFuncao()
{
    var data = {
        id : $("#idSala").val()
    }
    $.ajax({
        type: "POST",
        data: data,
        url: "adicionaMensagem.php",
        crossDomain: true,
        dataType: 'json',

        success: function (data)
        {

            $(".mensagens-list").empty();

            var string = '';

            for (var i = 0; i < data.length; i++) {
                //data = ((typeof data == undefined) ? 'defaultValue' : data);
                string +=
                '<li id="mensagem">'+
                    '<span class="data">'+data[i].data+'  -!-  </span>'+
                    '<span class="nome">'+data[i].nome_usuario+ ': </span>'+
                    '<span class="msg">'+data[i].msg+'</span>'+
                '</li>';
            }

            $(".mensagens-list").append(string);
        },

        error: function(err){
            console.log(err);
        }

    });
}

function enviarMsg()
{

    var data = {
        id: $("#idSala").val(),
        msg: $("#msg").val()
    };

    console.log("inicio");
    console.log(data);
    console.log("meio");
    $.ajax( {
        type: "POST",
        url: "adicionaMensagem.php",
        data: data,

        success: function (data)
        {
            $(".mensagens-list").empty();

            var string = '';
            for (var i = 0; i < data.length; i++) {
                console.log(data[i]);
                string +=
                '<li id="mensagem">'+
                    '<span class="data">'+data[i].data+'  -!-  </span>'+
                    '<span class="nome">'+data[i].nome_usuario+ ': </span>'+
                    '<span class="msg">'+data[i].msg+'</span>'+
                '</li>';
            }
            //console.log(string);
            //if (string != undefined){
                $(".mensagens-list").append(string);
                $(".chat").animate({scrollTop: 500}, 1000);
           // }
        },

        error: function(err)
        {
            console.log(err);
        },

        dataType: 'json'
    });

}
