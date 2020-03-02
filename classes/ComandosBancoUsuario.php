<?php

    include_once 'BancoDados.php';

    class ComandosUsuario {
        
        public function cadastrarUsuario($nome, $codigo)
        {
            $Conexao = new ConectarBancoDados();

            $con = $Conexao::connect();

            $insert = "INSERT INTO usuario(nome, codigo) VALUES('$nome','$codigo')";

            $cadastro = mysqli_query($con, $insert);

            if($cadastro){
                echo "Usuario cadastrado \n";
                return true;
                
            }
                echo "Usuario já cadastrado \n";
                return false;
        }

        public function getCodigo()
        {
            $Conexao = new ConectarBancoDados();

            $con = $Conexao::connect();

            $select = "SELECT codigo FROM usuario";

            $resultado = mysqli_query($con, $select);

            $result = mysqli_fetch_row($resultado);
            
            if($resultado){
                return $result;
            }else{
                return false;
            }
        }

    }
