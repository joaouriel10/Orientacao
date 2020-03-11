<?php

    include_once '../Service/MensagemService.php';
    include_once '../Repository/MensagemRepository.php';

    class MensagemController
    {
            public function Mensagem($texto, $codigoRemetente, $codigoDestinatario, $assunto)
            {

                $mensagem = new Mensagem;

                //ENCAPSULAMENTO
                $mensagem->setTexto($texto);
                $mensagem->setCodigoRemetente($codigoRemetente);
                $mensagem->setCodigoDestinatario($codigoDestinatario);
                $mensagem->setAssunto($assunto);
            
                //INSERIR NO BANCO
                $enviarMensagem = new MensagemRepository();

                $resultado = $enviarMensagem->cadastrarMensagem($mensagem->getCodRemetente(), $mensagem->getTexto(), $mensagem->getCodDestinatario(),$mensagem->getAssunto());
            
                //VALIDAR SE FOI CADASTRADO
                if($resultado){
                    header('Location: ../View/EnviarMensagem.php');
                    exit;
                }else{
                    header('Location: ../View/index.html');
                    exit;
                }
            }
            public function listarMensagens($codigoMensagem)
            {
                $listarMensagem = new MensagemRepository();

                $listarMensagem->listarMensagens($codigoMensagem);
            }
            
    }   