$(document).ready(function() {

  $( "form#contacto" ).validate({
     rules: {



        nombre: {
          required: true,
          minlength: 2
        },

  apellido: {
          required: true,
          minlength: 2
        },

      

        email: {
         
          required:true,
      email:true
          
        },

  
         contrasenia: {

      required:true,
      minlength: 5
    },

        contrasenia2:{

            required:true,
          equalTo:"#contrasenia"
        },


       
    },

    messages: {

    nombre: {
      required: "Ingresa tu nombre.",
      minlength: $.validator.format("Al menos {0} caracteres requeridos")
    },

     apellido: {
      required: "Ingresa tu apellido.",
      minlength: $.validator.format("Al menos {0} caracteres requeridos")
    },


    email:{

    required:"Es necesario ingresar un email , para completar el registro",
    email: "Por favor , Ingrese un email valido"
  },

  
  contrasenia:{

    required:"Es necesario que escriba una contraseña para el registro",
    minlength: $.validator.format("Al menos {0} caracteres requeridos")
  },

  contrasenia2:{

    required: "Por favor repita la contraseña , para su confirmacion.",
    equalTo: "La contraseña debe ser igual a la que ingreso antes"
  }









  }
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
                 "apellido": $("form#contacto #apellido").val(),
       
              "email": $("form#contacto #email").val(),
               
               
                 "contrasenia": $("form#contacto #contrasenia").val(),
                
              //"noticias": noticias,
              //"mensaje": $("form#contacto #mensaje").val()
            }
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




