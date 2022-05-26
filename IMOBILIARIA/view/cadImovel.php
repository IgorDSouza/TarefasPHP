<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="alinha">
        
        <form name="cadImovel" id="cadImovel" action="" method="post">
        <h2>Cadastrar Imovel</h2></br>
            Descrição:</br> <input type="text" name="descricao" id="descricao"></br>
            Valor:</br> <input type="text" name="valor" id="valor"></br>
            Tipo: </br><select name="tipo" id="tipo">
            <option value="C">Casa</option>
            <option value="A">Apartamento</option>
            <option value="S">Sobrado</option>


            </select><br/>
            Foto:</br> <input type="text" name="foto" id="foto" ><br/></br>
            <input type="submit" name="btnSalvar" id="btnSalvar" value="Cadastrar"></br></br>

            <a href="listImovel.php"> Ver lista de imóveis </a>
        </form>
    </div>
</body>
</html>
<?php
    // verifica se o botao submit foi acionado
    if(isset($_POST['btnSalvar'])){
        //importa o usuarioControler.php
        require_once '../controller/ImovelController.php';
        //chama uma funcao php que permite informar a classe e o metodo a ser acionado
        call_user_func(array('ImovelController','salvar'));

    }
 ?>   
