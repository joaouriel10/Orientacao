<?php 

    include_once '../Controller/MensagemController.php';
    include_once '../Model/Mensagem.php';
    include_once '../Controller/MensagemController.php';

    //POST

    $enviarMensagem = new MensagemController();

    $enviarMensagem->Mensagem($_POST ['texto'], $_POST['codigo_remetente'], $_POST['codigo_destinatario'],$_POST['assunto']);
