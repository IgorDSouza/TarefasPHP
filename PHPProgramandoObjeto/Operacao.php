<?php 
class Operacao{
    private $valor1;
    private $valor2;

    public function setValor1($valor1){
       $this->valor1 = $valor1;
    }
    public function getValor1(){
        return $this->valor1;
    }

    public function setValor2($valor2){
        $this->valor2 = $valor2;
    }
    public function getValor2(){
        return $this->valor2;
    }

    public function somar(){
        return $this->valor1 + $this->valor2;
    }

    public function subtrair(){
        return $this->valor1 - $this->valor2;
    }

    public function dividir(){
        return $this->valor1 / $this->valor2;
    }
    public function multiplicar(){
        return $this->valor1*$this->valor2;
    }
    public function exponencial(){
        return pow($this->valor1, $this->valor2);
    }
}
?>