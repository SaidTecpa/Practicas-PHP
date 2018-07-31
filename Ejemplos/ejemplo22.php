<html>
<head>
  <title> Bidimencional </title>
</head>
<body bgcolor=#245712 text="white">
  <form action="ejemplo22.php" method="POST">
    <font face="arial">
  <center>
    <h2>Ejemplo 22</h2>
    <hr>
    <br>
Dame la Primera Posición:<br><br>
  <input type="text" name="dato">
  <br><br><br>
  Dame la Segunda Posición:<br><br>
  <input type="text" name="dato2">
  <br><br>
  <input type="submit" value="Enviar">
</center>
</font>
</form>
</body>
</html>
<?php
if ($_POST){
  /*Utilizar comillas dobles para evitar errores ""; ya que tuve problemas al utilizar comillas simples ''
  infiero que las comillas puestas en el formulatrio de deben utilizar en el codigo php*/
$a=$_POST["dato"];
$b=$_POST["dato2"];
$animal[0][0] = "Perro";
$animal[0][1] = "Gato";
$animal[1][0] = "Lombriz";
$animal[1][1] = "Burro";
$animal[2][0] = "Murcielago";
$animal[2][1] = "Cocodrilo";
echo "<center><br><br><br>[".$a."][".$b."]".$animal[$a][$b]."<br></center>";
echo "<center><br><br><br>[".$a."][".$b."]".$animal[$a][$b]."</center>";
}
 ?>
