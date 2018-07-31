<html>
<head>
  <title>Array B </title>
</head>
<body bgcolor=#0A0A2A text="white">
  <form action="b.php" method="POST">
    <font face="arial">
      <center>
    <h2>Ejercicio Dos (b)</h2>
    <hr>
    Ingresas para localizar:
    <br><br>
    <input type="text" name="dato">
    <br><br>
    <input type="submit" value="Enviar">
  </center>
</font>
</body>
</html>
<?php
if ($_POST) {
  $a=$_POST['dato'];
  $importe=array('32.583','11.239','45.781','22.237');
  echo "<br><center>".$importe[$a]."</center>";
}
 ?>
