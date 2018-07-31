<?php

    class database{
        function conectar(){
          $server = "localhost";
          $usuario = "root";
          $contraseña = "";
          $basededatos = "login";


          $cadenadeconexion = mysqli_connect($server, $usuario, $contraseña, $basededatos)
            or die ("Error al conectar la base de datos");

            if ($cadenadeconexion){
              echo "Yei conexion ";
            }
        }


    }

 ?>
