<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Cadastrar Usuario</title>
    </head>
    <body>
        <div class="container">
            <form method="post" action="../App/CadastrarUsuario.php">
                <div class="form-group">
                    <label for="formGroupExampleInput">Nome: </label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Codigo</label>
                    <input type="number" class="form-control" name="codigo" placeholder="Codigo">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a href="index.html" type="submit" class="btn btn-primary" role="button">Voltar</a>
            </form>
        </div>
    </body>
</html>