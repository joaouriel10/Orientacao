<?php

    include_once '../Model/Usuario.php';
    include_once '../Service/UsuarioService.php';


    class UsuarioController
    {
        
        public function Usuario($nome, $codigo)
        {
            $usuario = new Usuario; 
            $usuario->setNome($nome);
            $usuario->setCodigo($codigo);

            $cadastro = new UsuarioService;

            if($cadastro->cadastrarUsuario($usuario->getNome(), $usuario->getCodigo())){
                header('Location: ../View/CadastroUsuario.php');
                die();
            }else{
                header('Location: ../View/index.html');
                die();
            }

        }

        // public function getCodigo()
        // {
        //     $logar = new ConectarBancoDados();

        //     $conexao = $logar->LogarBanco();

        //     $query = "SELECT codigo FROM usuario";

        //     $resultado = mysqli_query($conexao, $query);

        //     $result = mysqli_fetch_row($resultado);
            
        //     if($resultado){
        //         return $result;
        //     }else{
        //         return false;
        //     }
        // }

    }
