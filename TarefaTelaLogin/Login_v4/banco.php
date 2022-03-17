<?php
session_start();
    if(isset($_POST['btnLogin'])){
        // senha banco de dados
        $usuario='igor';
        $senhaBanco="123456";
        $senhaBancomd5=md5($senhaBanco);
        $senhaBancocrypto=crypt($senhaBancomd5,'etec');

        // senha fornecida pelo usuario
        $username=$_POST['username'];
        $senha=$_POST['pass'];
        $senhamd5=md5($senha);
        $senhacrypt=crypt($senhamd5,'etec');
        
        if($_POST['username']==$usuario && $senhaBancocrypto === $senhacrypt){
            $_SESSION['usuario']=$_POST['username'];
            header('Location:principal.php');
        } else{
            echo "Senha Invalida";
            header('Location:index.php?erro=1');
        }

    }

?>