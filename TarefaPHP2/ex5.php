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
<a href="ex4.php"><img id="setaesq" src="seta2.png" alt="seta"></a>
<a href="ex6.php"><img id="setadir"   src="seta.png" alt="seta"></a>
    <form method="post">
        <h3>Exercicio5</h3>
        <h2>Digite o seu nome:</h2>
        <input type="text" id="nome" name="nome" value="">

        <h2>Qual seu sexo? </h5>
        <select name="sexo" id="sexo">
            <option value=0> Masculino</option>
            <option value=1> Feminino</option>
        </select>

        <h2> Digite sua idade:</h5>
        <input type="number" name="idade" />
        <br><br>
        <input type="submit" name="calcular" value="Calcular">

    </form>
    <?php 
    $verif1=isset($_POST['nome']);
    $verif2=isset($_POST['sexo']);
    $verif3=isset($_POST['idade']);
    
    if($verif1 && $verif2 && $verif3){
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $idade = $_POST['idade'];
    
        if($sexo == 1 && $idade <25){
            echo $nome."Aceita";
        }else{
            echo $nome."Não aceita";
        }
    }
?>
</body>
</html>
 