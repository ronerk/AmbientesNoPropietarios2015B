<?php error_reporting (0);
$conn = new Mysqli($host,$usuario,$cont,$bdd);
if ($conn->connect_error)
    die($conn->connect_error);
	
$query = 'select * from interes';
$result = $conn->query($query);
if (!$result)
    die($conn->error);
$num_rows = $result->num_rows;
?>






<html>
    <head>
        <title>INTERESES</title>
      
		<link href="style/style.css" rel="stylesheet" type="text/css">
    </head>
    
    <body id="cuerpo">
        
    <form method="POST" action="index.php" >
            <div></div>
            <div align="center"><br>
              <br>
            </div>
      <h1 align="center">
      INTERESES
      <h1>
      <div align="center"><br>
              <br>
            </div>
              <div align="center">
                <input type="text" name="interes" class="interesPersona">
              </div>
          <br>
              <div align="center">
                <input type="button" id="crear" value="Crear" class="crea">
              </div>
            <div align="center"><br>
              <input type="submit" id ="guardar" value="Guardar interes" name="Guardar" >
              <input type="button" id="eliminar" value="Eliminar">
            </div>
    </form>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript">
        </script>
    </body>
</html>

        
        
   
        
<?php
$conn = new Mysqli($host,$usuario,$cont,$bdd);
if ($_POST[Eliminar]) {
    $id = $_POST['id'];
    $q_delete = "delete from interes where id=$id";
    $resultado = $conn->query($q_delete);
    if (!$resultado) {
        echo '<div>No se puede eliminar el interes </div>';
    } else {
        echo '<div>Interes borrado con exito </div>';
    }
}
$conn->close();
?>

        
        
        
<?php
echo'<center><h5 id="encabezado">INTERESES POR PERSONA</h5></center>';
echo'<table border="1" align="center">';
echo'<tr>';
echo '<th>' . 'Interes' . '</th>';
echo'</tr>';
for ($j = 0; $j < $num_rows; ++$j) {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_ASSOC);
	echo'<tr>';
echo '<td> ' . $row['id'] . '</td>';
  echo '<td> ' . $row['intereses'] . '</td>';
echo'</tr>';
}
echo'</table>';
$result->close();
$conn->close();
?>

        
        
        

<?php error_reporting (0);
$conn = new Mysqli($host, $usuario,$cont,$bdd);

if($conn->connect_error)
	die ($conn->connect_error);

if($_POST){
	$nombre = $_POST['interes'];

	if($interes != ''){
		
    $q_insert = "insert into interes(nombre)
                  values ('$intereses')";
    $res = $conn->query($q_insert);
	
    if(!$res)
	{
      echo '<div align="center"> Incorrecto ingresada de datos' . $conn->error . '</div>';
    } 
	else 
	{
      echo '<div  align="center"> Insertada correctamente los datos.</div>';
    }
  } 
  else
   {
	  echo '<div  align="center">Ingrese los campos requeridos.</div>';
  }
  }