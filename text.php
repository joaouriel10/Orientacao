<?php

        
         function connect()
        {
            //define('HOST', 'localhost');
            //define('USER', 'joao');
            //define('PASS', 'Joaouriel10');
            //define('BANCO', 'trabalho');

            return mysqli_connect('localhost', 'joao', 'Joaouriel10', 'trabalho');
        }
        function getCodigo()
        {
            $con = connect();

            $select = "SELECT codigo FROM usuario LIMIT 10";

            $resultado = mysqli_query($con, $select);

            $result = mysqli_fetch_row($resultado);

            $result = intval($result);
            
            if($resultado){
                return print $result;
            }
                return print -1;
        }

        function cadastrarUsuario($codigoRemetente, $texto, $codigoDestinatario)
        {
            $con = connect();

            $insert = "INSERT INTO texto (codigoRemetente, texto, codigo) VALUES('$codigoRemetente','$texto','$codigoDestinatario')";
            
            if($codigoDestinatario == $codigoRemetente){
                echo "Codigos iguais \n";
                return false;
            }

            $cadastro = mysqli_query($con, $insert);

            if ($cadastro) {
                echo "texto Enviado com sucesso \n";
                return true;
            }
            echo "Falha ao enviar mensagem \n";
            return false;
        }
        
        function verificador(){
            if(getCodigo() == null){
                echo 'cadastro.php';
            }
        }


        //getCodigo();

        //cadastrarUsuario(11, 'teste', 100);
        
        verificador();

        echo "\n";