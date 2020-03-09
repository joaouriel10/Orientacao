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
            include_once '../Controller/ConectarBancoDados.php';
            include_once '../Controller/UsuarioController.php';

            $verificacao = new UsuarioController;

            $cod = $verificacao->getCodigo();

            if(!$cod){
                header('Location: http://localhost/projeto01/Trabalho_Logica/View/CadastroUsuario.php');
            }
        ?>
        <div class="container">
            <!-- <form method="post" action="../App/CadastrarMensagem.php"> -->
            <form method="post" action="../App/CadastrarMensagem.php">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Codigo Usuario Remetente</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="codigo_remetente">
                    <?php
                        include_once '../Controller/ConectarBancoDados.php';
                        include_once '../Controller/UsuarioController.php';

                        $logar = new ConectarBancoDados();

                        $conexao = $logar->LogarBanco();

                        $query = "SELECT codigo FROM usuario";

                        $resultado = mysqli_query($conexao, $query);
                        
                        while($array=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
                            
                            foreach($array as $codigos){
                                echo "<option value=$codigos>";
                                echo "$codigos";
                                "</option>";
                            } 
                            
                        }

                        mysqli_close($conexao);

                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Codigo Usuario Destinatário</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="codigo_destinatario">
                    <?php
                        include_once '../Controller/ConectarBancoDados.php';
                        include_once '../Controller/UsuarioController.php';

                        $logar = new ConectarBancoDados();

                        $conexao = $logar::LogarBanco();

                        $query = "SELECT codigo FROM usuario";

                        $resultado = mysqli_query ($conexao, $query);
                        
                        while($array=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
                            
                            foreach($array as $codigos){
                                echo "<option value=$codigos>";
                                echo "$codigos";
                                "</option>";
                            } 
                            
                        }

                        mysqli_close($conexao);

                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Assunto</label>
                    <input type="text" class="form-control" name="assunto" id="formGroupExampleInput" placeholder="Assunto">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mensagem</label>
                    <textarea class="form-control" name="texto" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a href="index.html" type="submit" class="btn btn-primary" role="button" aria-pressed="true">Voltar</a>
            </form>
        </div>
    </body>
</html>