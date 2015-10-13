<html>
    <head>
	<title>Deber 2</title>
        
    </head>
    
    <link rel="stylesheet" type="text/css" href="css/primo.css">
    <body>
    <?php generar_tabla(); ?>
    <?php

function generar_tabla()
     {
$i = 0;
	echo '<table  width="50%">';
   
	while($i < 100)
     {
    echo '<tr >';
    for($j=0; $j < 10; $j++)
     {
        $es_primo = es_primo($i);
			echo '<td ' . ($es_primo ? ' class="primo"' : '') . ' >';
            echo $i++;
            echo '</td>';
		   }
		    echo '</tr>';
	       }
	    
    
           }



   function es_primo($num)
           {
   if($num < 2)
       
       
        {
		return false;
        } 
	else
   if($num == 2) 
              

        {
		return true;
		} 
    else
		{
        
		$es_primo = true;
        
  
		for($i = 2; $i <= $num/2; $i ++)
		{
    if($num % $i == 0)
        
        {
    $es_primo = false;
				break;
        }
		}
		return $es_primo;
	    }
        }


 ?>
   
</body>
	</html>
