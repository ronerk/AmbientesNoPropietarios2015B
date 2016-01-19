
<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8"> 
<title> Registro</title>
 
 <link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
 
</head>
<body id="cuerpo">
<div id="mensaje" class="alert"></div>

<div id ="form">
<p><b>REGISTRO</b></p>

<form action="" method='POST' id="usuario" novalidate="novalidate" onsubmit = "return validar(this)">
<table id="formulario" width="501" border="1">
<tr>
<div id="fila1">
<td>
<label for="Nombre">Nombre</label>
</td>
<td>
<input type="text" id="txtnombre" value="" name="nombre">
</td>
</div>
</tr>
<tr>
<div id="fila2">
<td>
<label for="Email">Email</label>
</td>
<td>
<input type="text" id="txtemail" value="" name="email">
</td>
</div>
</tr>
<tr>
<td>
<label for="telefono">Telefono</label>
</td>
<td>
<input type="text" id="txtfono" value="" name="telefono">
</td>
</tr>
<tr>
<td>
<label for="direccion">Dirección</label>
</td>
<td>
<input type="text" id="txtdir" value="" name="direccion">
</td>
</tr>

<tr>
<td>
<label for="provincia">Provincia</label>
</td>
<td>
<select id="txtprovincia" name="provincia">
  <option value="">Seleccione...</option>
<?php
  foreach($provincias as $pr){
    echo '<option value="' . $pr['cod_provincia'] . '">' . $pr['provincia'] . '</option>';
  }

?>
</select>
</td>
</tr>

<tr>
<td>
<label for="canton">Cantón</label>
</td>
<td>
<select id="txtcanton" name="canton">
  <option value="">Seleccione...</option>
</select>
</td>
</tr>

<tr>
<td>
<label for="parroquia">Parroquia</label>
</td>
<td>
<select id="txtparroquia" name="parroquia">
  <option value="">Seleccione...</option>
</select>
</td>
</tr>

<tr>
<td>
<label for="usuario">Usuario</label>
</td>
<td>
<input type="text" id="txtusuario" value="" name="usuario">
</td>
</tr>
<tr>
<td>
<label for="contrasenia">Contraseña</label>
</td>
<td>
<input type="password" id="contrasenia" value="" name="contrasenia">
</td>
</tr>
<tr>
<td>
<label for="contrasenia">Verificar Contraseña</label>
</td>
<td>
<input type="password" id="contrasenia2" value="" name="contrasenia2">
</td>
</tr>

</table>
<button  id="btnRegistrar" name="registrar"> Registrar</button>
</form>
    
</div>
    
    
<table id="tabla_usuarios" border="1" align="center">
    <div>
  <tr>
    <td>Nombre</td>
    <td>Email</td>
    <td>Direccion</td>
    <td>Usuario</td>
  </tr>


  
  <tr>
    <td>Nombre2</td>
    <td>Email2</td>
    <td>Direccion2</td>
    <td>Usuario2</td>
  </tr>
        
        <tr>
    <td>Nombre3</td>
    <td>Email3</td>
    <td>Direccion3</td>
    <td>Usuario3</td>
  </tr>
        
        
    <td>
    <form action ="cancelar.php" method="post" >
	  <input type="submit" value="Cancelar" name="cancelar">
	  <input type="hidden" value="' . $row['id'] . '"  name="id">
	  </form>
    
	  <form action ="guardar.php" method="post" >
	  <input type="submit" value="Guardar" name="guardar">
	  <input type="hidden" value="' . $row['id'] . '"  name="id">
	  </form></td>';
    </div>
</table>



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/additional-methods.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>