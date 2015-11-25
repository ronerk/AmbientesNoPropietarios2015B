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
$peso=$_POST['peso'];
$genero=$_POST['genero'];
$edad=$_POST['edad'];


echo "Usted es" .$nombre;
echo "" .$apellido;
echo " Su peso es: " .$peso;
echo " de genero :". $genero;
echo " De edad ". $edad;

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


