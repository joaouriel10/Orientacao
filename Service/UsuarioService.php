<?php

    include_once '../Repository/ConectarBancoDados.php';

    class UsuarioService
    {
        public function cadastrarUsuario($nome, $codigo)
        {
            $bancoDados = new ConectarBancoDados();

            $query = "INSERT INTO usuario(nome, codigo) VALUES('$nome','$codigo')";

            $cadastrar = mysqli_query($bancoDados->LogarBanco(), $query);

            if ($cadastrar) {
                return true;
            }
            echo "Falha ao cadastrar \n";
            mysqli_close($bancoDados->LogarBanco());
            return false;

        }
    }