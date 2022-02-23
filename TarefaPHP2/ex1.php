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
<span><img id ="php" src="php.png" width="30%" alt="php"/></span>
<a href="ex8.php"><img id="setaesq" src="seta2.png" alt="seta"></a>
<a href="ex2.php"><img id="setadir" src="seta.png" alt="seta"></a>
    <form method="post">
        <h2>Calculo da altura de crianças</h2>
        <h2>Digite o nome da primeira criança:</h2>
        <input type="text" id="nome1" name="nome1" value="">

        <h2>Digite a altura da primeira criança:</h2>
        <input type="number" name="altura1" value="0" step="0.01">

        <h2>Digite o nome da segunda criança:</h2>
        <input type="text" id="nome2" name="nome2" value="">

        <h2>Digite a altura da segunda criança:</h2>
        <input type="number" name="altura2" value="0" step="0.01">
        <br><br>
        <input type="submit" name="calcular" value="Calcular">

    </form>
   
    <?php 
    $verif1=isset($_POST['nome1']);
    $verif2=isset($_POST['nome2']);
    $verif3=isset($_POST['altura1']);
    $verif4=isset($_POST['altura2']);
    
    if($verif1 && $verif2 && $verif3 && $verif4){
        $nome1 = $_POST['nome1'];
        $nome2 = $_POST['nome2'];
        $altura1 = $_POST['altura1'];
        $altura2 = $_POST['altura2'];

       for($i = 0 ; $altura1>=$altura2 ; $i++ ) {
           $altura1 = $altura1+0.02;
           $altura2 = $altura2+0.03;
           $i;
       }
       echo "Demorou " .$i. " anos para ".$nome2. " ficar maior que " .$nome1;
    }

    

?>
</body>
</html>
 
