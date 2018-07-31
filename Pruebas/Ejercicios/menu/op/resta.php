<html>
<head>
  <title> Resta </title>
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

  <a href="/PHP2/Ejercicios/menu/index.php">Operaciones Basicas</a>

  <form action="resta.php" method="post">
    Dame el primer valor: <br>
    <input type="text" name="a"> <br>
    Dame el segundo valor: <br>
    <input type="text" name="b"> <br>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>






<?php
if($_POST){
//se recuperarn los valores del formulario
  $q = $_POST['a'];
  $w = $_POST['b'];

//creacion de la clase
  class dividir{
      //declaracion de variable
      var $r;

      //creacion de la funcion restar
      function f($q,$w){
        $this->r=$q-$w;
      }


      //creacion de la funcion que muestra los resultados
      function m(){
        echo $this->r,"<br>";
      }
  }

  //Cracion de objetos
  $ob=new dividir();
  //llama a la funcion que esta dentro de la clase
  $ob->f($q,$w);



  $ob->m();


}
?>
