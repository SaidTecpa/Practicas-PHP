<?php

  class Sujeto{

    #Atributos
      public $nombre = "Said";

    #Metodos
      public function hablar($mensaje){
        echo $mensaje;
      }
  }

  $sujeto = new Sujeto();
  #echo $persona->nombre;
  echo $sujeto->hablar("Hola Said")

 ?>
 
