<?php
require_once 'Bebida.php';
class Vinho extends Bebida{
    private $safra;
    private $tipo;

      //Construtor
    public function __construct($nome,$preco,$safra,$tipo){
        parent::__construct($nome,$preco);

        $this->safra = $safra;
        $this->tipo = $tipo;
    }

    public function setSafra($safra){
        $this->safra=$safra;
    }
    public function getSafra(){
        return $this->safra;
    }

    public function setTipo($tipo){
        $this->tipo=$tipo;
    }
    public function getTipo(){
        return $this->tipo;
    }

    public function mostrarBebida(){
        return "Nome : ". $this->getNome()." <br>Preço : R$".$this->getPreco(). "<br>Safra : ".$this->safra . " <br>Tipo : " .$this->tipo."<br> <br>"; 
    }
    public function verificarPreco(){
        $retorno=false;
        if( $this->getPreco() < 25){
            $retorno=true;
        }
        return $retorno;

    }
}

?>