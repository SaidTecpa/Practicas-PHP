<!DOCTYPE html>
<html>
<head>
  <title>
    Tarea
  </title>
   <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body bgcolor=#4a7c59>

  <?php
  require 'header/header.php'
  ?>

  <form action="tarea.php" method="post">
    <br>
    <p> Escribe el primer valor </p>
    <input type="text" required name="a">
    <p> Escribe el segundo valor </p>
    <input type="text" required name="b">
    <p> Escribe el tercer valor </p>
    <input type="text" required name="c">
    <br><br>
    <input type="submit" value="Enviar">
    <br><br>
  </body>
</html>
