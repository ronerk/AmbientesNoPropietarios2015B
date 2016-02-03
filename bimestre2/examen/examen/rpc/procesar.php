<?php
$result = "";
// print_r($_POST);
if ( $_POST ) {
  $name = htmlentities($_POST['nombre']);
   $apellido = htmlentities($_POST['apellido']);
      $email = htmlentities($_POST['email']);

   
    $contrasenia=md5($_POST['contrasenia']);

    
  
  $conn = new mysqli('localhost' , 'root' , '', 'examen2');
  if( $conn->connect_error ) 
    $result = "No se puede establece la conexión con la BDD";
  else{
    $q_insert = "INSERT INTO estudiante(nombre,email,apellido,contrasenia)
                  VALUES ('$name','$email','$apellido','$contrasenia')";

    $res = $conn->query($q_insert);

    if(!$res){
      $result = 'Existi&oacute; un error al insertar.' . $conn->error;
    } else {
      $result = 'Estudiante registrado exitosamente';
    }
  }
}
echo json_encode( $result );
?>