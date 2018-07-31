<html>
<head>
  <title> Suma de Valores </title>
</head>
<body>
  <center> Suma de Valores </center>
  <form action="ejemplo14.php" method="POST">
    <table>
      <tr>
        <td><input type="text" name="valor1"></td>
        <tr>
          <td><input type="text" name="valor2"></td>
          <tr>
            <input type="submit" value="suma"></td>
    </table>
  </form>
</body>
</html>
<?php
$a=0;
$b=0;
if ($_POST) {
$a=$_POST['valor1'];
$b=$_POST['valor2'];
$c=$a+$b;
echo $c;
}
 ?>
