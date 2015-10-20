<?php
echo '<html>';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<title>FORMULARIO HTML</title>';
echo"<center>";
echo '<style>';
echo 'p{
  font-size:2.1em; 

}
';
echo '</style>';
echo'<link rel="stylesheet" type="text/css" href="css/style1.css">';
echo '</head>';
echo '<body  background="image/ima.jpg"  background-size:100% 100% class="cuerpo">';

echo '<h1  class="reg" echo "&nbsp";>Registrate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>';

echo '<p>Es gratis (y lo seguira siendo)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>';


echo ' <label style="font-size:18px" class="nombre"  >Nombre:             </label>  ';
echo '<input style="font-size:25px" class="nombre" type="text" name="nombre"  size="30">';
echo '<br>';
echo '<br>';
echo '<label style="font-size:18px" class="apellidos">Apellido:             </label>';
echo '<input style="font-size:25px" class="apellidos" type="text" name="apellidos"  size="30">';
echo '<br>';
echo '<br>';
echo '<label style="font-size:18px" class="email">Tu email:             </label>';
echo'<input style="font-size:25px" class="email" type="text" name="email" size="30">&nbsp;';
echo '<br>';
echo '<br>';
echo '<label style="font-size:18px" &nbsp;class="escribe">Escribe de nuevo el correo electronico:</label>&nbsp;';

echo'<input style="font-size:25px" class="escribe" type="text"  name="escribe"  size="30" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<br>';
echo '<br>';
echo ' <label style="font-size:18px" class="contra"  >Contraseña nueva:          </label>  ';
echo '<input style="font-size:25px" class="contra" type="text" name="contra"  size="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<br>';
echo '<br>';

echo ' <label style="font-size:18px" class="genero"  >Sexo:       </label>  ';


	echo'<select style="font-size:25px" name="genero" id="genero" >
	<option  class="genero" value="0">Selecciona el sexo</option>
	<option value="1">Masculino</option>
	<option value="2">Femenino</option>
	</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<br>';
echo '<br>';

echo ' <label style="font-size:18px" class="fecha"  >Fecha de nacimiento:    </label>  ';
echo '<select style="font-size:25px" class="dia" name="dia" id="dia" >';
echo '<option value="0">Dia  </option>';
for($d=1;$d<=31;$d++)  
	{
		if($d<10) 
			$dd = "0" . $d; 
		else
			$dd = $d; 
		echo "<option value='$dd'>$dd</option>";
	}
echo '</select >&nbsp;';

echo '<select style="font-size:25px" class="mes" name="mes" id="mes" >';
echo '<option value="0">Mes </option>';
for($m = 1; $m<=12; $m++)
	{
		if($m<10)
			$me = "0" . $m;
		else
			$me = $m;
		switch($me)
		{
			case "01": $mes = "Enero"; break;
			case "02": $mes = "Febrero"; break;
			case "03": $mes = "Marzo"; break;
			case "04": $mes = "Abril"; break;
			case "05": $mes = "Mayo"; break;
			case "06": $mes = "Junio"; break;
			case "07": $mes = "Julio"; break;
			case "08": $mes = "Agosto"; break;
			case "09": $mes = "Septiembre"; break;
			case "10": $mes = "Octubre"; break;
			case "11": $mes = "Noviembre"; break;
			case "12": $mes = "Diciembre"; break;			
		}
		echo "<option value='$me'>$mes</option>";
	}
echo '</select >&nbsp;';
	
echo '<select style="font-size:25px" class="anio" name="anio" id="anio" >';
echo '<option value="0">Año  </option>';
$tope = date("Y");
	$edad_max = 80;
	$edad_min = 0;
	for($a= $tope - $edad_max; $a<=$tope - $edad_min; $a++)
		echo "<option value='$a'>$a</option>"; 

echo '</select >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

echo '<br>';
echo '<br>';
echo'<a href="pagina_deber.php" target="_blank">Por que debo proporcionar esta informacion ?</a>';
echo '<br>';
echo '<br>';

echo '<input style="font-size:19px"  class="registrate" type="submit" name="registrate" value="Regístrate" size="28"> ';



echo '</body>';
echo"</center>";


echo '</html>';
?>