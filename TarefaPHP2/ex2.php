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
<a href="ex1.php"><img id="setaesq" src="seta2.png" alt="seta"></a>
<a href="ex3.php"><img id="setadir"   src="seta.png" alt="seta"></a>
    <form method="post">
        <h2>Digite a palavra a ser repetida</h2>
        <input type="text" id="palavra" name="palavra" value="">
        <br><br>
        <input type="submit" name="repetir" value="Repetir">

    </form>
  
    <?php 
    $verif1=isset($_POST['palavra']);
    
    if($verif1){
        $palavra = $_POST['palavra'];
        $repeticao = " ";
       for($i = 0 ; $i<=4 ; $i++ ) {
        
          $repeticao = $repeticao . $palavra ;
          echo "<p id='alinhamento'>" .$repeticao."</p>";
       }
       
    }

    

?>
</body>
</html>
 
