<?php

    require_once '../Repository/ConectarBancoDados.php';

    class MensagemRepository{

        public function cadastrarMensagem($codigoRemetente, $texto, $codigoDestinatario, $assunto)
        {
            $bancoDados = new ConectarBancoDados();

            $validacaoCadastroMensagem = new MensagemService();

            $validacaoCadastroMensagem->codigosIguais($codigoRemetente, $codigoDestinatario);
    
            $validacaoCadastroMensagem->compoNulo($assunto, $texto);
    
            $query = "INSERT INTO texto (codigoRemetente, texto, codigo, Assunto) VALUES('$codigoRemetente','$texto','$codigoDestinatario','$assunto')";

            $resultadoQuery = mysqli_query($bancoDados->LogarBanco(), $query);

            if ($resultadoQuery) {
                    return true;
            }
            echo "Falha ao enviar mensagem \n";

            return false;

            mysqli_close($bancoDados->LogarBanco());
    
        }
        public function listarMensagens($codigoMensagem)
        {
            $bancoDados = new ConectarBancoDados();

            $mensagemService = new MensagemService();
    
            $conexao = $bancoDados->LogarBanco();
    
            $query = "SELECT t.Assunto, u.nome, t.texto FROM texto AS t Inner JOIN usuario AS u ON t.codigo = u.codigo where t.codigoRemetente = $codigoMensagem";
    
            $resultadoQuery = mysqli_query($conexao, $query);
    
            if($resultadoQuery){

                $mensagemService->mostrarMensagem($resultadoQuery);
                
                mysqli_close($bancoDados);
                return true;

            }
            mysqli_close($bancoDados);
            return false;
        }
    }
