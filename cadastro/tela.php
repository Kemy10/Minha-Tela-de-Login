<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>tela usuario </title>
</head>

<body>
    <div class="container login-usuario">
        <h2 class="text-center mb-4">Login</h2>

        <form method="post" action="criar-cadastro.php">

        <div class="form-group">
                <label for="usuario">Nome:</label>
                <input type="text" class="forr-control" id="nome" name="nome" placeholder="Digite seu Nome">
            </div>

            <div class="form-group">
                <label for="usuario">Email:</label>
                <input type="text" class="forr-control" id="email" name="email" placeholder="Digite seu Email">
            </div>

            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" class="forr-control" id="usuario" name="usuario" placeholder="Digite seu Usuário">
            </div>

            <div class="mt-1 form-group">
                <label for="senha">Senha:</label>
                <input type="text" class="form-control" id="senha" name="senha" placeholder="Digite a senha">
            </div>
            

            <div class="mt-2 text-center">
                <button type="submit" class="btn btn-warning">Login</button>
            </div>

        </form>
    </div>







    </div>
</body>

</html>