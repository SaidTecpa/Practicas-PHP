<html>
<head>
  <title> Numeros </title>
</head>
<body bgcolor=#0A0A2A text="white">
<form action="ejemplo21.php" method="POST">
<center>
  <br>
  Articulo:
<input type="text" name="dato2">
Cantidad:
<input type="text" name="dato3">
Precio:
<input type="text" name="dato1">
<input type="submit" value="Enviar">
</center>
</form>
</body>
</html>
<?php
if ($_POST) {
$a=$_POST['dato1'];
$precio=array(2,5,3,6,13 );

$b=$_POST['dato2'];
$articulos=array('lapiz','goma','sacapuntas','lapicero','libreta');

$c=$_POST['dato3'];
$cant=array(5,7,9,11,12);

$d=$precio[$a]*$cant[$c];
echo "articulo= ".$articulos[$b];
echo "<br>";
echo "precio= ".$d;
}
 ?>
