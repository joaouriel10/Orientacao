<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Mensagem</title>
    </head>
    <body>
        <div class="container">
            <form method="post" action="../App/MostrarMensagens.php">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Codigo Usuario Remetente</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="codigoEscolhido">
                    <?php
                        include_once '../Repository/ConectarBancoDados.php';

                        $con = new ConectarBancoDados();

                        $conexao = $con->LogarBanco();

                        $query = "SELECT codigo FROM usuario";

                        $result = mysqli_query ($conexao, $query);
                        
                        while($array=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                            
                            foreach($array as $codigos){
                                echo "<option value=$codigos>";
                                echo "$codigos </option>";
                            } 
                            
                        }
                    ?>
                    </select>
                    <br>
                <button type="submit" class="btn btn-primary">Pesquisar</button>
                <a href="index.html" type="submit" class="btn btn-primary" role="button" aria-pressed="true">Voltar</a>
            </form>
        </div>
    </body>
</html>