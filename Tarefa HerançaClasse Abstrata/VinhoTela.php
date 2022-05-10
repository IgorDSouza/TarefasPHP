<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssTelas.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div id="alinha">
    <img  style ="margin-left:10%" class="img" src="img/vinho.png" alt="vinho">
    <form method="post">
        <h2>Vinho</h2>
        <h3>Digite o nome da bebida</h3>
        <input type="text" name="nome" id="nome">
        <h3>Digite o preço da bebida</h3>
        <input type="number" name="preco" id="preco" value="0">
        <h3>Digite a safra da bebida</h3>
        <input type="safra" name="safra" id="safra">
        <h3>Digite o tipo da bebida</h3>
        <input type="tipo" name="tipo" id="tipo">
        <br><br>
        <input type="submit" name="enviar" class="enviar">
        <a href="index.php"><input type="button" class="enviar"value="Voltar"></a>
        </form>
</div>
        <?php
        require_once 'Vinho.php';

        
         
        if(isset($_POST['enviar'])){

            $objVinho = new Vinho($_POST['nome'],$_POST['preco'],$_POST['safra'],$_POST['tipo']);

            echo  "<div id='alert'>".$objVinho->mostrarBebida();

            $verificado=$objVinho->verificarPreco();

            if($verificado == true){
                echo"Valor : Dentro do orçamento <br>
                <a href='VinhoTela.php'><input type='button' class='enviar'value='Fechar'></a></div>";
            }else{
                echo"Valor : Caro <br>
                <a href='VinhoTela.php'><input type='button' class='enviar'value='Fechar'></a></div>";
            }


            
        }

    ?>
</body>
</html>