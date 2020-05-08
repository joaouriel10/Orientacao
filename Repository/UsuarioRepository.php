<?php

require '../Repository/ConectarBancoDados.php';

class UsuarioRepository
{

    public function cadastrarUsuario($nome, $codigo)
    {
        $conexao = new ConectarBancoDados();

        $query = "INSERT INTO usuario(nome, codigo) VALUES('$nome','$codigo')";

        $cadastrarUsuario = mysqli_query($conexao->LogarBanco(), $query);

        if ($cadastrarUsuario) {
            mysqli_close($conexao->LogarBanco());
            return true;
        }
        mysqli_close($conexao->LogarBanco());
        return false;

    }

}