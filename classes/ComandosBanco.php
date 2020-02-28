<?php

    class ComandosBanco extends Conexaobanco{
        
        public function cadastrarUsuario($nome, $codigo)
        {
            $con = $this->connect();

            $insert = "INSERT INTO usuario (nome, codigo) VALUES('$nome','$codigo')";

            $cadastro = mysqli_query($con, $insert);

            if($cadastro){
                $resposta = "Usuario Cadastrado";
            }else{
                $resposta = "Usuario não cadastrado";
            }
            return print $resposta;
        }

        public function getCodigo()
        {
            $con = $this->connect();

            $select = "SELECT codigo FROM usuario";

            $resultado = mysqli_query($con, $select);
            
            if($resultado){
                //mysqli_fetch();
            }else{
                return print -1;
            }
        }
        public function cadastrarMensagemBanco($texto)
        {
            $con = $this->connect();

            $insert = "INSERT INTO usuario (texto) values ('$texto')";

            $cadastro = mysqli_connect($con, $insert);

            if($cadastro){
                return print "Mensagem enviada";
            }else{
                return print "Mensagem não enviada";
            }
        }

    }
