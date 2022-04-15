<?php
class Funcionario{
    private $nome;
    private $cidade;
    private $salHora;
    private $horasTrab;
    private $salarioFinal;

    //gets e sets
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome=$nome;
    }

    public function getCidade(){
        return $this->cidade;
    }
    public function setcidade($cidade){
        $this->cidade=$cidade;
    }

    public function getsalHora(){
        return $this->salHora;
    }
    public function setsalHora($salHora){
        $this->salHora=$salHora;
    }

    public function gethorasTrab(){
        return $this->horasTrab;
    }
    public function sethorasTrab($horasTrab){
        $this->horasTrab=$horasTrab;
    }

    public function getsalarioFinal(){
        return $this->salarioFinal;
    }
    public function setsalarioFinal($salarioFinal){
        $this->salarioFinal=$salarioFinal;
    }

    public function calcularSalario(){
        $this->salarioFinal=$this->horasTrab*$this->salHora*30;
        return $this->salarioFinal;
    }

  
    public function aumentaSalario($aumento){

        $this->salarioFinal=$this->salarioFinal+$aumento;

    } 
     public function mostrarDados(){
         if($this->salarioFinal==0){
        return "Nome: <br> $this->nome <br> <br>Cidade: <br> $this->cidade <br> <br>Salário/Hora: <br> $this->salHora <br><br> Horas Trabalhadas: <br>$this->horasTrab" ;
         }
         else{
            return "Nome: <br> $this->nome <br><br> Cidade: <br> $this->cidade <br><br> Salário/Hora: <br> $this->salHora <br><br> Horas Trabalhadas: <br> $this->horasTrab <br><br>Salário Final: <br> $this->salarioFinal" ;
         }
    }

}
$funcionario=new Funcionario(); 
?>
