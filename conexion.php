<?php $conexion = mysqli_connect('localhost', 'root', '', 'tiendavirtual');
if (!$conexion) { die('Error al conectarse (' . mysqli_connect_errno() . ') '
 . mysqli_connect_error());}
echo 'Se ha conectado con Éxito... ' .mysqli_get_host_info($conexion) . "\n";
mysqli_close($conexion);?>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
  </head>
  <body>
  </body>
</html>
