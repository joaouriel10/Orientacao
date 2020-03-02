<?php

    include_once 'ConectarBancoDados.php';

    class UsuarioController 
    {
        
        public function cadastrarUsuario($nome, $codigo)
        {
            $logar = new ConectarBancoDados();

            $conexao = $logar::LogarBanco();

            $query = "INSERT INTO usuario(nome, codigo) VALUES('$nome','$codigo')";

            $cadastro = mysqli_query($conexao, $query);

            if($cadastro){
                echo "Usuario cadastrado \n";
                return true;
                
            }
                echo "Usuario já cadastrado \n";
                return false;
        }

        public function getCodigo()
        {
            $logar = new ConectarBancoDados();

            $conexao = $logar::LogarBanco();

            $query = "SELECT codigo FROM usuario";

            $resultado = mysqli_query($conexao, $query);

            $Result = mysqli_fetch_row($resultado);
            
            if($resultado){
                return $Result;
            }else{
                return false;
            }
        }

    }
