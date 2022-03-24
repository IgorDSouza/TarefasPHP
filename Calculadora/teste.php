
<?php 
require_once("Operacao.php");
$op1=new Operacao();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <h2>Calculadora<img src="calculadore.jpg" alt="calculadora" id="calculadora"/></h2>
        
        <h3>Digite o primeiro numero a ser usado na operação</h3>
        <input type="number" name="numero1" id="numero"/>
        <h3>Digite o segundo numero a ser usado na operação</h3>
        <input type="number" name="numero2" id="numero"/>
         <h3 id="escolha">Escolha a operação desejada</h3>
         <select name="operacao" id="operacao">
            <option value=1>Somar</option>
            <option value=2>Subtrair</option>
            <option value=3>Dividir</option>
            <option value=4>Multiplicação</option>
            <option value=5>Exponencial</option>
        </select>
        <br><br><br><input type="submit" name="calcular" id="calcular" value="Calcular" />
    </form>
</body>
</html>

<?php
if (isset($_POST['calcular']) ) {
$op1->setValor1($_POST ["numero1"]);
$op1->setValor2($_POST ["numero2"]);
$operacao=($_POST["operacao"]);

if($operacao == 1){
    echo "<h3> Resultado = ".$op1->somar()."</h3>";
}
else if($operacao ==2){
    echo "<h3> Resultado = ".$op1->subtrair(). "</h3>";
}
else if($operacao==3){
    echo "<h3> Resultado = ".$op1->dividir(). "</h3>";
}
elseif($operacao==4){
    echo "<h3> Resultado = ".$op1->multiplicar(). "</h3>";
}
elseif($operacao==5){
    echo "<h3> Resultado = ".$op1->exponencial(). "</h3>";
}
}
?>