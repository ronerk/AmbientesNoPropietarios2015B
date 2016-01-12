$(document).ready(function() {

  $( "form#contacto" ).validate({


    rules: {






       nombre: {
          required: true,
          minlength: 2
        },

    email: {
          email: true,
          required: true,
          minlength: 2
        },
},


    messages: {
    nombre: {
      required: "Ingresa tu nombre.",minlength: $.validator.format("Al menos {0} caracteres requeridos")
    }
    



     }

}); 






$(document).ready(function() {
  //variables
  var pass1 = $('[name=pass1]');
  var pass2 = $('[name=pass2]');
  var confirmacion = "Las contraseñas si coinciden";
  var longitud = "La contraseña No coinciden ";
  var negacion = "No coinciden las contraseñas";
  var vacio = "La contraseña no puede estar vacía";
  //oculto por defecto el elemento span
  var span = $('<span></span>').insertAfter(pass2);
  span.hide();
  //función que comprueba las dos contraseñas
  function coincidePassword(){
  var valor1 = pass1.val();
  var valor2 = pass2.val();
  //muestro el span
  span.show().removeClass();
  //condiciones dentro de la función
  if(valor1 != valor2){
  span.text(negacion).addClass('negacion'); 
  }
  if(valor1.length==0 || valor1==""){
  span.text(vacio).addClass('negacion');  
  }
  if(valor1.length<6 || valor1.length>10){
  span.text(longitud).addClass('negacion');
  }
  if(valor1.length!=0 && valor1==valor2){
  span.text(confirmacion).removeClass("negacion").addClass('confirmacion');
  }
  }
  //ejecuto la función al soltar la tecla
  pass2.keyup(function(){
  coincidePassword();
  });
});





  $("#btn-enviar").on("click", function(){

    if( $( "form#contacto" ).valid() ) {   
       var $btn = $(this).button('loading');
      var noticias = $("form#contacto #noticias").is(":checked") ? 1 : 0;
      $.ajax({
        url: 'rpc/procesar.php',
        type: 'post',
        // dataType: 'json',
        data: {"nombre": $("form#contacto #nombre").val(),
              "email": $("form#contacto #email").val(),
              "pass1":$("form#contacto #pass1").val(),
              "pass2":$("form#contacto #pass2").val(),
              "mensaje": $("form#contacto #mensaje").val()}
      })
      .done(function(msg) {
        console.log("success");
        $("#success").html(msg)
        $('#contact-form').modal('hide')
      })
      .fail(function(jqXHR, textStatus, errorThrown) {
        console.log("fail: " + textStatus + " " + errorThrown);
        $("#error").html(textStatus)
      })
      .always(function() {
        console.log("complete");
        $btn.button('reset');
      });
    }
    
  })
  $("#contact-form").on("hide.bs.modal", function(){
    $('#contacto')[0].reset();
  })
});



