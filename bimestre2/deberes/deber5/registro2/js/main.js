$(document).ready(function() {

  $( "form#contacto" ).validate({
     rules: {
        nombre: {
          required: true,
          minlength: 2
        },

      

        email: {
         
          required:true,
      email:true
          
        },

   telefono: {
         
          required: true,
          minlength: 9
        },

 provincia: {
         
          required: true,
         
        },


        usuario: {
         
          required: true,
        },





         contrasenia: {

      required:true,
      minlength: 4
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

    email:{

    required:"Es necesario ingresar un email , para completar el registro",
    email: "Por favor , Ingrese un email valido"
  },

  telefono :{

    required:"Por favor , Ingrese su numero telefonico",
    minlength:$.validator.format("Al menos {0} caracteres requeridos")
  },
  contrasenia:{

    required:"Es necesario que escriba una contraseña para el registro",
    minlength: $.validator.format("Al menos {0} caracteres requeridos")
  },

  contrasenia2:{

    required: "Por favor repita la contraseña , para su confirmacion.",
    equalTo: "La contraseña debe ser igual a la que ingreso antes"
  },

  usuario: {

    required:"Por favor ingrese el nombre de usuario, para continuar con el registro",
    remote:"El usuario ya esta registrado , intente con otro"
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
       
              "email": $("form#contacto #email").val(),
               "telefono": $("form#contacto #telefono").val(),
                "direccion": $("form#contacto #direccion").val(),
                "provincia": $("form#contacto #provincia").val(),
                 "canton": $("form#contacto #canton").val(),
                 "parroquia": $("form#contacto #parroquia").val(),
                "usuario": $("form#contacto #usuario").val(),
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







$(function(){
  
  $('#nuevo-producto').on('click',function(){
    $('#contacto')[0].reset();
    $('#pro').val('bdd10');
    $('#edi').hide();
    $('#reg').show();
    $('#registra-producto').modal({
      show:true,
      backdrop:'static'
    });
  });
  
  $('#bs-prod').on('keyup',function(){
    var dato = $('#bs-prod').val();
    var url = '../php/busca_usuario.php';
    $.ajax({
    type:'POST',
    url:url,
    data:'dato='+dato,
    success: function(datos){
      $('#agrega-registros').html(datos);
    }
  });
  return false;
  });
  
});

function modificaRegistro(){
  var url = '../php/modifica_usuario.php';
  $.ajax({
    type:'POST',
    url:url,
    data:$('#contacto').serialize(),
    success: function(registro){
      if ($('#pro').val() == 'bdd10'){
      $('#contacto')[0].reset();
      $('#mensaje').addClass('bien').html('Registro completado con exito').show(200).delay(2500).hide(200);
      $('#agrega-registros').html(registro);
      return false;
      }else{
      $('#mensaje').addClass('bien').html('Edicion completada con exito').show(200).delay(2500).hide(200);
      $('#agrega-registros').html(registro);
      return false;
      }
    }
  });
  return false;
}

function eliminarProducto(id){
  var url = '../php/elimina_usuario.php';
  var pregunta = confirm('¿Esta seguro de eliminar este Producto?');
  if(pregunta==true){
    $.ajax({
    type:'POST',
    url:url,
    data:'id='+id,
    success: function(registro){
      $('#agrega-registros').html(registro);
      return false;
    }
  });
  return false;
  }else{
    return false;
  }
}

function editarProducto(id){
  $('#contacto')[0].reset();
  var url = '../php/edita_usuario.php';
    $.ajax({
    type:'POST',

    url:url,
    data:'id='+id,
    success: function(valores){
        var datos = eval(valores);
        $('#reg').hide();
        $('#edi').show();
        $('#pro').val('Edicion');
        $('#id_usuario').val(id);
        $('#nombre').val(datos[0]);
        $('#email').val(datos[1]);
        $('#telefono').val(datos[2]);
        $('#direccion').val(datos[3]);
        $('#provincia').val(datos[4]);
        $('#canton').val(datos[5]);
        $('#parroquia').val(datos[6]);
        $('#usuario').val(datos[7]);
         $('#contrasenia').val(datos[8]);
        $('#registra-producto').modal({
          show:true,
          backdrop:'static'
        });
      return false;
    }
  });
  return false;
}