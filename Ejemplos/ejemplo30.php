<html>
<head>
  <title>Mes</title>
</head>
<body bgcolor=#0A0A2A text=white>
  <form action="ejemplo30.php" method="POST">
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
$s=$_POST['valor'];
function uno(){
  $a="enero";
  echo $a;
}
function dos(){
  $b="febrero";
  echo $b;
}
function tres(){
  $c="marzo";
  echo $c;
}
function cuatro(){
  $d="abril";
  echo $d;
}
function cinco(){
  $e="mayo";
  echo $e;
}
function seis(){
  $f="junio";
  echo $f;
}
function siete(){
  $j="julio";
  echo $j;
}
function ocho(){
  $k="agosto";
  echo $k;
}
function nueve(){
  $l="septiembre";
  echo $l;
}
function diez(){
  $m="octubre";
  echo $m;
}
function once(){
  $n="noviembre";
  echo $n;
}
function doce(){
  $o="diciembre";
  echo $o;
}

switch ($s) {
    case 1;
    uno();
    break;
    case 2;
    dos();
    break;
    case 3;
    tres();
    break;
    case 4;
    cuatro();
    break;
    case 5;
    cinco();
    break;
    case 6;
    seis();
    break;
    case 7;
    siete();
    break;
    case 8;
    ocho();
    break;
    case 9;
    nueve();
    break;
    case 10;
    diez();
    break;
    case 11;
    once();
    break;
    case 12;
    doce();
    break;
  default;
    echo "No hay mas de doce meses...";
    break;}
  }
 ?>
