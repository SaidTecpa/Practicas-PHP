<html>
<head>
  <title> Ejemplo de Tabla </title>
</head>
<body>
  <table border=1>
<?php
$i = 0;
  for ($i = 1; $i<=10;$i++)
  {
    for ($w=1; $w<=10; $w++)
    {
      echo "<td>".$w."</td>";
  }echo "<tr>";}
 ?>
 </table>
 </body>
 </html>
