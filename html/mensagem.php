<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Mensagem</title>
    </head>
    <body>
        <?php
            include_once '../classes/BancoDados.php';
            include_once '../classes/ComandosBancoUsuario.php';

            $verificacao = new ComandosUsuario;

            $cod = $verificacao->getCodigo();

            if(!$cod){
                header('Location: http://localhost/projeto01/Trabalho_Logica/html/cadastro.php');
            }
        ?>
        <div class="container">
            <form>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Codigo Usuario Remetente</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <?php
                        include_once '../classes/BancoDados.php';
                        include_once '../classes/ComandosBancoUsuario.php';

                        $con = new Conexaobanco();

                        $conexao = $con->connect();

                        $select = "SELECT codigo FROM usuario LIMIT 10";

                        $result = mysqli_query ($conexao, $select);
                        
                        while($dress1=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                            echo "<option value=$dress1[codFornecedor]>";
                            foreach($dress1 as $codigos){
                                echo "$codigos";
                            } 
                            "</option>";
                        }

                        mysqli_close($conexao);

                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Codigo Usuario Destinatário</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <?php
                        include_once '../classes/BancoDados.php';
                        include_once '../classes/ComandosBancoUsuario.php';

                        $con = new Conexaobanco();

                        $conexao = $con->connect();

                        $select = "SELECT codigo FROM usuario LIMIT 10";

                        $result = mysqli_query ($conexao, $select);
                        
                        while($dress1=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                            echo "<option name='codigo' value=$dress1[codFornecedor]> ";
                            foreach($dress1 as $codigos){
                                echo "$codigos";
                            } 
                            "</option>";
                        }

                        mysqli_close($conexao);

                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mensagem</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a href="index.html" type="submit" class="btn btn-primary" role="button" aria-pressed="true">Voltar</a>
            </form>
        </div>
    </body>
</html>