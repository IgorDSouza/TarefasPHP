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
            <h2>Digite um numero para saber se ele é maior que 10 ou não!</h2>
            <form method="POST"> 
                <input id="numero" type="number" name="numero" /> <br><br><br>
                <span class="emoji">🤔</span><input id="botao1" type="submit" name="enviar" value="Comparar"/><span class="emoji">🤔</span>
                <br>
            </form>
        <?php
            $verif=isset($_POST['numero']);
            if($verif){
                $numero= $_POST['numero'];
                if($numero > 10 ){
                  echo " <h2 style='color:green'> o numero é maior do que 10 </h2> ";
                } else{
                   echo " <h2 style='color:green'>o numero é menor que 10 </h2> ";
                }
            }
        ?>
    </div>
</body>
</html>