<?php 

    include_once '../Controller/MensagemController.php';
    include_once '../Model/Mensagem.php';

    //POST
    $codRemetente = $_POST['codigo_remetente'];
    $codDestinatario = $_POST['codigo_destinatario'];
    $assunto = $_POST['assunto'];
    $texto = $_POST ['texto'];

    $mensagem = new Mensagem();
    $mensagem->setTexto($texto);
    $mensagem->setCodigoRemetente($codRemetente);
    $mensagem->setCodigoDestinatario($codDestinatario);
    $mensagem->setAssunto($assunto);

    //INSERIR NO BANCO
    $cadastro = new MensagemController;
    $cadastrado = $cadastro->cadastrarMensagem($mensagem->getCodRemetente(), $mensagem->getTexto(), $mensagem->getCodDestinatario(),$mensagem->getAssunto());

    //VALIDAR SE FOI CADASTRADO
    if($cadastrado){
        header('Location: ../html/EnviarMensagem.php');
    }else{
        header('Location: ../html/index.html');
    }