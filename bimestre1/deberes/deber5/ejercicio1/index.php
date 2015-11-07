<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title >Conversion de moneda (USD-EUR-COL)</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<center><body>
<form  method="post">
    <h1 class="conversion" >Conversion de moneda</h1>
    <br>
    <br>
	<label>Valor en USD: </label>
    <input type="text"  name="num" id="num">
    
        
    <label align="" class="convertir">Convertir a: </label>
    <select name="moneda" class="moneda" >
    <option value="1">Euros</option>
      <option value="2">Pesos colombianos</option>
    </select>
            
        
    <br>
    <br>
    <br>
    <br>
    <input type="submit" value="Convertir">
</form>
    <br>
    <label class="resultado" >Resultado: </label>
     <br>
    <br>
    <br>
    
    <?php

$num = $_POST["num"];
$moneda = $_POST["moneda"];


if($moneda == "1"){
  $r_f = $num * 0.91;
  
 $r = number_format($r_f, 2, '.', ',');
	echo $num." USD "." equivale a ".$r." euros";
}else{
	$r_n = $num * 2.987;
	$r = number_format($r_n, 2, '.', '');
	echo $num." USD "." equivale a ".$r." pesos";
}



?> 
    
    
    
    
</body></center>
</html>