
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="./datos.php" method="POST">
        <p>
         <h1><label>Registro de cliente</label></h1>
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
         <label>Peso:</label>
         <input type="text" name="peso" />
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
         
          
       <p>
           Edad:
           <select name="edad" id="edad">
                <option selected="selected"></option>
                <option>Menor de 20/option>
                <option>Entre 20 y 39 anios</option>
                <option>Entre 40 y 50 anios</option>
                <option>Otavalo</option>
                <option>Mas de 60 anios</option>
                <option>Soltero</option>
                <option>casado</option>
                <option>Otro</option>
         </select>        
       </p>
       <p>
           
           
           
  <p>
        <input type="submit" value="Registrar" />
       </p>
     </form>
    </body>
</html>
