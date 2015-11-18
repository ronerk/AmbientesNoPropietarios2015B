<html>
<head>
<title>
</title>
</head>
<body>
<form action="./Formulario.php" method="POST">
<?php
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
//Visualizacion de la informacion introducida en el formulario
$nombre = $_POST['nombre'];
$apellido=$_POST['apellido'];
$generos=$_POST['genero'];
$correo=$_POST['correo_electronico'];
$cuidad=$_POST['cuidad'];


echo "Usted es" .$nombre;
echo "" .$apellido;
echo " Correo es: " .$correo;
echo " de genero :". $generos;
echo " nacido en lacuidad de ". $cuidad;


?>

<div class="c3">
      <section>
    
        <p>
            <a href="./Formulario.php">Regresar</a>
            </p>
      </section>
      </div>
      </form>
      <div class="c2">
      <section>
        <p>
          <a href="./cerrar_sesion.php">Cerrar sesión</a>
        </p>

      </section>
   </div>
</body>
</html>


