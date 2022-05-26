<?php 
require_once '../model/Imovel.php';

class ImovelController{
    // Salvar o imovel submetido pelo formulario

    public static function salvar(){
        //cria um objeto tipo imovel
        $imovel = new Imovel;
        // armazena as informações do POST via set

        $imovel->setDescricao($_POST['descricao']);
        $imovel->setValor($_POST['valor']);
        $imovel->setTipo($_POST['tipo']);
        $imovel->setFoto($_POST['foto']);

        //chama o metodo save para gravar as informações no banco de dados
        $imovel->save();
    }
    public static function listar(){
        //cria um objeto do tipo Imovel
        $imovel =new Imovel;
        //chama um metodo listAll()
        return $imovel->listAll();
    }
}
?>