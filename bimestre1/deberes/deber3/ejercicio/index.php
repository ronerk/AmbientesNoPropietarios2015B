<?php
echo '<html>';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<title>Página 100% PHP</title>';
echo '<style>';
echo 'h1{
  text-align: center;
}
table, th, td{
  border: 1px solid #000000;
  border-collapse: collapse;
}
table tr:nth-child(even){
  background-color: #15efe8; 
}
table tr:nth-child(odd){
  background-color: #dddddd; 
}
';
echo '</style>';
echo'<link rel="stylesheet" type="text/css" href="css/style.css">';
echo '</head>';
echo '<body class="cuerpo">';
echo '<h1 class="negrita">Este es el cuerpo de la página.</h1>';
echo '<p>La siguiente tabla es genera por un while y un for de PHP . Las caracteristicas que debe tener esta tabla se muestra en la siguiente lista ordenada  ( (elemento <code>&lt;ol&gt;</code>)</p>';
echo '<ol>';
echo '<li>La tabla esta centrada en la plantilla utilizando CSS.</li>';
echo '<li>La cabecera tiene un fondo de color azul oscuro con letras blancas.</li>';
echo '<li>La fila pares son celestes y las filas impares son grises.</li>';
echo '<li>Los numeros en las celdas estan alineados a la derecha.</li>';
echo '<li>La tabla tiene un borde solido negro.</li>';

echo '</ol>';

echo"<center>";
echo '<table class="tabla" >';
echo '<thead>';
echo '<tr>';
echo '<th class="colum1">Columna 1</th>';
echo '<th class="colum2">Columna 2</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
$i = 0;
$es_impar = true;
while($i < 10){
  echo '<tr class="' . ($es_impar ? 'impar' : 'par') . '">';
  $es_impar = ( $es_impar ? false : true );
  for($j = 0; $j < 2; $j++){
    echo '<td>';
    echo ++$i;
    echo '</td>';
  }
  echo '</tr>';
}
echo '</tbody>';

echo '</table>';
echo "</center>";
echo '<br>';
echo '<p>A continuacion tenemos un formulario HTML basico con los siguientes caracteristicas: </p>';

  echo '<ul><li type="disc">La etiquetas estan enlazadas con sus respectivos campos.</li>
 <li type="disc">Las etiquetas tienen un ancho de 100px y estan en negrita.</li>
 <li type="disc">Los input tienen un margen inferior de 10px.</li>
      </ul>';
 
       
echo ' <label class="nombre" >Nombre:             </label>          ';
echo '<input type="text" class="form-control" placeholder="Nombre">';
echo '<br>';
echo '<br>';

echo '<label class="apellido">Apellido:             </label>';
echo '<input type="text" class="form-control" placeholder="Apellido">';
echo '<br>';
echo '<br>';


 echo '<button type="button">Enviar</button>'; 


echo '</body>';
echo '</html>';
?>