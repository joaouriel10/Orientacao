<?php

require '../Model/Usuario.php';
require '../Service/UsuarioService.php';

class UsuarioController
{
    public function cadastrarUsuario($nome, $codigo)
    {
        $usuario = new Usuario(); 
        $usuario->setNome($nome);
        $usuario->setCodigo($codigo);
        
        $usuarioService = new UsuarioService();

        if($usuarioService->cadastrarUsuario($usuario->getNome(), $usuario->getCodigo())){
            return true;
        }else{
            return false;
        }

    }
}
