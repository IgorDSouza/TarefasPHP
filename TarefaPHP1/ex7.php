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
            <h2>Veja qual o seu peso ideal! </h2> 
                <form method="POST"> 
                    <h5>Qual seu sexo? </h5>
                    <select name="sexo" id="sexo">
                        <option value=0> Masculino</option>
                        <option value=1> Feminino</option>
                    </select>
                    <h5> Digite sua altura </h5>
                    <input id="numero" type="number" name="altura" step="0.01"/>
                        <br> <br>
                    <input id="botao1" type="submit" name="enviar" value="Calcular"/>
                    <br> <br>
                </form>
            <?php
                $verif1=isset($_POST['sexo']);
                $verif2=isset($_POST['altura']);

                if($verif1 && $verif2 ){
                    $sexo= $_POST['sexo'];
                    $altura= $_POST['altura'];
                    
                    if($sexo==0){
                    $peso=(72.7 * $altura)-58;
                    echo "Seu peso ideal é ". $peso;
                    }
                    if($sexo==1){
                        $peso=(62.1 * $altura)-44.7;
                        echo "Seu peso ideal é ". $peso;
                    }
                }
            ?>
    </div>
</body>
</html>