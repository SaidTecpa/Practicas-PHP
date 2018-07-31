<html>
<head>
  <title>Array C</title>
</head>
<body bgcolor=#0A0A2A text="white">
  <form action="c.php" method="POST">
    <font face="arial">
      <center>
        <h2>Ejercicio Tres (c)</h2>
        <hr>
        <br>
        Ingresa para localizar:
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
$confirmado=array('true','true','false','true','false','false');
echo "<br><center>".$confirmado[$a]."</center>";
}
 ?>
