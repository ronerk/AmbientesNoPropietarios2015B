<?php
$result = "";
// print_r($_POST);
if ( $_POST ) {
  $name = htmlentities($_POST['nombre']);
      $email = htmlentities($_POST['email']);
$telefono = htmlentities($_POST['telefono']);
    $direccion = htmlentities($_POST['direccion']);
        $provincia = htmlentities($_POST['provincia']);
     $canton = htmlentities($_POST['canton']);
    $parroquia= htmlentities($_POST['parroquia']);
    $usuario = htmlentities($_POST['usuario']);
   
    $contrasenia=md5($_POST['contrasenia']);

    
  
  $conn = new mysqli('localhost' , 'root' , '', 'bdd10');
  if( $conn->connect_error ) 
    $result = "No se puede establece la conexión con la BDD";
  else{
    $q_insert = "INSERT INTO mensajes(nombre,email,telefono,direccion,provincia,canton,parroquia,usuario,contrasenia)
                  VALUES ('$name','$email','$telefono','$direccion','$provincia','$canton','$parroquia','$usuario','$contrasenia')";

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