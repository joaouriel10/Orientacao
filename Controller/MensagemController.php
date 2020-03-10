<?php

    include_once '../Service/MensagemService.php';
    include_once '../Repository/MensagemRepository.php';

    class MensagemController
    {
            public function Mensagem($texto, $codigoRemetente, $codigoDestinatario, $assunto)
            {

                $mensagem = new Mensagem;

                $mensagem->setTexto($texto);
                $mensagem->setCodigoRemetente($codigoRemetente);
                $mensagem->setCodigoDestinatario($codigoDestinatario);
                $mensagem->setAssunto($assunto);
            
                //INSERIR NO BANCO
                $enviarMensagem = new MensagemRepository();
            
                //VALIDAR SE FOI CADASTRADO
                if($enviarMensagem->cadastrarMensagem($mensagem->getCodRemetente(), $mensagem->getTexto(), $mensagem->getCodDestinatario(),$mensagem->getAssunto())){
                    header('Location: ../View/EnviarMensagem.php');
                    die();
                }else{
                    header('Location: ../View/index.html');
                    die();
                }
            }
    }   