<?php 

    include_once '../Controller/MensagemController.php';
    include_once '../Model/Mensagem.php';

    $codRemetente = $_POST['codigo_remetente'];
    $codDestinatario = $_POST['codigo_destinatario'];
    $texto = $_POST ['texto'];

    $mensagem = new Mensagem();
    $mensagem->setTexto($texto);
    $mensagem->setCodigoRemetente($codRemetente);
    $mensagem->setCodigoDestinatario($codDestinatario);

    $cadastro = new MensagemController;
    $cadastrado = $cadastro->cadastrarMensagem($mensagem->getCodRemetente(), $mensagem->getTexto(), $mensagem->getCodDestinatario());
    
    if($cadastrado){
        header('Location: ../html/EnviarMensagem.php');
    }else{
        header('Location: ../html/index.html');
    }