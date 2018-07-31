<?php
function suma()
{
  $a=2+2;
  echo "<br> 2+2= ".$a;
}

function resta()
{
  $b=6-2;
  echo "<br> 6-2= ".$b;
}
function multiplicacion()
{
  $c=5*2;
  echo "<br> 5*2= ".$c;
}
function division()
{
  $d=10/2;
  echo "<br> 10/2= ".$d;
}
function arreglo(){
  $ciudad[]=2;
  $ciudad[]=5;
  $ciudad[]=7;
  $ciudad[]=9;
  $k=rand(0,3);
  echo $ciudad[$k];

}
echo "1. Suma <br>";
echo "2. Resta <br>";
echo "3. Multiplicacion <br>";
echo "4. Division <br>";
echo "5. Arreglo <br>";
echo "Elije una opcion: ";
$s=rand(1,5);
if($s==1){
  suma();
}
if($s==2){
  resta();
}
if($s==3){
  multiplicacion();
}
if($s==4){
  division();
}
if($s==5){
  arreglo();
}
 ?>
