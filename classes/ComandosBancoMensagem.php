<?php

    include_once 'BancoDados.php';
    include_once 'ComandosBancoUsuario.php';

    class ComandoMensagem
    {
        public function cadastrarMensagem($codigoRemetente, $texto, $codigoDestinatario)
        {
            $con = $this->Conexao->connect();

            $insert = "INSERT INTO texto (codigoRemetente, texto, codigo) VALUES('$codigoRemetente','$texto','$codigoDestinatario')";
            
            if($$codigoDestinatario == $codigoRemetente){
                return false;
            }

            $cadastro = mysqli_query($con, $insert);

            if ($cadastro) {
                return true;
            }
            return false;
        }

    }
    