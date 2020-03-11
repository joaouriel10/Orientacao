<?php

    include_once '../Repository/ConectarBancoDados.php';
    include_once '../Service/UsuarioService.php';

    class UsuarioRepository
    {

        public function cadastrarUsuario($nome, $codigo)
        {
            $bancoDados = new ConectarBancoDados();

            $validarCadastro = new UsuarioService();

            $query = "INSERT INTO usuario(nome, codigo) VALUES('$nome','$codigo')";

            $cadastrarUsuario = mysqli_query($bancoDados->LogarBanco(), $query);

            $validarCadastro->validarCadastroUsuario($codigo, $cadastrarUsuario);

            if ($validarCadastro) {
                return true;
            }
            echo "Falha ao cadastrar \n";
            mysqli_close($bancoDados->LogarBanco());
            return false;

        }

        public function validarCodigo()
        {   
            $bancoDados = new ConectarBancoDados();

            $conexao = $bancoDados->LogarBanco();

            $query = "SELECT codigo FROM usuario";

            $resultado = mysqli_query($conexao, $query);
            
            if($resultado){
                return true;
            }else{
                return false;
            }
        }
        public function listarCodigoObejto()
        {
            $bancoDados = new ConectarBancoDados();

            $conexao = $bancoDados->LogarBanco();

            $query = "SELECT codigo FROM usuario";

            $resultado = mysqli_query($conexao, $query);

            $result = mysqli_fetch_object($resultado);

            if ($resultado) {
                return $result;
            }else{
                return false;
            }
        }
    }