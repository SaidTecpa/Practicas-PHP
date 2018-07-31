<html>
<head>
  <title> Suma </title>
</head>
<body bgcolor="#0A0A2A" text=white>
  <form action="dos.php" method="POST">
    <font face="arial">
    <center><big><h1>Suma de dos Valores</h1></big>
    <hr>
    <p>Primer Valor: </p><p><input type="number" name="valor"/></p>
    <p>Segunudo Valor: </p><p><input type="number" name="valor2"/></p>
    <p><input type="submit" value="Sumar"></p>
    </center>
  </body>
</html>
<?php
if ($_POST) {
  $a=$_POST["valor"];
  $b=$_POST["valor2"];
  $c=$a+$b;
  echo "<center>".$c."</center>";
}
 ?>
