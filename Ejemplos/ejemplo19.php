<html>
<head>
  <title> Prueba de array </title>
</head>
<body>
  <form action="ejemplo19.php" method="POST">
Dame el número del indice
<input type="text" name="dato"/>
<input type="submit" value="Mostrar">
</form>
</body>
</html>
<?php
if ($_POST) {
$a=$_POST['dato'];
$salon=array('Carlos','Said','Levik');
echo $salon[$a];
}
 ?>
