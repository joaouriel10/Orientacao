<?php


         function connect()
        {
            define('HOST', 'localhost');
            define('USER', 'joao');
            define('PASS', 'Joaouriel10');
            define('BANCO', 'trabalho');

            return mysqli_connect(HOST, USER, PASS, BANCO);
        }

        function cadastrarUsuario($nome, $codigo)
        {
            $con = connect();

            $insert = "INSERT INTO usuario (nome, codigo) VALUES('$nome','$codigo')";

            $cadastro = mysqli_query($con, $insert);

            if($cadastro){
                $resposta = true;
            }else{
                $resposta = false;
            }
            return $resposta;
        }
        function getCodigo()
        {
            $con = connect();

            $select = "SELECT codigo FROM usuario;";

            $resultado = mysqli_query($con, $select);
            
            if($resultado){
                return print $resultado;
            }else{
                return print -1;
            }
        }


        cadastrarUsuario("Joao", 123);

        getCodigo();