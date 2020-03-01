<?php

    include_once 'BancoDados.php';

    class ComandosBanco {
        
        public function cadastrarUsuario($nome, $codigo)
        {

            $con = $this->Conexao->connect();

            $insert = "INSERT INTO usuario (nome, codigo) VALUES('$nome','$codigo')";

            foreach(getCodigo() as $codigos){
                if($codigos == $codigo){
                    $resposta = "Codigo já cadastrado \n";
                    return print $resposta;
                }else{
                    $cadastro = mysqli_query($con, $insert);
                    if ($cadastro) {
                        $resposta = "Usuario cadastrado \n";
                    }else{
                        $cadastro = "Erro no banco";
                        return print $cadastro;
                    }
                }   
            }
        }

        public function getCodigo()
        {

            $con = $this->Conexao->connect();

            $select = "SELECT codigo FROM usuario";

            $resultado = mysqli_query($con, $select);

            $result = mysqli_fetch_row($resultado);
            
            if($resultado){
                return $result;
            }else{
                return print -1;
            }
        }

    }
