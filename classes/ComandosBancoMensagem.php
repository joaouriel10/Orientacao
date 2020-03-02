<?php

    include_once 'BancoDados.php';

    class ComandoMensagem
    {
        public function cadastrarMensagem($codigoRemetente, $texto, $codigoDestinatario)
        {
            $Conexao = new Conexaobanco();

            $con = $Conexao::connect();

            $insert = "INSERT INTO texto (codigoRemetente, texto, codigo) VALUES('$codigoRemetente','$texto','$codigoDestinatario')";
            
            if($$codigoDestinatario == $codigoRemetente){
                echo "Codigos iguais";
                return false;
            }

            $cadastro = mysqli_query($con, $insert);

            if ($cadastro) {
                echo "texto Enviado com sucesso \n";
                return true;
            }
            echo "Falha ao enviar mensagem \n";
            return false;
        }

    }
    