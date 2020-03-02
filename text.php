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
            
            if($resultado){
                return print $result;
            }else{
                return print -1;
            }
        }

        function cadastrarUsuario($nome, $codigo)
        {
            $con = connect();

            $insert = "INSERT INTO usuario (nome, codigo) VALUES('$nome','$codigo')";

            $cadastro = mysqli_query($con, $insert);

            if($cadastro){
                echo "Usuario cadastrado \n";
                return true;
                
            }
                echo "Usuario já cadastrado \n";
                return false;
        }
        

        //getCodigo();

        cadastrarUsuario('joao uriel', 123);