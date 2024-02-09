<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueci Senha</title>
</head>

<?php
require 'usuario-consultar.php';
$usuarios = ListarUsuarios();


?>


<body>

    <div class="tabela">
        <h2>Usuarios</h2>
        <table>
            <!-- esse é o cabeçario da nossa tabela -->
            <thead>
                <th>Usuario</th>
                <th>Senha</th>
                <th>Editar</th>
                <th>Excluir</th>
            </thead>


            <!-- esse é o corpo da nossa tabela, a nossas linhas -->
            <tbody>
                <?php foreach ($usuarios as $lista) { ?>
                    <tr>
                        <td> <?php echo $lista["usuario"] ?> </td>
                        <td> <?= $lista["senha"] ?> </td>
                        <td><a href="" class="btn"> Editar </a></td>
                        <td>
                            <a href="usuario-excluir.php?CODIGO=<?= $lista['id'] ?>" 
                            class="btn"> Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


</body>

</html>