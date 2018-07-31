<html>
<head>
  <title> Ejemplo de Tabla </title>
</head>
<body>
  <table border=1>
<?php
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
 ?>
 <?php
$y = 5;
if ($y>0)
  {
    echo "positivo";
  }
else
  {
  echo "Negativo";
  }
  ?>
 </table>
 </body>
 </html>
