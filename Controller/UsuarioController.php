<?php

    include_once '../Repository/ConectarBancoDados.php';
    include_once '../Service/MensagemService.php';

    class UsuarioController 
    {
        
        public function cadastrarUsuario($nome, $codigo)
        {
            $logar = new ConectarBancoDados();
            
            $validacao = new MensagemService();

            $conexao = $logar->LogarBanco();

            $query = "INSERT INTO usuario(nome, codigo) VALUES('$nome','$codigo')";

            $validacao->validarCadastro($conexao,$query);

        }

        public function getCodigo()
        {
            $logar = new ConectarBancoDados();

            $conexao = $logar->LogarBanco();

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
