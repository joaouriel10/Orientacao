<?php

    include_once 'ConectarBancoDados.php';

    class MensagemController
    {
        public function cadastrarMensagem($codigoRemetente, $texto, $codigoDestinatario)
        {
            $logar = new ConectarBancoDados();

            $conexao = $logar::LogarBanco();

            $query = "INSERT INTO texto (codigoRemetente, texto, codigo) VALUES('$codigoRemetente','$texto','$codigoDestinatario')";
            
            if($$codigoDestinatario == $codigoRemetente){
                echo "Codigos iguais";
                return false;
            }

            $cadastro = mysqli_query($conexao, $query);

            if ($cadastro) {
                echo "texto Enviado com sucesso \n";
                return true;
            }
            echo "Falha ao enviar mensagem \n";
            return false;
        }

    }
    