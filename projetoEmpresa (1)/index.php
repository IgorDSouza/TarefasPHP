
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link link rel="stylesheet" type="text/css" href="css.css" />
    <title>Document</title>
</head>
<body>
        <h2 class="titulo"> Sistema Empresárial </h2>
    <span id="menu">
        <form  action="" method="POST">
       <span class="btnborda"onclick='cadastro()'> <img src='img/adicionar-usuario.png' class='img'/> <input class="btn" type="button" name="cadastrar" id="cadastrar" value="Cadastro" /></span><br><br><br>
       <span class="btnborda" onclick='calcularSalario()' > <img src='img/salario.png' class='img'/><input class="btn" type="button" name="calculoSal" id="calculoSal" value="Calcular Salario" /></span><br><br><br>
       <span class="btnborda"  onclick='aumento()' > <img src='img/aumento.png' class='img'/><input class="btn" type="button" name="aumentoSal" id="aumentoSal" value="Aumento de Salário" /></span><br><br><br>
        </form>
    </span>

    <div id="cadastro">
            <h2 class="subtitulo"> Sistema de cadastro de funcionários</h2>
            <form action="" method="POST">
                <p>Digite o nome do funcionário</p>
                <input type="text" name="nome" id="nome"/>
                <p>Digite a cidade onde o funcionário reside</p>
                <input type="text" name="cidade" id="cidade"/>
                <p>Informe o ganho por hora do funcionário </p>
                <input type="number" name="salHora" id="salHora"/>
                <p>Informe a quantidade de horas trabalhadas do funcionario</p>
                <input type="number" name="horasTrab" id="horasTrab"/>
                <p>Defina o salario total do funcionário ou clique no botão para o calculo automático</p>
                <input  type="number" name="salarioFinal" id="salarioFinal" value="0"/><br><br><br>
                <input type="submit" name="cadastrar" id="cadastrar" class="btnsec" value="Cadastrar"/>
                <input type="button" name="fecha" id="fecha" class="btnsec" value="Fechar" onclick='fecharCad()'/>
            </form>
    </div>

    <?php
session_start();
require_once("Funcionario.php");
if(isset($_POST['cadastrar'])){

    $funcionario->setNome($_POST["nome"]);
    $funcionario->setCidade($_POST["cidade"]);
    $funcionario->sethorasTrab($_POST["horasTrab"]);
    $funcionario->setsalHora($_POST["salHora"]);
    $funcionario->setsalarioFinal($_POST["salarioFinal"]);
    $mostra=$funcionario->mostrarDados();
    echo "<form  action='' method='POST' id='mostra' >
    <span class='btnborda' onclick='mostrar()' > <img src='img/mostrar.png' class='img'/><input class='btn' type='button' name='mostra'  value='Mostrar' /></span><br><br><br></form>";

    
}
   else if(isset($_POST['aumentar'])){

        $funcionario->setNome($_POST["nome"]);
        $funcionario->setCidade($_POST["cidade"]);
        $funcionario->sethorasTrab($_POST["horasTrab"]);
        $funcionario->setsalHora($_POST["salHora"]);
        $funcionario->setsalarioFinal($_POST["salarioFinal"]);
        $funcionario->aumentaSalario($_POST["aumento"]);
        $mostra=$funcionario->mostrarDados();
        echo "<form  action='' method='POST' id='mostra' >
        <span class='btnborda' onclick='mostrar()' > <img src='img/mostrar.png' class='img'/><input class='btn' type='button' name='mostra'  value='Mostrar' /></span><br><br><br></form>";
        
}
$salario=$funcionario->calcularSalario();
?>
    <div id="mostrar">
        <?php
            echo "<p id='mostrastyle'>".$mostra."</p>";
            echo "<br><form  action='' method='POST' id='fecha' >
            <span class='btnborda' onclick='fecharmostra()' > <img src='img/sair.png' class='img'/><input class='btn' type='button' name='fecha'  value='Fechar' /></span><br><br><br></form>";
        ?>
    </div>

    <div id="salario">
        <?php
           echo " <p id='mostrastyle'> Salario Final Calculado ".$salario ."</p>";
        ?>
    </div>

    
    <div id="aumentosal">
       
    <form action="" method="POST">
    <h2 class="subtitulo"> Aumento Salarial (Digite os dados do usuário para busca no banco de dados)</h2>
            <form action="" method="POST">
                <p>Digite o nome do funcionário</p>
                <input type="text" name="nome" id="nome"/>
                <p>Digite a cidade onde o funcionário reside</p>
                <input type="text" name="cidade" id="cidade"/>
                <p>Informe o ganho por hora do funcionário </p>
                <input type="number" name="salHora" id="salHora"/>
                <p>Informe a quantidade de horas trabalhadas do funcionario</p>
                <input type="number" name="horasTrab" id="horasTrab"/>
                <p>Informe o antigo salário</p>
                <input  type="number" name="salarioFinal" id="salarioFinal"/>
                <p>Informe o aumento salarial desejado</p>
                <input type="number" name="aumento" id="aumento"/><br><br><br>
                <input type="submit" name="aumentar" id="aumentar" class="btnsec" value="Aumentar"/>  
                <input type="button" name="fecha" id="fecha" class="btnsec" value="Fechar" onclick='fecharAum()'/>
            </form>
    </div>

    <script src="js.js"></script>
</body>
</html>