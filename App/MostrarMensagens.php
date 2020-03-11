<?php

    include_once '../Controller/ConectarBancoDados.php';
    include_once '../Controller/MensagemController.php';

    $codUsuario = $_POST['codigoEscolhido'];

    $mensagem = new MensagemController;

    $mensagem->listarMensagens($codUsuario);
