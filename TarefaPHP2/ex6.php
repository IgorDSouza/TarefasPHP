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
<a href="ex5.php"><img id="setaesq" src="seta2.png" alt="seta"></a>
<a href="ex7.php"><img id="setadir"   src="seta.png" alt="seta"></a>
    <form method="post">
        <h3>Exercicio6</h3>
        <h2>Digite a palavra a ser repetida</h2>
        <input type="text" id="palavra" name="palavra" value="">

        <h2>Digite o numero de vezes que ela será repetida</h2>
        <input type="number" id="numero" name="numero" value="">
        <br><br>
        <input type="submit" name="repetir" value="Repetir">

    </form>

    <?php 
    $verif1=isset($_POST['palavra']);
    $verif2=isset($_POST['numero']);
    
    if($verif1 && $verif2){
        $palavra = $_POST['palavra'];
        $repeticao = $_POST ['numero'];

       for($i = 1 ; $i <= $repeticao ; $i++ ) {
          echo $i."-".$palavra."<br>";
       }
       
    }
    ?>
</body>
</html>
     