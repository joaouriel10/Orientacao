<?php

    include_once '../Controller/ConectarBancoDados.php';
    include_once '../Controller/MensagemController.php';

    $codUsuario = $_POST['codigoEscolhido'];

    $mostrarMensagem = new MensagemController;

    $mostrarMensagem->listarMensagens($codUsuario);
