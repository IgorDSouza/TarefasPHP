<?php
require_once 'Bebida.php';

class Refrigerante extends Bebida{
    private $retornavel;

         //Construtor
     public function __construct($nome,$preco,$retornavel){
     parent::__construct($nome,$preco);
;
     $this->retornavel = $retornavel;
     }
    
    public function setRetornavel($retornavel){
        $this->retornavel=$retornavel;
    }
    public function getRetornavel(){
        return $this->retornavel;
    }

    public function mostrarBebida(){
        return "Nome : ".$this->getNome()." <br>Preço : R$".$this->getPreco(). "<br>Retornavel : ".$this->retornavel. "<br> <br>"; 
    }
    public function verificarPreco(){
        $retorno=false;
        if( $this->getPreco() < 5){
            $retorno=true;
        }
        return $retorno;

    }

}

?>