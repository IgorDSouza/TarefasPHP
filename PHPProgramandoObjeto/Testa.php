<?php 
require_once("Operacao.php");

$op1=new Operacao();
$op1->setValor1(15);
$op1->setValor2(12);

echo "<br/>".$op1->getValor1();
echo "<br/>".$op1->getValor2();

echo "<br/>".$op1->somar();
echo "<br/>".$op1->subtrair();
echo "<br/>".$op1->multiplicar();
echo "<br/>".$op1->dividir();
echo "<br/>".$op1->exponencial();

?>