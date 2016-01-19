<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Guardar datos</title>
</head>

<body>

<?php error_reporting (0);
$conn = new Mysqli($host, $usuario,$cont,$bdd);

if($conn->connect_error)
	die ($conn->connect_error);

if($_POST){
	$nombre = $_POST['nombre'];
    $email= $_POST['email'];
     $telefono = $_POST['telefono'];
     $direccion= $_POST['direccion'];
  $usuario = $_POST['usuario'];
  $contrasenia = $_POST['contrasenia'];
 

	if($nombre != '' && $email != '' && $telefono != ''&& $direccion != ''&& $usuario != ''&& $contrasenia != ''){

    $q_insert = "insert into registro(nombre,email,telefono,direccion,usuario,contrasenia)
                  values ('$nombre', '$email', '$telefono', '$direccion','$usuario','$econtrasenia')";
    $res = $conn->query($q_insert);
	
    if(!$res)
	{
      echo '<div align="center"> No se puede guardar datos' . $conn->error . '</div>';
    } 
	else 
	{
      echo '<div  align="center">Informacion guardada correctamente.</div>';
    }
  } 
  
  }

?>
<p align="center">
          <a href="./index.php">Formulario de registro</a>
        </p>
        
      
</body>
</html>