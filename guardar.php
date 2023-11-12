<?php
// Se reciben los datos a través del método POST y son asignados a variables
$rut = $_POST["rut"];
$nombreEmpresa = $_POST["nombre_empresa"]; // Cambiado a nombre_empresa
$nombreYApellido = $_POST["nombre_y_apellido"]; // Cambiado a nombre_y_apellido
$direccion = $_POST["direccion"];
$clave = $_POST["clave"];
// Se establece conexión a la Base de Datos de MySQL
$servername = "localhost";
$username = "root";
$password = "";
// Aquí se indica el nombre de la Base de Datos que se selecciona
$bd = "tiendavirtual";
$conexion = new mysqli($servername, $username, $password, $bd);
// Si se genera un error se advierte del mismo al usuario.
if ($conexion->connect_error) {
    die("Conexión Fallida: " . $conexion->connect_error); // Corregido conn a conexion
}
// Se genera el query con los datos que se asignaron en las variables
$sql = "insert into cliente(rut, nombre_empresa, nombre_y_apellido, direccion, password) 
        VALUES ('".$rut."', '".$nombreEmpresa."', '".$nombreYApellido."', '".$direccion."', '".$clave."')";
// Se ejecuta el query
if ($conexion->query($sql) === TRUE) {
    echo "<h1 align='center' >Registro Exitoso.  Ahora puede iniciar sesión.</h1>";
//Se inserta código HTML dentro del archive PHP para la impression de una
//table que contenga los datos ingresados.
?>

<table border="1" style="align:center; border-color:black; bordercollapse: collapse; width:300px; height:150px;" align="center">
<tbody>
<tr>
<td style="background-color:lightgreen;">Rut empresa:</td>
<td><?php echo $rut; ?></td>
</tr>
<tr>
<td style="background-color:lightgreen;">Nombre empresa:</td>
<td><?php echo $nombreEmpresa; ?></td>
</tr>
<tr>
<td style="background-color:lightgreen;">Nombre y apellido:</td>
<td><?php echo $nombreYApellido; ?></td>
</tr>
<tr>
<td style="background-color:lightgreen;">Direccion:</td>
<td><?php echo $direccion; ?></td>
</tr>
<tr>
<td style="background-color:lightgreen;">Datos inicio sesion:</td>

</tr>
<tr>
<td style="background-color:lightgreen;">Rut empresa:</td>
<td><?php echo $rut; ?></td>
</tr>
<tr>
<td style="background-color:lightgreen;">Password:</td>
<td><?php echo $clave; ?></td>
</tr>
</tbody>
</table>;
<?php
} else {
  ?>
  <script type="text/javascript">
  alert("Error!!!. Datos no Ingresados.");
  window.location="registrovalidado.html";
   </script>
  <?php
  }
  
// Se cierra la conexión a la Base de Datos.
$conexion->close();
?>

