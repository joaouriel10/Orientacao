<?php 

    include_once '../classes/ComandosBancoMensagem.php';
    include_once '../classes/Texto.php';

    $codRemetente = $_POST['codigo_remetente'];
    $codDestinatario = $_POST['codigo_destinatario'];
    $texto = $_POST ['texto'];
    $mensagem = new Mensagem();
    $mensagem->setTexto($texto);
    $mensagem->setCodigoRemetente($codRemetente);
    $mensagem->setCodigoDestinatario($codDestinatario);
    $cadastro = new ComandoMensagem;
    $cadastrado = $cadastro->cadastrarMensagem($mensagem->getCodRemetente(), $mensagem->getTexto(), $mensagem->getCodDestinatario());
    if($cadastrado){
        header('Location: ../html/mensagem.php');
    }else{
        header('Location: ../html/index.html');
    }