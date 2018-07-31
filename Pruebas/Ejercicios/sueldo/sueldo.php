<?php

function salario($a,$b,$c,$d){

  $e = ($a*$b)*$c;
  $i = $d/100;
  $u = $e*$i;
  $r = $e -$u;


echo "<br><h3>Su Salario es: ".$r;
}
######################################

if($_POST){
  $a = $_POST['a'];
  $b = $_POST['b'];
  $c = $_POST['c'];
  $d = $_POST['d'];

salario($a,$b,$c,$d);
 }



//realizar un programa que obtenga la suma de los primeros 100 numeros pares y que
//cuales son los impares
 ?>
