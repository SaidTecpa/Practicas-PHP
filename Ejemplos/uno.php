<html>
<head>
  <title>Sueldo</title>
</head>
<body bgcolor="#0A0A2A" text="white">
  <form action="uno.php" method="POST">
<font face="arial">
<center><big><h1>Pago</h1></big></center>
</font>
<hr>
<center>
  <table>
    <tr>
      <br>
      <p>Hola cual es tu nombre: </p><p><input type="text" name="nombre"/></p>
      <p><input type="submit" value="Capturar"></p>
</table>
</body>
</html>
<?php
if ($_POST) {
$a=$_POST["nombre"];
echo "<font face='arial'>".$a."</font>";
}
 ?>
