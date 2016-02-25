<!DOCTYPE html>


    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Bienvenido</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <script type="text/javascript" language="javascript" src="js/ajax.js"></script>
    </head>
    <body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
    <div class="container">
    <header class="header">
    <div class="row">
	  <?php
    include("include/cabecera.php");
    ?>
    </div>
    </header>
    <?php
    include("include/menu.php");
    ?>
    </div>
    </header>
    <div class="container">
    <div class="row">
    <div class="col-md-6">
    <div>
    <table border="0" align="center" cellpadding="0" cellspacing="0">
    <tr align="left">
    <td width="25%">Selecccione nivel:</td>
    <td width="800%">Seleccione materia:</td>
    </tr>
    <tr align="left">
    <td><?php include("include/nivel.php"); ?></td>
    <td><?php include("include/materia.php"); ?></td>
    <td><div id="listamateria">
    <textarea type="text" id="materiac" name="materiac" rows="5" cols="30"></textarea>
    </div></td>
    </tr>
    </table>
    </div>
    </div>
    </br>
    </br>
    </br>
    </br>
    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="enviar(<?=$c-1 ?>)">Guardar </button>
    <a href="index.html">
    <button type="button" class="btn btn-primary" id="btn-enviar" data-loading-text="Enviando...">Cancelar</button></a>
    </div>
    </div>
    </div>
    </div>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	  </style>
    </body>
    </html>