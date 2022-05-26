<?php 
require_once '../model/Usuario.php';

class UsuarioController{
    // Salvar o usuario submetido pelo formulario

    public static function salvar(){
        //cria um objeto tipo usuario
        $usuario = new Usuario;
        // armazena as informações do POST via set

        $usuario->setLogin($_POST['login']);
        $usuario->setSenha($_POST['senha1']);
        $usuario->setPermissao($_POST['permissao']);

        //chama o metodo save para gravar as informações no banco de dados
        $usuario->save();
    }
    public static function listar(){
        //cria um objeto do tipo Usuario
        $usuario =new Usuario;
        //chama um metodo listAll()
        return $usuario->listAll();
    }
}
?>