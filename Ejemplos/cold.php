<?php
$conexion = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conexion, 'coldplay');
$resultado=mysqli_query($conexion, "SELECT id, nombre, edad, genero, FROM usuario");

while ($fila=mysqli_fetch_array($resultado)){
  echo "ID: ".$fila['id']."<br>";

}
