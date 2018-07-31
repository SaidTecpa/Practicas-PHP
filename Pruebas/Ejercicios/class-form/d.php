<form action="index.php" method="post">
  Dame el primer valor: <br>
  <input type="text" name="a"> <br>
  Dame el segundo valor: <br>
  <input type="text" name="b"> <br>
  <input type="submit" value="Enviar">
</form>

<?php
if($_POST){
//se recuperarn los valores del formulario
  $q = $_POST['a'];
  $w = $_POST['b'];

//creacion de la clase
  class dividir{
      //declaracion de variable
      var $r;

      //creacion de la funcion multiplicar
      function f($q,$w){
        $this->r=$q*$w;
      }

      //creacion de la funcion dividir
      function div($q,$w){
        $this->r=$q/$w;
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


  $ob1=new dividir();
  $ob1->div($q,$w);

  $ob->m();
  $ob1->m();

}
//realizar una pagina que muetre un menu con las operaciones basicas y muestre el resultado de acuerdo al seleccion

 ?>
