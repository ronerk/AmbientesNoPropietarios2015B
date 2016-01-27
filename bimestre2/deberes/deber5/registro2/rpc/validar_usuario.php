<?php

if($_POST){

	$usuario=$_POST['mensajes'];

	
	$enlace = mysql_connect("localhost", "root", "",'bdd10');
      mysql_select_db("bdd10", $enlace);
  
  	 $q_select= "SELECT * from usuario where usuario='$usuario'";
  	 $resultado = mysql_query($q_select, $enlace);
     
     $filas_usuario = mysql_num_rows($resultado);
     if($filas_usuario>0){
    echo "false";
     }
     else{
    echo "true";
}
}
    else{

      echo "No se han recibido datos";
    }  

?>