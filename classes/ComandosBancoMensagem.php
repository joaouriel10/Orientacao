<?php

    include_once 'ConectarBancoDados.php';

    class ComandoMensagem
    {
        public function cadastrarMensagem($codigoRemetente, $texto, $codigoDestinatario)
        {
            $Logar = new ConectarBancoDados();

            $Conexao = $Logar::LogarBanco();

            $Insert = "INSERT INTO texto (codigoRemetente, texto, codigo) VALUES('$codigoRemetente','$texto','$codigoDestinatario')";
            
            if($$codigoDestinatario == $codigoRemetente){
                echo "Codigos iguais";
                return false;
            }

            $Cadastro = mysqli_query($Conexao, $Insert);

            if ($Cadastro) {
                echo "texto Enviado com sucesso \n";
                return true;
            }
            echo "Falha ao enviar mensagem \n";
            return false;
        }

    }
    