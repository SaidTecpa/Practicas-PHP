<html>
<head>
  <title>Menú</title>
</head>
<body bgcolor=#0A0A2A text=white>
  <form action="menu.php" method="POST">
    <font face="arial">
  <center>
    <h1>Menú...</h1>
    <hr>
    <br>
Ingresa el número del ejercicio:
  <input type="text" name="valor">
  <br>
  <br>
  <input type="submit" value="Buscar">
</center>
</font>
</form>
</body>
</html>

<?php
function uno(){
  $a=rand(0,10);
  $b= rand(0,10);
  $c=$a+$b;
  echo $a." + ".$b." = ".$c;
}
function dos(){
  $a = 10;
  $b = 8;
  $c = 9;
  $d = 8;
  echo "Primer=".$a." Segundo=".$b." Tercero=".$c." Cuarto=".$d;
  $f = ($a+$b+$c+$d)/4;
  echo " El promedio es: ".$f;
}
function tres(){
  $a=8;
  $b=100;
  $c=5;
  $e="Said";
  $d = ($a*$b)*$c;
  echo "Horas trabajdas:".$a." Pago por hora:".$b." Trabajo:".$c." dias<br>";
  echo $e." Su Salario es: ".$d;
}
function cuatro(){
  $a = 8;
  $b = 6;
  echo "Precio por hora: ".$a;
  echo "<br>Horas utilizadas: ".$b;
  $c = ($b * $a);
  echo "<br>Total a Pagar: ".$c;
}
function cinco(){
  echo "El area de un Tringulo:";
  $a = 10;
  $b = 5;
  echo "<br>Base: ".$a;
  echo "<br>Altura:".$b;
  $c= ($a * $b)/2;
  echo "<br><h4>El area es: </h4><font face= 'arial' color='blue'>".$c."</font>";
}
function seis(){
  $a=10;
  $b=6;
  $c=9;
  echo "Valor uno: ".$a."<br>";
  echo "Valor dos: ".$b."<br>";
  echo "Valor tres: ".$c."<br>";
  $d=(-$b+sqrt(($b*$b)-(4*$a*$c)))/(2*$a);
  echo "Primer valor:".$d."<br>";
  $e=(-$b-sqrt(($b*$b)-(4*$a*$c)))/(2*$a);
  echo "Segundo Valor:".$e;
}
function siete(){
  $a="Lápiz";
  $b=5;
  $c=2;
  $d=-3;
  $e=.16;
  $f=(($b*$c)*$e);
  $g=($b*$c)+$f;
  $h=($g-$d);
  echo $a."<br>";
  echo "Precio de producto mas IVA: ".$g."<br>";
  echo "Precio final con descuento: ".$h;
}
function ocho(){
  $a=20;
  echo "Grados a convertir: ".$a."<br>";
  $b=$a*(9/5)+32;
  echo "Grados Fahrenheid: ".$b."°";
  $d=($b-32)*(5)/9;
  echo "<br>Grados Centigrados: ".$d."°";
}
function nueve(){
  $uno = 10;
  $dos = 25;
  $rep =$uno + $dos;
  echo "Primer valor: ".$uno." Segundo valor: ".$dos. " Resultado= ".$rep;
}
function diez(){
  $i = 0;
    for ($i = 1; $i<=10;$i++)
    {
      echo $i."X5=".($i*5)."<br>";
    }
}
function once(){
  $i = 0;
  $b = 1;
  for ($i=2; $i<=10 ; $i++)
  {
  echo $b."<br>";
  $b = $i*$b;
  }
}
function doce(){
  echo "<table border=1>";
  $i = 0;
    for ($i = 1; $i<=10;$i++)
    {
      for ($w=1; $w<=10; $w++)
      {
        echo "<td>".$w."</td>";
    }echo "<tr>";}
}
function trece(){
  echo "<table border=1>";
  $i = 0;
  $a = 0;
    while($i<10)
    {
      $i=$i+1;
      $w=0;
      while ($w<10)
      {
        $w++;
        $a=$a+1;
        $n=rand(100,999999);
        echo "<td bgcolor=$n>".$a."</td>";
      }
    echo "<tr>";
    }
}
function catorce(){
  $a=rand(1,20);
  $b=rand(2,10);
  $c=pow($a,$b);
  echo "El número:".$a." Elevado a la potencia:".$b." Es igual a = ".$c;
}
function quince(){
  $salon[0]="Carlos";
  $salon[1]="Said";
  $salon[2]="Levik";
  $ke=rand(0,2);
  echo $salon[$ke];
}
function dieciseis(){
  $a=rand(0,2);
  $salon=array('Carlos','Said','Levik');
  echo $salon[$a];
}
function diecisiete(){
  $s=rand(0,9);
  $numeros=array('2','14','76','38','10','11','98','23','18','20');
  echo $numeros[$s];
}
function dieciocho(){
  $a=rand(0,4);
  $precio=array(2,5,3,6,13 );

  $b=rand(0,4);
  $articulos=array('lapiz','goma','sacapuntas','lapicero','libreta');

  $c=rand(0,4);
  $cant=array(5,7,9,11,12);

  $d=$precio[$a]*$cant[$c];
  echo "Articulo= ".$articulos[$b];
  echo "<br>";
  echo "Precio a pagar= ".$d;
}
function diecinueve(){
  $a=rand(0,2);
  $b=rand(0,2);
  $animal[0][0] = "Perro";
  $animal[0][1] = "Gato";
  $animal[0][2] = "Gusano";
  $animal[1][0] = "Lombriz";
  $animal[1][1] = "Burro";
  $animal[1][2] = "Hormiga";
  $animal[2][0] = "Murcielago";
  $animal[2][1] = "Cocodrilo";
  $animal[2][2] = "Pajaro";
  echo "<center><br><br><br>[".$a."][".$b."]".$animal[$a][$b]."<br></center>";
  echo "<center><br><br><br>[".$a."][".$b."]".$animal[$a][$b]."</center>";
}
function veinte(){
  $a=rand(0,8);
  $numero=array(1,2,5,9,17,15,14,4,10);
  $num=$numero[$a];
  $c=$num%2;
  $d=$c;
  if($d==0){
  echo "El número: ".$num." es par";
  }
  else
  {
  echo "El número: ".$num." es impar";
  }
}
echo "<table>";
echo "<tr>";
echo "<td>";
echo "1. Suma de dos variables <br>";
echo "<br>";
echo "</td>";
echo "<td>";
echo "2. Promedio de variables definidas <br>";
echo "<br>";
echo "</td>";
echo "<td>";
echo "3. Salario <br>";
echo "<br>";
echo "</td>";
echo "<td>";
echo "4. Calcular el precio de un Interner <br>";
echo "<br>";
echo "</td>";
echo "<td>";
echo "5. Calcular el área de triangulo <br>";
echo "<br>";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "6. Fórmula generla <br>";
echo "<br>";
echo "</td>";
echo "<td>";
echo "7. Calcular precio con descuento de un producto <br>";
echo "<br>";
echo "</td>";
echo "<td>";
echo "8. Grados Fahrenheid y Centigrados <br>";
echo "<br>";
echo "</td>";
echo "<td>";
echo "9. Suma de dos números definidos <br>";
echo "<br>";
echo "</td>";
echo "<td>";
echo "10. Ciclo para mostrar tabla de multiplicar <br>";
echo "<br>";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "11. Factorial <br>";
echo "<br>";
echo "</td>";
echo "<td>";
echo "12. Ejemplo de tabla <br>";
echo "<br>";
echo "</td>";
echo "<td>";
echo "13. Ejemplo de tabla con colores aletorios <br>";
echo "<br>";
echo "</td>";
echo "<td>";
echo "14. Potencia <br>";
echo "<br>";
echo "</td>";
echo "<td>";
echo "15. Arreglos <br>";
echo "<br>";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "16. Ejemplo de arreglo <br>";
echo "<br>";
echo "</td>";
echo "<td>";
echo "17. Ejemplo de arreglo con números <br>";
echo "<br>";
echo "</td>";
echo "<td>";
echo "18. Ejemplo de arreglo con articulos <br>";
echo "<br>";
echo "</td>";
echo "<td>";
echo "19. Ejemplo de arreglo con animales <br>";
echo "<br>";
echo "</td>";
echo "<td>";
echo "20. Ejemplo de arreglo y saber si es positivo o negativo <br>";
echo "<br>";
echo "</td>";
echo "</tr>";
echo "</table>";
if($_POST){
$s=$_POST['valor'];
  echo "<center>";
  if($s==1){
    uno();
  }
  if($s==2){
    dos();
  }
  if($s==3){
    tres();
  }
  if($s==4){
    cuatro();
  }
  if($s==5){
    cinco();
  }
  if($s==6){
    seis();
  }
  if($s==7){
    siete();
  }
  if($s==8){
    ocho();
  }
  if($s==9){
    nueve();
  }
  if($s==10){
    diez();
  }
  if($s==11){
    once();
  }
  if($s==12){
    doce();
  }
  if($s==13){
    trece();
  }
  if($s==14){
    catorce();
  }
  if($s==15){
    quince();
  }
  if($s==16){
    dieciseis();
  }
  if($s==17){
    diecisiete();
  }
  if($s==18){
    dieciocho();
  }
  if($s==19){
    diecinueve();
  }
  if($s==20){
    veinte();
  }
  echo "</center>";
}
?>
