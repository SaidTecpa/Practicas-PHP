<html>
<head>
  <title> Numeros </title>
</head>
<body bgcolor=#0A0A2A text="white">
<form action="ejemplo20.php" method="POST">
<center>
  <br>
  Dame la posicion para mostrar el valor:
<input type="text" name="dato">
<input type="submit" value="Enviar">
</center>
</form>
</body>
</html>
<?php
/*Arreglo con numeros 'x'*/
if ($_POST) {
$s=$_POST['dato'];
$numeros=array('2','14','76','38','10','11','98','23','18','20');
echo "<center>".$numeros[$s]."</center>";
}
 ?>
