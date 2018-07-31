<html>
<head>
  <title>form</title>
</head>
<body bgcolor=#0A0A2A text=white>
  <form action="corregir.php" method="POST">
    <font face="arial">
  <center>
    <h2>Corregir ejemplo 28</h2>
    <hr>
    <br>
Ingresa un número:
  <input type="text" name="valor">
  <br>
  <br>
Ingresa un número:
    <input type="text" name="valor2">
    <br><br>
  <input type="submit" value="Enviar">
</center>
</font>
</form>
</body>
</html>

<?php
/*ejemplo 28 corregido...*/
function suma(){
  $a=$_POST['valor'];
  $b=$_POST['valor2'];
  $c=$a+$b;
  echo $a." + ".$b." = ".$c."<br>";
}
function resta(){
  $a=$_POST['valor'];
  $b=$_POST['valor2'];
  $c=$a-$b;
  echo $a." - ".$b." = ".$c."<br>";
}
function multi(){
  $a=$_POST['valor'];
  $b=$_POST['valor2'];
  $c=$a*$b;
  echo $a." * ".$b." = ".$c."<br>";
}
function divi(){
  $a=$_POST['valor'];
  $b=$_POST['valor2'];
  $c=$a/$b;
  echo $a." / ".$b." = ".$c."<br>";
}
echo "1. Suma <br>";
echo "2. Resta <br>";
echo "3. Multiplicación <br>";
echo "4. División <br>";
$s=rand(1,4);
if($s==1){
  suma();
}
if($s==2){
  resta();
}
if($s==3){
  multi();
}
if($s==4){
  divi();
}
 ?>
