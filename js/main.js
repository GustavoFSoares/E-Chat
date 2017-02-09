
$(document).ready(function()
{

    $('#send').click(enviarMsg);
    setInterval(passaFuncao, 1000);
    //passaFuncao();

<<<<<<< HEAD
    $('#msg').keypress(function (e)
    {
        var key = e.which;
        if(key == 13) {  // the enter key code

            $('#send').click();
            return false;
        }
    });

=======
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
  
>>>>>>> 2d0b0da723f5d9bd390a475c2c98237e18d9e1a6
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
            console.log(data.error);
            $(".mensagens-list").empty();

            var string;

            console.log(data);
            for (var i = 0; i < data.length; i++) {
                data = ((typeof data == 'undefined') ? 'defaultValue' : data);
                string +=
                '<li id="mensagem">'+
                    '<span class="data">'+data[i].data+'  -!-  </span>'+
                    '<span class="nome">'+data[i].fk_usuario+ ': </span>'+
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

    $.ajax( {
        type: "POST",
        url: "adicionaMensagem.php",
        data: data,

        success: function (data)
        {

            $(".mensagens-list").empty();

            var string;

            console.log(data);
            for (var i = 0; i < data.length; i++) {
                data = ((typeof data == 'undefined') ? 'defaultValue' : data);
                string +=
                '<li id="mensagem">'+
                    '<span class="data">'+data[i].data+'  -!-  </span>'+
                    '<span class="nome">'+data[i].fk_usuario+ ': </span>'+
                    '<span class="msg">'+data[i].msg+'</span>'+
                '</li>';
            }

            $(".mensagens-list").append(string);
        },

        error: function(err)
        {
            console.log(err);
        },

        dataType: 'json'
    });

}
