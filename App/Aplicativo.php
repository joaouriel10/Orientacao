<?php

    include_once '../classes/ComandosBancoUsuario.php';
    include_once '../classes/Usuario.php';

    $nome = $_POST['nome'];
    $codigo = $_POST['codigo'];
    $usuario = new Usuario(); 
    $usuario->setNome($nome);
    $usuario->setCodigo($codigo);
    $cadastro = new ComandosUsuario;
    $cadastro->cadastrarUsuario($usuario->getNome(), $usuario->getCodigo());
    var_dump($cadastro);
    header('Location: ../html/cadastro.php');
