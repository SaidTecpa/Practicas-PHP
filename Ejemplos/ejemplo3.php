<?php
$a = $_POST["Horas_trabajadas"];
$b = $_POST["Precio_de_hora"];
$c = $_POST["Dias_trabajados"];
$e = $_POST["Nombre"];
$d = ($a*$b)*$c;
echo $e;
echo "<br><h3>Su Salario es: ".$d;
?>
