<?php
function m(){

$r = 0;
for ($i=1; $i <=100 ; $i++) {
  #$c = $i%2;

  if($i%2==0){
    #echo "El número: ".$i." es par";
    $r = $r+$i;

    #echo "---- resultado: ".$t."<br>";




  }

  else
  {
    echo $i." Es impar<br>";


  #echo "El número: ".$num." es impar";

  }
  #echo "<br>";
  #return $;

}
echo "El resultado de la suma de los pares: ".$r;
  #echo "<font face='arial'><br><center>".$i."</center></font>";

}

echo "<br>";
m();
#return "<br>".$r."<br>";

?>
