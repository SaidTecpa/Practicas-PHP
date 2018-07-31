<?php

  class hola{

    var $a = 6;
    var $b = 12;

    function mensaje(){
      echo $this->a * $this->b."<br>";
    }

    function divide(){
      echo $this->b / $this->a;
    }

  }
  $r = new hola();
  echo $r->divide();

  $rr = new hola();
  echo $rr->mensaje();
 ?>
