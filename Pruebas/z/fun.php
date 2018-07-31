<?php
  #Buscando la clase
include_once "conexion.php";
include_once "fun.php";
#Creando la clase
class Funcionario{
    #Atributos
    private $con;
    private $objfc;
    private $idFuncionario;
    private $nome;
    private $email;
    private $senha;
    private $dataCadastro;
    #Construtor
    public function _construct(){
        $this->con = new Conexion();
        $this->objfc = new Funcoes();
    }
    #Metodos Magico
    public function _set($atributo, $valor){
      $this->$atributo = $valor;
    }
    public function _get($atributo){
      return $this->$atributo;
    }
    #Metodos
    public function querySeleciona($dado){
      try{
        $this->idFuncionario = $this->objfc->base64($dado, 2);
        $cat = $this->con->conectar()->prepare("SELECT 'idFuncionario', 'nome', 'email', 'dataCadastro' FROM 'funcionario' WHERE 'idFuncionario' = :idFunc;");
      }
    }
}


 ?>
