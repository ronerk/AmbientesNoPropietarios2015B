
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="./datos.php" method="POST">
        <p>
         <h1><label>Formulario de registro MAC Computers S.A.</label></h1>
       </p>
       <p>
       </p>
       <p>
         <label>Nombre:</label>
         <input type="text" name="nombre" />
       </p>
       <p>
         <label>Apellido:</label>
         <input type="text" name="apellido" />
       </p>
       <p>
       Genero:</td><br>
     <label>
         <input type="radio" name="genero" id="ref_mascu" value="Masculino" /> 
              Masculino </label>
              <input type="radio" name="genero" id="ref_feme" value="Femenino" /> 
              Femenino </label>
     <br />
     <label>
            
      <br />
          <label>Correo electronico:</label>
         <input type="text" name="correo_electronico" /> 
       </p>
       <p>
           Cuidad de nacimiento:
           <select name="cuidad" id="ciudad">
                <option selected="selected"></option>
                <option>Quito</option>
                <option>Guayaquil</option>
                <option>Cuenca</option>
               
                <option>Otro</option>
         </select>        
       </p>
       

       
       <p>
        <input type="submit" value="Guardar cambios" />
       </p>
     </form>
    </body>
</html>
