<?php
$a = $_POST["Grados_centigrados"];
$b = $a*(9/5)+32;
echo "Grados Fahrenheid: ".$b;
$d = ($b-32)*(5)/9;
echo "<br>Grados Centigrados: ".$d;
 ?>
