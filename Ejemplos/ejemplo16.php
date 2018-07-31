<html>
<head>
  <title> Página </title>
</head>
<body bgcolor=#0A0A2A text="white">
<form action="ejemplo16.php" method="POST">
<center>
  <font face="arial">
    <h1> <big>Potencia de n Numeros</big></h1>
  </font>
</center>
<hr>
<br>
<center>
<table>
  <tr>
    <font face= "arial">
      <p>Numero</p> <p><input type="text" name="Numero"/></p>
      <tr>
        <br>
      <p>Elevacion </p><p><input type="text" name="Elevacion"/></p>
      <tr>
          <p> <input type="submit" value="Calcular"> </p>
        </body>
        </html>
<?php
if ($_POST) {
$a=$_POST["Numero"];
$b=$_POST["Elevacion"];
$c=pow($a,$b);
echo $c;
}
?>
