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
<img style ="margin-left:10%"class="img" src="img/suco.png" alt="suco">
    <form method="post">
        <h2>Suco</h2>
        <h3>Digite o nome da bebida</h3>
        <input type="text" name="nome" id="nome">
        <h3>Digite o preço da bebida</h3>
        <input type="number" name="preco" id="preco" value="0">
        <h3>Digite o Sabor da bebida</h3>
        <input type="text" name="sabor" id="sabor"><br><br>
        <input type="submit" name="enviar" class="enviar">
        <a href="index.php"><input type="button" class="enviar"value="Voltar"></a>
        </form>
</div>
        <?php
        require_once 'Suco.php';

        
         
        if(isset($_POST['enviar'])){

            $objSuco = new Suco($_POST['nome'],$_POST['preco'],$_POST['sabor']);

            echo "<div id='alert'>".$objSuco->mostrarBebida();

            $verificado=$objSuco->verificarPreco();
            if($verificado == true){
                echo"Valor : Dentro do orçamento <br> <a href='SucoTela.php'><input type='button' class='enviar'value='Fechar'></a></div>";
            }else{
                echo"Valor : Caro <br><a href='SucoTela.php'><input type='button' class='enviar'value='Fechar'></a></div>";
            }


            
        }

    ?>
</body>
</html>