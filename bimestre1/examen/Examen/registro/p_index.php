<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
if($_POST){
  $nombre = $_POST['email'];
$contrasena = md5($_POST['contrasena']);
  $verificar_contrasena = md5($_POST['verificar_contrasena']);
  if($contrasena !== $verificar_contrasena){
    echo htmlentities('Las contraseñas no coinciden');
  }
  $conn = new mysqli('localhost' , 'root' , '', 'bdd');
  if ($conn->connect_error) die($conn ->connect_error);
  $query = "INSERT INTO usuario 
                  (email, 
                   contrasena)
                VALUES (
                  '$email',
                  '$contrasena'
                  )
  ";
  $result = $conn ->query($query);
  if (!$result) die($conn ->error);
}