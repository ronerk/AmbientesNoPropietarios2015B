<?php
$result = "";
// print_r($_POST);
if ( $_POST ) {
  $name = htmlentities($_POST['nombre']);
  $email = htmlentities($_POST['email']);
  $telefono = htmlentities($_POST['telefono']);
  $direccion = htmlentities( $_POST['direccion'] );
    $usuario = htmlentities( $_POST['usuario'] );
     $contraseña= htmlentities( $_POST['pass1'] );
     $vuelve_escribir_contrasenia = htmlentities( $_POST['pass2'] );
  
  $conn = new mysqli('localhost' , 'root' , '', 'bdd3');
  if( $conn->connect_error ) 
    $result = "No se puede establece la conexión con la BDD";
  else{
    $q_insert = "INSERT INTO mensajes(nombre,email,mensaje,noticias)
                  VALUES ('$name', '$email', '$telfono', '$direccion','$usuario','$contrasenia','$vuelve_escribir_contrasenia')";

    $res = $conn->query($q_insert);

    if(!$res){
      $result = 'Existi&oacute; un error al insertar.' . $conn->error;
    } else {
      $result = 'Mensaje enviado con &eacute;xito.';
    }
  }
}
echo json_encode( $result );
?>