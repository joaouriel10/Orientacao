<?php

    include_once '../classes/ComandosBanco.php';

    $opcao = $_GET['opcao'];

    $userController = new Usuario();

    if ($opcao == 'LISTA'){
        print_r($userController->listarUsuarios());
    }

    if ($opcao == 'VER'){
        $id = $_GET['ID'];
        return $userController->mostraUsuario($id);
    }

    if ($opcao == 'CADASTRA'){
        $id = $_GET['ID'];
        $nome = $_GET['NOME'];
        echo $userController->cadastrarUsuario($nome, $id);
    }

    if ($opcao == 'EDITA'){
        $id = $_GET['ID'];
        $nome = $_GET['NOME'];
        return $userController->editarUsuario($id, $nome);
    }

    if ($opcao == 'DELETA'){
        $id = $_GET['ID'];
        return $userController->deletarUsuario($id);
    }