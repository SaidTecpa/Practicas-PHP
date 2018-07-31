<?php


require 'header/header.php'; //Llamar la cabecera


#####################################################
function suma($c,$d,$k){#Esta es una funcion para realizar la suma

  $c = $c + $d + $k;
  echo "El resultado es: ".$c."<br>";
}
#####################################################
function multiplicacion($r,$e,$w){//Es una funcion para realizar una multiplicacion

  $r = ($r*$e)*$w;
    echo "El resultado de la multiplicacion es: ".$r."<br>";
}
#####################################################
function formula($a,$b,$c){//Es una funcion para calcular la formula general

  $x1=(-$b+sqrt(($b*$b)-(4*$a*$c)))/(2*$a);
    $x2=(-$b-sqrt(($b*$b)-(4*$a*$c)))/(2*$a);
    echo "El valor de x1 es: ".$x1."<br>";
    echo "El valor de x2 es: ".$x2;
}
######################################################





######################################################
if($_POST){
  $a = $_POST['a'];
  $b = $_POST['b'];
  $c = $_POST['c'];

suma($a,$b,$c);
multiplicacion($a,$b,$c);
formula($a,$b,$c);
 }

 ?>
