<html>
<head>
<meta charset="utf-8">
<title>Cancelar Registro</title>


</head>
<body>


<?php 

$conn = new Mysqli($host,$usuario,$cont,$bdd);

if($conn ->connect_error)
	die ($conn ->connect_error);

if($_POST){
	$id = $_POST['id'];
	$q_delete = "delete from registro where id ='$id'";
	$r= $conn->query($q_delete);
	if(!$r){
		echo '<div align="center">No se puede cancelar el registro seleccionado</div>';
	}else{
		echo '<div align="center">Registro se a cancelado exitosamente</div>';
	}
	
}
?>

<p align="center">
          <a href="./index.php">Formulario de registro</a>
        </p>

</body>
</html>