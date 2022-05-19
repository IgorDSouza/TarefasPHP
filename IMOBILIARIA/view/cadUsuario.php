<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="cadUsuario" id="cadUsuario" action="" method="post">
        Login: <input type="text" name="login" id="login"></br>
        Senha: <input type="password" name="senha1" id="senha1"></br>
        Confirmação da senha <input type="password" name="senha2" id="senha2" > </br>
        <select name="permissao" id="permissao">
            <option value="0"></option>
            <option value="A">Administrador</option>
            <option value="C">Comum</option>
        </select></br><br/>
        <input type="submit" name="btnSalvar" id="btnSalvar">
        <a href="listUsuario.php"> Ver lista de cadastro </a>
</form>
    
</body>
</html>
<?php
    // verifica se o botao submit foi acionado
    if(isset($_POST['btnSalvar'])){
        //importa o usuarioControler.php
        require_once '../controller/UsuarioController.php';
        //chama uma funcao php que permite informar a classe e o metodo a ser acionado
        call_user_func(array('UsuarioController','salvar'));

    }
 ?>   
