<?php

require '../Repository/UsuarioRepository.php';

class UsuarioService
{
    public function cadastrarUsuario($nome, $codigo)
    {
        $usuarioRepository = new UsuarioRepository();

        if($usuarioRepository->cadastrarUsuario($nome, $codigo)) {
            return true;
        }

        return false;
    }
}
