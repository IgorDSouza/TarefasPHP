<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
    <div class="alinha">
        <img src="phpimage.png" alt="icone php" />
        <h2>Digite o seu salario e calcule o reajuste!
                <form method="POST"> 
                    <h5>Digite o valor do seu salario</h5>
                    <input id="numero" type="number" name="numero1" />
                    <br> <br>
                    <input id="botao1" type="submit" name="enviar" value="Enviar"/>
                    <br> <br>
                </form>
            <?php
                $verif1=isset($_POST['numero1']);
                if($verif1){
                    $salario= $_POST['numero1'];
                    if($salario > 300 ){
                    $reajuste= $salario+($salario*0.30);
                    echo "Seu salario após reajuste é de ".$reajuste;
                    } if($salario <= 300){
                        $reajuste= $salario+($salario*0.50);    
                        echo "Seu salario após reajuste é de ".$reajuste;

                    }
                }
            ?>
    </div>
</body>
</html>