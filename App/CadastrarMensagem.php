<?php 

    include_once '../Controller/MensagemController.php';
    include_once '../Model/Mensagem.php';
    include_once '../Controller/MensagemController.php';

    //POST

    $mensagens = new MensagemController();

    $mensagens->Mensagem($_POST['codigo_remetente'], $_POST['codigo_destinatario'], $assunto = $_POST['assunto'], $_POST ['texto']);
