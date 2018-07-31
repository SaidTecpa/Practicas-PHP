<html>
<head>
  <title> Base de Datos </title>
</head>
<body>
  <center> Base de Datos </center>
  <hr>
  <form action="personal.php" method="POST">
    <p> edad a consultar: </p>
    <input type="text" name="edad">
    <input type="submit" value="Consultar">
  </form>
</body>
</html>

<?php
if ($_POST){
  $link=mysqli_connect("localhost". "root", "");
  mysqli_select_db($link, "prueba");
  $Edad=$_POST['edad'];
  $result=mysqli_query($link. "SELECT Nombre,Edad FROM Personal WHERE Edad='$Edad'");
  $extraer=mysqli_fetch_array($result);
  echo "Nombre: ".$extraer['Nombre']."<br>";
  echo "Edad: ".$extraer['Edad']."<br>";
  mysqli_close($link);
}
 ?>
