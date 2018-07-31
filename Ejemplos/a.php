<html>
<head>
  <title>Array A </title>
</head>
<body bgcolor=#0A0A2A text="white">
  <form action="a.php" method="POST">
<font face="arial">
  <center>
    <h2>Ejercicio Uno (a)</h2>
    <hr>
  Ingresa para localizar:
    <br>
    <br>
    <input type="text" name="dato">
    <br>
    <br>
    <input type="submit" value="Enviar">
  </center>
</font>
</body>
</html>
<?php
if ($_POST) {
$a=$_POST['dato'];
$coches=array('32','11','45','22','78','-3','9','66','5');
echo "<br><center>".$coches[$a]."</center>";
}
 ?>
