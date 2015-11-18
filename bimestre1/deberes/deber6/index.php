<?php
include('p_index.php');
//echo '<pre>';
//print_r($_SERVER);
//echo '</pre>';
?>
 
<html>
   <head>
    <title>Crear una sesión en PHP</title>
   </head>
   <body>
     <h1>Crear una sesión</h1>
     <form action="./index.php" method="POST">
       <p>
         <label>Email:</label>
         <input type="text" name="email" />
       </p>
       <p>
         <label>Contraseña:</label>
         <input type="password" name="password" />
       </p>
       <p>
        <input type="submit" value="Iniciar sesión" />
       </p>
     </form>
   </body>
</html>