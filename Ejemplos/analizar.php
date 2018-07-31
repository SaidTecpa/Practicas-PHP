<html>
<head>
  <title> Pedir </title>
</head>
<body bgcolor=#0A0A2A text="white">
  <form action="analizar.php" method="POST">
    <font face="arial">
  <center>
    <h2>Analizar (código)</h2>
    <hr>
    <br>
Dame un incremento:<br><br>
  <input type="text" name="dato">
  <input type="submit" value="Enviar">
</center>
</font>
</form>
</body>
</html>
<?php
if ($_POST){
  /* la variable r es el incremento */
$r=$_POST['dato'];
$ciudad=array();
for($a=0; $a<=$r; $a++)
{
  $ciudad[]=$a;
}
for($a=0; $a<=$r; $a++){
  echo $ciudad[$a]."<br>";
}
for($a=0; $a<=$r; $a++)
{
  /* chr los combierte en código ASCII*/
$f=$ciudad[$a]%2;
if ($f==0){
  echo $ciudad[$a],chr($ciudad[$a]),"<br>"; }
  }

}
 ?>
