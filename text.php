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
                foreach(getCodigo() as $codigos){
                    if($codigos == $codigo){
                        $resposta = "Codigo já cadastrado \n";
                        return print $resposta;
                    }else{
                        $resposta = "Usuario cadastrado \n";
                    return print $resposta;
                    }   
                }
            }else{
                return print "Codigo já cadastrado \n";
            } 
        }
        function getCodigo()
        {
            $con = connect();

            $select = "SELECT codigo FROM usuario";

            $resultado = mysqli_query($con, $select);

            $result = mysqli_fetch_row($resultado);
            
            if($resultado){
                return $result;
            }else{
                return print -1;
            }
        }