<html>
<head>
  <title> Suma de Valores </title>
</head>
<body bgcolor ="clear blue">
  <marquee width="1300" height="650" behavior="alternate" style="border:solid">
  <marquee behavior="alternate">
Suma de Valores.
  </marquee>
  <form action="ejemplo15.php" method="POST">
<center>
    <table>
      <tr>
        <font face= 'arial'>
          <p><h4><u>Nombre producto:</u></h4> <input type = "text" name = "Nombre_del_producto"/></p>
          <tr>
            <p> <h4><u>Cantidad:</u></h4> <input type = "text" name = "Cantidad_del_producto"/></p>
            <tr>
              <p> <h4><u>Precio:</u></h4> <input type = "text" name = "Precio_del_producto"/></p>
              <tr>
                <p> <h4><u>Descuento:</u> </h4><input type = "text" name = "Descuento"/></p>
          </font>
          <tr>
        <p> <input type="submit" value="Calcular"></p>
        <tr>
    </table>
  </center>
  </form>
</body>
</html>
<?php
if ($_POST) {
$a = $_POST["Nombre_del_producto"];
$b = $_POST["Cantidad_del_producto"];
$c = $_POST["Precio_del_producto"];
$d = $_POST["Descuento"];
$e = .16;
$f = (($b*$c)*$e);
$g = ($b*$c)+$f;
$h = ($g-$d);
echo $a."<br>";
echo "Precio de producto mas IVA: ".$g."<br>";
echo "Precio final con descuento: ".$h;
}
 ?>
