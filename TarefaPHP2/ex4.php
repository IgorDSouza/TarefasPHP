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
<a href="ex3.php"><img id="setaesq" src="seta2.png" alt="seta"></a>
<a href="ex5.php"><img id="setadir"   src="seta.png" alt="seta"></a>
    <form method="post">

        <h2>Digite o primeiro valor que receberá o desconto de 8%</h2>
        <input type="number" id="valor1" name="valor1" value="0" step="0.01">

        <h2>Digite o primeiro valor que receberá o desconto de 11%</h2>
        <input type="number" id="valor2" name="valor2" value="0" step="0.01">
        <br><br>
        <input type="submit" name="calcular" value="Calcular">

    </form>

    <?php 
    $verif1=isset($_POST['valor1']);
    $verif2=isset($_POST['valor2']);
  
    
    if($verif1 && $verif2){
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];

      $valor1 = $valor1-($valor1*0.08);
      $valor2 = $valor2-($valor2*0.11);

      echo "O total do primeiro valor com desconto ficou " . $valor1 ."<br> O total do segundo valor com desconto ficou ". $valor2;
    } 

    

?>
</body>
</html>
 
