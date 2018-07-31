<html>
<head>
  <title>form</title>
</head>
<body>
  <form action="ejemplo28.php" method="POST">
    <font face="arial">
  <center>
    <h2>Ejemplo 28</h2>
    <hr>
    <br>
Ingresa un número:
  <input type="text" name="dato">
  <br>
  <br>
Ingresa un número:
    <input type="text" name="dato2">
    <br><br>
  <input type="submit" value="Enviar">
</center>
</font>
</form>
</body>
</html>


<?php
/*Ejemplo de funciones representando a la suma, resta, multiplicación y division*/
function suma(){
$f=$_POST['dato'];
$g=$_POST['dato2'];
  $p=$f+$g;
  echo "<br>", $f, "+",$g ,"=", $p;
}
function resta(){
  $f=$_POST['dato'];
  $g=$_POST['dato2'];
    $p=$f-$g;
    echo "<br>", $f, "-",$g ,"=", $p;
}
function multiplicacion(){
  $f=$_POST['dato'];
  $g=$_POST['dato2'];
    $p=$f*$g;
    echo "<br>", $f, "*",$g ,"=", $p;
}
function division(){
  $f=$_POST['dato'];
  $g=$_POST['dato2'];
    $p=$f/$g;
    echo "<br>", $f, "/",$g ,"=", $p;
  }
function arreglo(){
  $ciudad[]="Sevilla";
  $ciudad[]="Madrid";
  $ciudad[]="Barcelona";
  $ciudad[]="Valencia";
  $k=rand(0,3);
  echo $ciudad[$k];
}
echo "1. Suma <br>";
echo "2. Resta <br>";
echo "3. Multiplicacion <br>";
echo "4. Division <br>";
echo "5. Arreglo <br>";
echo "Elije una opcion: ";
$s=rand(1,5);
if($s==1){
  suma();
}
if($s==2){
  resta();
}
if($s==3){
  multiplicacion();
}
if($s==4){
  division();
}
if($s==5){
  arreglo();
}
 ?>
