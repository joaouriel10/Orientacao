<?php

    include_once '../classes/ComandosBancoUsuario.php';
    include_once '../classes/Usuario.php';

    $nome = $_POST['nome'];
    $codigo = $_POST['codigo'];
    $usuario = new Usuario(); 
    $usuario->setNome($nome);
    $usuario->setCodigo($codigo);
    $cadastro = new ComandosUsuario;
    $cadastrado = $cadastro->cadastrarUsuario($usuario->getNome(), $usuario->getCodigo());
    if($cadastrado){
        header('Location: ../html/CadastroUsuario.php');
    }else{
        header('Location: ../html/index.html');
    }
    

