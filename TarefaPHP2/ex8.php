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
    <a href="ex7.php"><img id="setaesq" src="seta2.png" alt="seta"></a>
    <a href="ex1.php"><img id="setadir"   src="seta.png" alt="seta"></a>
    <form method="post">
        <h3>Exercicio8</h3>
        <h2>Digite o numero a calcular a tabuada</h2>
        <input type="number" id="numero" name="numero" value="">
        <br><br>
        <input type="submit" name="calcular" value="Calcular">

    </form>
    
    <?php 
    $verif1=isset($_POST['numero']);

    
    if($verif1){
        $numero = $_POST ['numero'];
        $result = 0;
       for($i = 1 ; $i <= 10 ; $i++ ) {
         
          if($i == 5 && $numero!= 5){
             $i=6; 
          } 
         $result = $numero*$i;
          echo $numero." x ".$i ." = ".$result."<br>";
       }
       
    }
    ?>
</body>
</html>
     