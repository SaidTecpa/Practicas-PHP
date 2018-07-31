<html>
<head>
  <title> Raiz </title>
</head>
<body bgcolor="0A0A2A" text="white">
<form action="lachicharronera.php" method="POST">
<center>
  <font face="arial">
    <h1> <big>La chicharronera</big></h1>
  </font>
</center>
<hr>
<br>
<center>
<table>
  <tr>
    <font face= "arial">
      <p>Primer valor:</p> <p><input type="text" name="val"/></p>
      <tr>
        <br>
      <p>Segundo valor: </p><p><input type="text" name="val2"/></p>
      <br>
        <p>Tercer valor:</p> <p><input type="text" name="val3"/></p>
        <tr>
        <tr>
          <p> <input type="submit" value="Calcular"> </p>
        </body>
        </html>
<?php
if($_POST){
$uno=$_POST['val'];
$dos=$_POST['val2'];
$tres=$_POST['val3'];
function raiz($a,$b,$c){
    $x1=(-$b+sqrt(($b*$b)-(4*$a*$c)))/(2*$a);
    $x2=(-$b-sqrt(($b*$b)-(4*$a*$c)))/(2*$a);
    echo "El valor de x1 es: ".$x1."<br>";
    echo "El valor de x2 es: ".$x2;
}
$u=$uno;
$d=$dos;
$t=$tres;
raiz($u,$d,$t);
}
 ?>
