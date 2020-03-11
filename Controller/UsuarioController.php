<?php

    include_once '../Repository/UsuarioRepository.php';
    include_once '../Model/Usuario.php';
    include_once '../Service/UsuarioService.php';


    class UsuarioController
    {
        
        public function Usuario($nome, $codigo)
        {
            //ENCAPSULAMENTO
            $usuario = new Usuario(); 
            $usuario->setNome($nome);
            $usuario->setCodigo($codigo);

            //Cadastrando no Banco
            $cadastrarUsuario = new UsuarioRepository;

            //Validando Cadastro
            if($cadastrarUsuario->cadastrarUsuario($usuario->getNome(), $usuario->getCodigo())){
                header('Location: ../View/CadastroUsuario.php');
                exit;
            }else{
                header('Location: ../View/index.html');
                exit;
            }

        }

        public function listarCodigos()
        {

            $CodigoUsuario = new UsuarioRepository;

            $resultado = $CodigoUsuario->validarCodigo();
            
            if($resultado){
                return true;
            }else{
                return false;
            }
        }

    }
