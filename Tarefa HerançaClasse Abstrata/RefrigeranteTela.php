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
    <img class="img" src="img/refriicon.png" alt="refri">
    <form method="post"> 
    <h2>Refrigerante</h2></br>
        <h3>Digite o nome da bebida</h3>
        <input type="text" name="nome" id="nome">
        <h3>Digite o preço da bebida</h3>
        <input type="number" name="preco" id="preco" value="0">
        <h3>Escolha se é retornavel ou não</h3>
        <input type="radio"  name="check" value="true" >
        <label for="sim">Sim, é retornavel  </label>
        <input type="radio"  name="check" value="false">
        <label for="nao">Não, não é retornavel </label><br><br>
        <input type="submit" name="enviar" class="enviar">
        <a href="index.php"><input type="button" class="enviar"value="Voltar"></a>
        
        </form>
    </div>
    <?php
        require_once 'Refrigerante.php';

        
         
        if(isset($_POST['enviar'])){
           

            $retornavel ;
            if($_POST['check'] == "true"){
                $retornavel = "Sim";
            }else{
                $retornavel = "Não";
            }

            $objRefrigerante = new Refrigerante($_POST['nome'],$_POST['preco'],$retornavel);

            echo "<div id='alert'>".$objRefrigerante->mostrarBebida();
        
            $verificado=$objRefrigerante->verificarPreco();
            if($verificado == true){
                echo"Valor : Dentro do orçamento <br>
                <a href='RefrigeranteTela.php'><input type='button' class='enviar'value='Fechar'></a></div>";
            }else{
                echo"Valor : Caro <br>
                <a href='RefrigeranteTela.php'><input type='button' class='enviar'value='Fechar'></a></div>";
            }


            
        }

    ?>
       
</body>
</html>