<html>
<head>
  <title>
    Suma de dos valores
  </title>
</head>
<body>
  <form action="imprimir.php" method="post">
    <p><font size=+3 color="#12ff11"> Escribe el primer valor </font></p>
    <input type="text" name="a">
    <br><br>
    <input type="submit" value="Enviar">
    <br><br>
  </body>
</html>


<?php
if($_POST){
$a=$_POST['a'];
$datos="hola mundo";

$c=$a;
#Para concatenar en php se utiliza un .
echo "El resultado de la suma de <b>".$a."</b> es: ".$c*9,"</h2></u>";
echo $datos;

for ($i=1; $i <=$a ; $i++) {

  for ($b=1; $b <=10 ; $b++) {
  $c = $b*$i;
  echo "<br>".$i."x".$b."=".$c;
  }
  echo "<br>";
}

#
#for ($f=1; $f <=$a ; $f++) {
#  for ($h=1; $h <=10 ; $i++) {
#    $i = $h*$f;
#    echo $i;
#  }
#}



}
 ?>
