<?php
 session_start();
    if(isset($_POST['btnLogin'])){
        // senha banco de dados 
        
        require_once("usuario.php");
        $user1=new Usuario();
        $user1->setUsuario("igor");
        $user1->setSenha("123456");
        $senhaBancomd5=md5($user1->getSenha());
        $user1->setSenha(crypt($senhaBancomd5,'etec'));

        // senha fornecida pelo usuario
        $username=$_POST['username'];
        $senha=$_POST['pass'];
        $senhamd5=md5($senha);
        $senhacrypt=crypt($senhamd5,'etec');
        
        if($_POST['username']==$user1->getUsuario() && $user1->getSenha() === $senhacrypt){
            $_SESSION['usuario']=$_POST['username'];
            header('Location:principal.php');
        } else{
            echo "Senha Invalida";
            header('Location:index.php?erro=1');
        }

    }

?>