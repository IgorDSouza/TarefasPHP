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
        <h2>Digite os numeros e veja se A+C é maior, menor ou igual a B.D! </h2> 
            <form method="POST"> 
                <h5> Digite o numero A </h5>
                <input id="numero" type="number" name="numero1" />
                <h5> Digite o numero B </h5>
                <input id="numero" type="number" name="numero2" />
                <h5> Digite o numero C </h5>
                <input id="numero" type="number" name="numero3" />
                <h5> Digite o numero D </h5>
                <input id="numero" type="number" name="numero4" />
                <br><br>
                <input id="botao1" type="submit" name="enviar" value="Calcular"/>
                <br> <br>
            </form>
        <?php
            $verif1=isset($_POST['numero1']);
            $verif2=isset($_POST['numero2']);
            $verif3=isset($_POST['numero3']);
            $verif4=isset($_POST['numero4']);

            if($verif1 && $verif2 && $verif3 && $verif4){
                $numero1= $_POST['numero1'];
                $numero2= $_POST['numero2'];
                $numero3= $_POST['numero3'];
                $numero4= $_POST['numero4'];
                $soma = $numero1+$numero3;
                $multi = $numero2*$numero4;
                if($soma > $multi){
                    echo " A+C é maior a multiplicação entre B.D  (".$soma .">" . $multi.")";
                }if($soma == $multi){
                    echo " A+C é igual a multiplicação entre B.D (".$soma. "=".$multi.")";
                }if($soma < $multi){
                    echo " A+C é menor que a multiplicação entre B.D (".$soma. "<" .$multi.")";

                }
                
            }
        ?>
    </div>
</body>
</html>