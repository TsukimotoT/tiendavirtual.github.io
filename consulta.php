<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd = "tiendavirtual"; // Indicamos la base de datos a conectarse
$conexion = new mysqli($servername, $username, $password, $bd);
if ($conexion->connect_error) {
 die("Conexión fallida: " . $conexion->connect_error);
}

// Consulta de todos los datos en la tabla "cliente"
$sql = "SELECT * FROM cliente";
$resultado = $conexion->query($sql);
if ($resultado->num_rows > 0) {
 while ($row = $resultado->fetch_assoc()) {
 echo "Rut: " . $row["rut"] . "<br>";
 echo "Nombre de la empresa: " . $row["nombre_empresa"] . "<br>";
 echo "Nombre y Apellido: " . $row["nombre_y_apellido"] . "<br>";
 echo "Dirección: " . $row["direccion"] . "<br>";
 echo "<br>";
 }
} else {
 echo "No hay resultados";
}

$conexion->close(); // Cerrando la conexión a la base de datos
?>