<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="post">
             Usuário <input type="text" name="usuario" value="">
             Senha <input type="password" name="senha" value="">
            <input type="submit" name="login" value="Log-in">
        </form>
        <?php
    
        if (isset($_POST['login'])){
            $senha = $_POST['senha'];
            $senhamd5=md5($senha);
            $senhacritp= crypt($senhamd5, 'igor');

            echo $senhacritp;
        }
        
        ?>
    </body>
    </html>