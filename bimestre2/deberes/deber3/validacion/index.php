<!DOCTYPE html> 
<html lang="es"> 
<head> 
  <meta charset="utf-8"> 
  <title>jQuery AJAX form submit using twitter bootstrap modal</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>
  <div class="container">
    <h4></h4>
    <div id="success" class="success"></div>
    <div id="error" class="error"></div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#contact-form">
      Registrate
    </button>

    <!-- Modal -->
    <div class="modal fade" id="contact-form" tabindex="-1" role="dialog" aria-labelledby="ContactLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="ContactLabel">Formulario de Registro</h4>
          </div>
          <div class="modal-body">
              
              
              
              
              

            <form id="contacto">
                
              <div class="form-group">
              <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
              </div>


              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                 
              </div>
                

               <div class="form-group">
              <label for="telefono">Telefono</label>
                <input type="text" name="telefono" class="form-control" id="telefono"  placeholder="Telefono" required="" >
              </div>


               <div class="form-group">
                 <label for="direccion">Direccion</label>
                <input type="text" name="direccion" class="form-control" id="direccion"  placeholder="Direccion">
             </div>
                
                
                
                <div class="form-group">
		    <label for="usuario">Usuario </label>
		    <input type="text" class="form-control" id="usario" name="usuario" placeholder="Nombre de usuario" required=""  >
		  </div>
                
                
                
                
               <label for="contraseña">contraseña</label> 
<input type="password" name="pass1" class="form-control"  autofocus="autofocus"  placeholder="Escriba la contraseña" required = "ingresa el password"  >
                </br>
                
 <label for="vuelve_escribir_contrasenia">Vuelve a escribir la contraseña</label> 
<input type="password" name="pass2"  class="form-control"  placeholder="Vuelva a escribir la contraseña" required >
                </br>
                


     <!---<div class="form-group">          
<label for="password">Password</label>
<input  id="password" class="form-control" name="password"  placeholder="Introduzca su password" required/>
</div>


                
                
                <div class="form-group">   
                <label for="confirmar_password">Confirmar Password</label>
            <input  id="confirmar_password" class="form-control" name="confirmar_password" placeholder="Introduzca nuevamente su password" required>
</div>-->
            </form>
              
              
              
              
              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" id="btn-enviar" data-loading-text="Enviando...">Enviar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/additional-methods.js"></script>

<script type="text/javascript" src="js/main.js"></script>
</body>
</html>