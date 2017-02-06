$(document).ready(function() {

  $("#criar").click(function(){ 
    $(".lista").hide();
    $(".formulario").show();
  });
  
  $("#procurar").click(function(){
    $(".formulario").hide();
    $(".lista").show();
  });

  $("#home").click(function(){
    $(".formulario").hide();
    $(".lista").hide();
  });

});


