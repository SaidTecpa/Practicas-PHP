<html>
<head>
  <title> Página </title>
</head>
<body bgcolor=#0A0A2A text="white">
<form action="ejemplo17.php" method="POST">
<center>
  <font face="arial">
    <h1> <big>Fabrica</big></h1>
  </font>
</center>
<hr>
<br>
<center>
<table>
  <tr>
    <font face= "arial">
      <p>Turno Diurno: </p> <p><input type="text" name="diurno"/></p>
      <tr>
        <br>
      <p>Turno de noche: </p><p><input type="text" name="nocturno"/></p>
      <tr>
        <p>Turno Diurno: </p><p><input type="text" name="diurno2"/></p>
        <tr>
          <p>Turno de noche: </p><p><input type="text" name="diurno3"/></p>
          <tr>
          <p> <input type="submit" value="Calcular"> </p>
        </body>
        </html>
<?php
if ($_POST) {
$a=$_POST["diurno"];
$b=$_POST["nocturno"];
$c=$_POST["diurno2"];
$d=$_POST["nocturno2"];
$pago=50;
$pd=80;
$pgn=70;
$wed=110;
$aa=$a*$pago;
$bb=$b*$pd;
$cc=$c*$pgn;
$dd=$d*$web;
echo $aa;
echo "<br>";
echo $bb;
echo "<br>";
echo $cc;
echo "<br>";
echo $dd;
$z=$aa+$bb+$cc+$dd;
echo "<br>";
echo"total a pagar: ".$z;
}
 ?>
