<?PHP
$a = $_POST["valor1"];
$b = $_POST["valor2"];
$c = $_POST["valor3"];
echo $a."<br>";
echo $b."<br>";
echo $c."<br>";
$d = (-$b+sqrt(($b*$b)-(4*$a*$c)))/(2*$a);
echo "Primer valor:".$d."<br>";
$e = (-$b-sqrt(($b*$b)-(4*$a*$c)))/(2*$a);
echo "Segundo Valor:".$e;
?>
