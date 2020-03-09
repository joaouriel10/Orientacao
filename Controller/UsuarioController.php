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

            $opcao = "USUARIO";

            $validacao->validarCadastro($conexao, $query, $opcao);

        }

        public function getCodigo()
        {
            $logar = new ConectarBancoDados();

            $conexao = $logar->LogarBanco();

            $query = "SELECT codigo FROM usuario";

            $resultado = mysqli_query($conexao, $query);

            $result = mysqli_fetch_row($resultado);
            
            if($resultado){
                return $result;
            }else{
                return false;
            }
        }

    }
