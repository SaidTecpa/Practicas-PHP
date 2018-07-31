<html>
<head>
  <title> Números </title>
</head>
<body bgcolor=#0A0A2A text=white>
<form action="cuatro.php" method="POST">
  <font face="arial">
    <center>
      <h1><big>Números</big></h1>
    </center>
  </font>
      <hr>
      <center>
        <table>
          <tr>
            <br>
            <p>Cual es el número: </p><p><input type="text" name="numero"/></p>
            <p><input type="submit" value="Calcular"></p>
          </table>
        </body>
        </html>
<?php
if ($_POST) {
$a=$_POST["numero"];
for ($i=$a; $i <=10 ; $i++) {
  echo "<br>".$i;
}
  }
?>
