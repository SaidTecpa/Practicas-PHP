<?php
#Creando la clase de conexion
  class conexion{
      #Atributos privados
      private $usuario;
      private $senha;
      private $banco;
      private $servidor;
      private static $pdo;
      #Construtor
      public fuction _construct(){
        $this->servidor = "localhost";
        $this->banco = "colegio";
        $this->usuario = "root";
        $this->senha = "";
      }
      #Metodo para conectar
      public function conectar(){
        try{
            if(is_null(self::$pdo)){
              self::$pdo = new PDO("mysql;host=".$this->servidor.";dbname=".$this->banco, $this->usuario, $this->senha);
            }
            return self::$pdo;
        }catch(PDOException $e){
          echo "Error".$e->getMessage();
        }
      }
  }
?>


 ?>
