<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<h1 style="text-align:center;"> Imoveis</h1>
<hr>
<div class="alinha">
        <table style="top:40px;" class="tabela">
            <thead>
                <tr >
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Tipo</th>
                    <th>Foto</th>


                    <th><a href="cadImovel.php">Novo</a></th>
                </tr>
            </thead>
        <tbody>
                    <?php
                    //importa o ImovelController.php
                    require_once '../controller/ImovelController.php';
                    //chama uma função php que permite informar a classe e o metodo que será acionado
                    $imoveis = call_user_func(array('ImovelController','listar'));
                    //verifica se houve retorno
                    if(isset($imoveis)){
                        foreach($imoveis as $imovel){
                            ?>
                            <tr >
                                <!-- como o retorno é um objeto, devemos chamar os gets para mostrar o resultado -->
                                <td><?php echo $imovel->getDescricao(); ?></td>
                                <td><?php echo $imovel->getValor(); ?> </td>
                                <td><?php echo $imovel->getTipo(); ?> </td>
                                <td><?php echo $imovel->getFoto(); ?> </td>


                                <td>
                                    <a href="">Editar</a>
                                    <a href="excluir.php">Excluir</a>
                                </td>
                            </tr>
                            <?php
                        }
                    }else{
                        ?>
                        <tr>
                            <td colspan="5">Nenhum registro encontrado</td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
  </body>