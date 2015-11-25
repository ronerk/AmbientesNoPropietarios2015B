<?php
include('p_index.php');
//echo '<pre>';
//print_r($_SERVER);
//echo '</pre>';
?>
 
<html>
   <head>
    <title>Login</title>
   </head>
   <body>
     <h1>inicio de session</h1>
     <form action="./index.php" method="POST">
       <p>
         <label>Nombre de usuario:</label>
         <input type="text" name="username" />
       </p>
       <p>
         <label>Contraseña:</label>
         <input type="password" name="password" />
       </p>
       <p>
        <input type="submit" value="Iniciar sesión" />
       </p>
     </form>
       
         <div class="c3">
      <section>
    
        <p>
            <a href="registro.php">Registrar</a>
            </p>
      </section>
   </div>
       
       
   </body>
</html>


            