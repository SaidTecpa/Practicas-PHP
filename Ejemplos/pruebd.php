<html>
<head>
  <title> Base de Datos </title>
</head>
<body>
  <center> Base de Datos </center>
  <hr>
  <form action="pruebad.php" method="POST">
    <p> Nombre: </p>
    <input type="text" name="ED">
    <p> Edad: </p>
    <input type="text" name="nom">
    <input type="submit" value="Guardar">
  </form>
</body>
</html>

<?php
if ($_POST){
$conexion = mysqli_connect('localhost', 'root', 'root' 'coldplay');

mysqli_select_db($conexion, "prueba");
  $edad=$_POST['ED'];
  $nombre=$_POST['nom'];
$result=mysqli_query($conexion, "SELECT = FROM personal where edad=$edad");

echo "<table>";
echo "<th>Nombre";
echo "<th>Edad </tr>";
while ($fila=mysqli_fetch_array($result))
{
  echo "<td>".$fila['nombre'];
  echo "<td>".$fila['edad'];
  echo "</tr>";
}
echo "</table>";
mysqli_query($conexion, "UPDATE personal SET nombre='$nombre' WHERE edad=$edad");

mysqli_close($conexion);
}
 ?>
