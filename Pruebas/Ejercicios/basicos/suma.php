<html>
<head>
  <title>
    Suma de dos valores
  </title>
</head>
<body>
  <form action="suma.php" method="post">
    <p><font size=+3 color="#12ff11"> Escribe el primer valor </font></p>
    <input type="text" name="a">
    <p><font size=+3 color="#aa45fg"> Escribe el segundo valor </font></p>
    <input type="text" name="b">
    <br><br>
    <input type="submit" value="Enviar">
    <br><br>
  </body>
</html>


<?php
if($_POST){
$a=$_POST['a'];
$b=$_POST['b'];
$c=$a+$b;
#Para concatenar en php se utiliza un .
echo "El resultado de la suma de <b>".$a."</b> mas <i>".$b."</i> es:<u><h2>".$c."</h2></u>";
}
 ?>
