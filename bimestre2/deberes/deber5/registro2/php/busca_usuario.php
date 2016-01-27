<?php
include('conexion.php');

$dato = $_POST['dato'];



$bdd10 = mysql_query("SELECT * FROM usuarios WHERE nombre LIKE '%$dato%' OR email LIKE '%$dato%' OR telefono LIKE '%$dato%' OR direccion LIKE '%$dato%' OR provincia LIKE '%$dato%' OR canton LIKE '%$dato%' OR parroquia LIKE '%$dato%'OR contrasenia LIKE '%$dato%' OR usuario LIKE '%$dato%' ORDER BY id_usuario ASC");



echo '<table class="table table-bordered">
        	<tr>
            	<th width="150">Nombre</th>   
               	<th width="150">Email</th>
               	<th width="150">Telefono</th>
               	<th width="150">Direccion</th>
               	<th width="150">Provincia</th>
               	<th width="150">Canton</th>
                <th width="150">Parroquia</th>
                <th width="150">Usuario</th>
                 <th width="150">Contrasenia</th>
				<th width="50">Opciones</th>
            </tr>';
if(mysql_num_rows($bdd10)>0){
	while($bdd102 = mysql_fetch_array($bdd10)){
		echo '<tr>
		        <td>'.$bdd102['nombre'].'</td>
				    <td>'.$bdd102['email'].'</td>
				    <td>'.$bdd102['telefono'].'</td>
				    <td>'.$bdd102['direccion'].'</td>
            <td>'.$bdd102['provincia'].'</td>
            <td>'.$bdd102['canton'].'</td>
            <td>'.$bdd102['parroquia'].'</td>
            <td>'.$bdd102['usuario'].'</td>
            <td>'.$bdd102['contrasenia'].'</td>
				<td><a href="javascript:editarProducto('.$bdd102['id_usuario'].');" class="glyphicon glyphicon-edit"></a> <a href="javascript:eliminarProducto('.$bdd102['id_usuario'].');" class="glyphicon glyphicon-remove-circle"></a></td>
				</tr>';
	}
}else{
	echo '<tr>
				<td colspan="5">No se encontraron resultados</td>
			</tr>';
}
echo '</table>';
?>