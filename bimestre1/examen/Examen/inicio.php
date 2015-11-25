<html>
  <head>
    <title>Hemos iniciado sesión</title>
  </head>
  <body>
    <div class="c1">
      <section>
        <p>Tu nombre de usuario es :<h1> <?=$_SESSION['username'];?><h1></p>
      </section>
    </div>

    <div class="c3">
      <section>
    
        <p>
            <a href="./php/Formulario.php">Registrar</a>
            </p>
      </section>
   </div>
 
    <div class="c2">
      <section>
        <p>
          <a href="./php/cerrar_sesion.php">Cerrar sesión</a>
        </p>

      </section>
   </div>
 </body>
</html>