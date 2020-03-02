<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Mensagem</title>
    </head>
    <body>
        <div class="container">
            <form>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Codigo Usuario Remetente</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <?php
                        include_once '../classes/BancoDados.php';
                        include_once '../classes/ComandosBancoUsuario.php';
            
                        $verificacao = new ComandosUsuario;
            
                        $verificacao->getCodigo();
            
                        if($verificacao == null){
                            header('http://localhost/projeto01/Trabalho_Logica/html/cadastro.php');
                        }
                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Codigo Usuario Destinatário</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mensagem</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <a href="" type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cadastrar</a>
                <a href="index.html" type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Voltar</a>
            </form>
        </div>
    </body>
</html>