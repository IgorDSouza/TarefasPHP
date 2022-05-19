<h1> Usuarios</h1>
<hr>
<div>
        <table style="top:40px;">
            <thead>
                <tr>
                    <th>Login</th>
                    <th>Permissão</th>
                    <th><a href="cadUsuario.php">Novo</a></th>
                </tr>
            </thead>
        <tbody>
            <?php
            //importa o UsuarioController.php
            require_once '../controller/UsuarioController.php';
            //chama uma função php que permite informar a classe e o metodo que será acionado
            $usuarios = call_user_func(array('UsuarioController','listar'));
            //verifica se houve retorno
            if(isset($usuarios)){
                foreach($usuarios as $usuario){
                    ?>
                    <tr>
                        <!-- como o retorno é um objeto, devemos chamar os gets para mostrar o resultado -->
                        <td><?php echo $usuario->getLogin(); ?></td>
                        <td><?php echo $usuario->getPermissao(); ?> </td>
                        <td>
                            <a href="">Editar</a>
                            <a href="">Excluir</a>
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