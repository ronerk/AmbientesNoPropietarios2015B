<?php require('p_index.php'); ?>
<!DOCTYPE html>
<html>
    <center>
<head>
  <meta charset="utf-8">
  <div><title>Formulario</title></div>
    <h1>REGISTRO</h1>
    <style >
   body {
   
    background-color: #15efe8
   }
   
  </style>
</head>
<body>
<form action="p_index.php" method="post">
  <div>
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" value="">
  </div>

  <div>
    <label for="apellidos">Apellidos</label>
    <input type="text" id="apellidos" name="apellidos" value="">
  </div>  

  <div>
    <div><label>Género</label></div>
    <label for="genero_m">Masculino </label>
    <input type="radio" id="genero_m" name="genero" value="m">
    <label for="genero_f">Femenino </label>
    <input type="radio" id="genero_f" name="genero" value="f" checked="ckecked">
  </div>

  <div>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="">
  </div>  

  <div>
    <label for="fecha">Fecha</label>
    <input type="date" id="fecha" name="fecha" value="">
  </div>  

  <div>
    <label for="provincia">Provincia</label>
    <select id="provincia" name="provincia">
      <option value="">Seleccione...</option>
      <option value="1">Provincia 1</option>
    </select>
  </div>    

  <div>
    <label for="parroquia">Parroquia</label>
    <select id="parroquia" name="parroquia">
      <option value="">Seleccione...</option>
      <option value="1">Parroquia 1</option>
    </select>
  </div>    

  <div>
    <label for="canton">Canton</label>
    <select id="canton" name="canton">
      <option value="">Seleccione...</option>
      <option value="1">Cantón 1</option>
    </select>
  </div>    

  <div>
    <label for="contrasena">Contraseña</label>
    <input type="password" id="contrasena" name="contrasena" value="">
  </div>

  <div>
    <label for="verficar_contrasena">Verficar Contraseña</label>
    <input type="password" id="verificar_contrasena" name="verificar_contrasena" value="">
  </div>  

  <div>
    <button id="enviar" name="enviar">Enviar</button>
  </div>

</form>
</body>
        </center>
</html>