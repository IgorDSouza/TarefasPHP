<?php
require_once 'Bebida.php';

class Suco extends Bebida{
    private $sabor;

      //Construtor
      public function __construct($nome,$preco,$sabor){
        parent::__construct($nome,$preco);
   
        $this->sabor = $sabor;
        
    }

    public function setSabor($sabor){
        $this->sabor=$sabor;
    }
    public function getSabor(){
        return $this->sabor;
    }

    public function mostrarBebida(){
        return "Nome : ". $this->getNome()." <br>Preço : R$".$this->getPreco(). "<br>Sabor : ".$this->sabor. "<br> <br>"; 
    }
    public function verificarPreco(){
        $retorno=false;
        if( $this->getPreco() < 2.5){
            $retorno=true;
        }
        return $retorno;

    }
}

?>