<?php

    include_once '../Controller/ConectarBancoDados.php';
    include_once '../Controller/Api.php';
    include_once '../Model/Mensagem.php';
    include_once '../Controller/MensagemController.php';

    $codRemetente = $_POST['codigo_remetente'];
    $codDestinatario = $_POST['codigo_destinatario'];
    $assunto = "Assunto Apimentado";

    $resultado = new Api();
    $logar = new ConectarBancoDados();
    $mensagem = new Mensagem();
    
    $conexao = $logar::LogarBanco();

    $texto = $resultado::response($codRemetente, $codDestinatario);
    
    $mensagem->setTexto($texto);
    $mensagem->setCodigoRemetente($codRemetente);
    $mensagem->setCodigoDestinatario($codDestinatario);
    $mensagem->setAssunto($assunto);

    $cadastro = new MensagemController;
    $cadastrado = $cadastro->cadastrarMensagem($mensagem->getCodRemetente(), $mensagem->getTexto(), $mensagem->getCodDestinatario(),$mensagem->getAssunto());

    //VALIDAR SE FOI CADASTRADO
    if($cadastrado){
        header('Location: ../View/EnviarMensagem.php');
    }else{
        header('Location: ../View/index.html');
    }