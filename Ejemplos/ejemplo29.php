<html>
<head>
  <title>Mes</title>
</head>
<body bgcolor=#0A0A2A text=white>
  <form action="ejemplo29.php" method="POST">
    <font face="arial">
  <center>
    <h1>Mes...</h1>
    <hr>
    <br>
Ingresa el número del mes:
  <input type="text" name="valor">
  <br>
  <br>
  <input type="submit" value="Buscar">
</center>
</font>
</form>
</body>
</html>

<?php
if($_POST){
$k=$_POST['valor'];
function mes(){
  $m[1]="Enero";
  $m[2]="Febrero";
  $m[3]="Marzo";
  $m[4]="Abril";
  $m[5]="Mayo";
  $m[6]="Junio";
  $m[7]="Julio";
  $m[8]="Agosto";
  $m[9]="Septiembre";
  $m[10]="Octubre";
  $m[11]="Noviembre";
  $m[12]="Diciembre";
  $t=$k;
  echo $m[$t];
}
}
 ?>
