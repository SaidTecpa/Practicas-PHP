<html>
<head>
  <title>
    Suma
  </title>
</head>
<body>
  <form action="sumaf.php" method="post">
    <p><font size=+3 color="#12ff11"> Escribe el primer valor </font></p>
    <input type="text" name="a">
    <p><font size=+3 color="#aa45fg"> Escribe el segundo valor </font></p>
    <input type="text" name="b">
    <br><br>
    <input type="submit" value="Enviar">
    <br><br>
  </body>
</html>


<?php
function suma($c,$d){#Esta es una funcion para realizar la suma

  $c = $c + $d;
  echo "El resultado es: ".$c."<br>";
}
##############################################

function mensaje(){
  echo " El resultado esta bien<br>";
}

##############################################
function multiplicar($x,$j){

  $c = $x * $j;
  echo $c."<br>";
}

#############################################
function resta($x,$d){
  $c = $x-$d;
  echo $c;

}



##############################################
if($_POST){
  $a = $_POST['a'];
  $b = $_POST['b'];

suma($a,$b);# Realiza el llamado de la suma
mensaje();
multiplicar($a,$b);
resta($a,$b);
}


#Realizar una pagina una pagina con 5 funciones...
 ?>
