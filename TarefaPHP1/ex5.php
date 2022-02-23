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
    <h2>Digite os numeros e veja sua ordem crescente!
            <form method="POST"> 
                <h5>Digite o numero A</h5>
                <input id="numero" type="number" name="numero1" />
                <h5>Digite o numero B</h5>
                <input id="numero" type="number" name="numero2" />
                <br> <br>
                <input id="botao1" type="submit" name="enviar" value="Enviar"/>
                <br> <br>
            </form>
        <?php
            $verif1=isset($_POST['numero1']);
            $verif2=isset($_POST['numero2']);
            if($verif1 && $verif2){
                $numero1= $_POST['numero1'];
                $numero2= $_POST['numero2'];
                if($numero1 > $numero2 ){
                    echo $numero2." ".$numero1;
                } if($numero1 < $numero2){
                    echo $numero1." ".$numero2;    
                }
            }
        ?>
    </div>
</body>
</html>