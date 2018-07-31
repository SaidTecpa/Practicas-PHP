<html>
<head>
  <title>Array D</title>
</head>
<body bgcolor=#0A0A2A text="white">
  <form action="d.php" method="POST">
    <font face="arial">
      <center>
        <h2>Ejercicio Cuatro (d)</h2>
        <hr>
        <br><br>
        Ingrese el número <i>0</i> para mostrar la frase...
        <input type="text" name="dato">
        <br><br>
        <input type="submit" value="Enviar">
      </center>
    </font>
  </body>
  </html>
<?php
if ($_POST){
$a=$_POST['dato'];
$b="La alineación del equipo esta compuesta por ";
$jugador=array('Crovic, '.'Antic ,'.'Malic, '.'Zulic ,'.'Rostrich');
echo $b.$jugador[0];
}
 ?>
