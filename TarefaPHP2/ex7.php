<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css2.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
<img id="php" src="php.png" width="30%" alt="php"/>
<a href="ex6.php"><img id="setaesq" src="seta2.png" alt="seta"></a>
<a href="ex8.php"><img id="setadir"   src="seta.png" alt="seta"></a>
    <form method="post">
         <h3>Exercicio7</h3>
        <h2>Digite os 10 numeros a serem somados usando espaço para dividi-los</h2>
        <input type="text" id="numero" name="numero" value="">
        <br><br>
        <input type="submit" name="soma" value="Somar">

    </form> 

    
<?php 
    $verif1=isset($_POST['numero']);
    
    if($verif1){
        $str = $_POST ['numero'];

    $soma = 0;
    $soma_negativo = 0;
    $separar = explode(" ",$str);
     
    foreach($separar as $i){
    if($i > 0){
    $soma+=$i;
    }else if($i<0){
    $soma_negativo+=$i;
    }   
    }
    echo"<br> Soma dos numeros positivos  $soma";
    echo"<br> Soma dos numeros negativos  $soma_negativo";
}
    
    
    ?>
</body>
</html>
     
    