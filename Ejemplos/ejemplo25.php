<html>
<head>
  <title> Bidimencional </title>
</head>
<body bgcolor=#245712 text="white">
  <form action="ejemplo25.php" method="POST">
    <font face="arial">
  <center>
    <h2>Ejemplo 25</h2>
    <hr>
    <br>
Dame una Posició:<br><br>
  <input type="text" name="dato">
  <input type="submit" value="Enviar">
</center>
</font>
</form>
</body>
</html>
<?php
if ($_POST){
$a=$_POST['dato'];
$numero=array(1,2,-5,9,-17,15,14,4,10,-2,-6-22);
$num=$numero[$a];
if($num>=0){
echo "positivo";
}
else
{
echo "negativo";
}
 }
 ?>
