<!--?php
// Son recibidos los datos a través del método POST y son asignados a variables$rut = $_POST["rut"];
$clave = $_POST["clave"];// Se establece la conexión a la Base de Datos de MySQL
$servername = "localhost";$username = "root";
$password = "";// Aquí se indica el nombre de la Base de Datos que se selecciona
$bd = "tiendavirtual";$conexion = new mysqli($servername, $username, $password, $bd);
// Si se genera un error se advierte del mismo al usuario.if ($conexion--->
<html>
  <head>
  </head>
  <body>connect_error) { die("Conexi�n Fallida: " .
    $conexion-&gt;connect_error); // Corregido "conn" a "conexion"
    }
    // Se genera el query con los datos que se asignaron en las variables
    $sql = "select * from cliente where rut='".$rut."' and
    password='".$clave."'";
    $resultado = $conexion-&gt;query($sql);
    if ($resultado-&gt;num_rows &gt; 0) { while($row =
    $resultado-&gt;fetch_assoc()) { ?&gt;
    <script type="text/javascript">
    window.location = "inicio.html";
  </script>
    <?php   }
} else {  ?>
    <script type="text/javascript">
    alert("No se pudo iniciar sesi�n. Intente de nuevo.");
    window.location = "login.html"; // Corregido el comentario "//"
  </script>
    <!--?php
}$conexion--->close(); // Cerrando conexi�n a la base de datos
    ?&gt;
  </body>
</html>
