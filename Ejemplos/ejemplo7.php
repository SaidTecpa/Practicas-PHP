<?PHP
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

?>
