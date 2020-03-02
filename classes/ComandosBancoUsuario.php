<?php

    include_once 'ConectarBancoDados.php';

    class ComandosUsuario {
        
        public function cadastrarUsuario($nome, $codigo)
        {
            $Logar = new ConectarBancoDados();

            $Conexao = $Logar::LogarBanco();

            $Insert = "INSERT INTO usuario(nome, codigo) VALUES('$nome','$codigo')";

            $Cadastro = mysqli_query($Conexao, $Insert);

            if($Cadastro){
                echo "Usuario cadastrado \n";
                return true;
                
            }
                echo "Usuario já cadastrado \n";
                return false;
        }

        public function getCodigo()
        {
            $Logar = new ConectarBancoDados();

            $Conexao = $Logar::LogarBanco();

            $Select = "SELECT codigo FROM usuario";

            $Resultado = mysqli_query($Conexao, $Select);

            $Result = mysqli_fetch_row($Resultado);
            
            if($Resultado){
                return $Result;
            }else{
                return false;
            }
        }

    }
