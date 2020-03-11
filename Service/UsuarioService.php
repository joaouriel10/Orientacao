<?php

    class UsuarioService
    {
        public function validarCadastroUsuario($codigo, $cadastrarUsuario)
        {

            while($result = mysqli_fetch_array($cadastrarUsuario, MYSQLI_ASSOC)){
                if ($result["codigo"] == $codigo) {
                    return false;
                }
                return true;
            }
        }
    }