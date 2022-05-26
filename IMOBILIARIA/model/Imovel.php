<?php 

require_once 'Banco.php';
require_once '../Conexao.php';

class Imovel extends Banco{
    private $id;
    private $descricao;
    private $foto;
    private $valor;
    private $tipo;

    public function remove($id){ 
        $result = false;

        //cria um objeto do foto conexao
        $conexao=new Conexao();

        // cria query de inserção passando os atributos que serão armazenados
        $query ="delete from imovel where id=:id";

        // cria a conexao com o banco de dados
        if($conn = $conexao ->getConection()){
            // prepara a query para execução
            $stmt =$conn->prepare($query);
            //executa a query
            if($stmt->execute(array(':id'=>$this->id))){
                $result=$stmt->rowCount();
            }
        }
    return $result;
}

    public function find($id){}

    public function count(){}

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao=$descricao;
    }

    public function getFoto(){
        return $this->foto;
    }
    
    public function setFoto($foto){
        $this->foto=$foto;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor=$valor;
    }
    public function getTipo(){
        $retorno=" ";
        if($this->tipo == "A"){
            $retorno="Apartamento";

        } if($this->tipo == "C"){
            $retorno="Casa";

        } if($this->tipo == "S"){
            $retorno="Sobrado";

        }
        return $retorno;
    }

    public function setTipo($tipo){
        
        $this->tipo=$tipo;
    }

     public function save(){
         
        $result = false;

        //cria um objeto do foto conexao
        $conexao=new Conexao();

        // cria query de inserção passando os atributos que serão armazenados
        $query ="insert into imovel (id,descricao,foto,valor,tipo) values (null,:descricao,:foto,:valor,:tipo)";

        // cria a conexao com o banco de dados
        if($conn = $conexao ->getConection()){
            // prepara a query para execução
            $stmt =$conn->prepare($query);
            //executa a query
            if($stmt->execute(array(':descricao'=>$this->descricao,':foto' => $this->foto, ':valor' => $this->valor, ':tipo' => $this->tipo))){
                $result=$stmt->rowCount();
            }
        }
    return $result;
     }

     public function listAll(){
         //cria um objeto do foto conexao
         $conexao = new Conexao();
         
         //cria a conexao com o banco de dados
         $conn= $conexao->getConection();

         //cria query de seleção
         $query=" SELECT * FROM imovel";
         
         //prepara a query para execução
         $stmt = $conn->prepare($query);

         //cria um array para receber o resultado da selecao
         $result=array();
         
         //executa a query
         if($stmt->execute()){
             //o resultado da busca será retornado como objeto da classe
             while($rs = $stmt->fetchObject(Imovel::class)){
                 //armazena esse objeto em uma posição do vetor
                 $result[] = $rs;
             }
         }else{
             $result=false;
         }
        return $result;
     }
}
?>