<!DOCTYPE html>
    <?php
    session_start();
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
    body{
        background-image: url(images/bg2.jpg);
    }
    p#tela{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        text-align: center;
        position: relative;
        top: 50px;
        font-size: 4vw;
    }
    p{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        text-align: center;
        font-size: 3vw;
    }
    p#img{
        text-align: center;
    }
    </style>
    <title>Tela inicial</title>
</head>
<body>
 <p id="tela"> Tela Inicial</p>
<?php 
    $hora = date('H');
    if($hora >19){
        $saudadacao = "Boa noite";
    }elseif($hora >12){
        $saudadacao = "Boa tarde";
    }else{
        $saudadacao = "Bom dia";
    }
 
   echo " <p>{$saudadacao} {$_SESSION['usuario']}</p>";
?>
<p id="img"><img src="images/parrot.gif" alt="passarinloko"></p>
</body>
</html>