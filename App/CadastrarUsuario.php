<?php

    include_once '../Controller/UsuarioController.php';
    include_once '../Model/Usuario.php';

    $nome = $_POST['nome'];
    $codigo = $_POST['codigo'];
    $usuario = new Usuario(); 
    $usuario->setNome($nome);
    $usuario->setCodigo($codigo);
    $cadastro = new UsuarioController;
    $cadastrado = $cadastro->cadastrarUsuario($usuario->getNome(), $usuario->getCodigo());

    if($cadastrado){
        header('Location: ../html/CadastroUsuario.php');
    }else{
        header('Location: ../html/index.html');
    }
    

