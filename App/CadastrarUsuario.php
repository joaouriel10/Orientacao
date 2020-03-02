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
        header('Location: ../html/cadastro.php');
        echo '<script language="javascript">';
        echo 'alert(Cadastrado com sucesso)';  //not showing an alert box.
        echo '</script>';
        exit;

    }else{
        header('Location: ../html/index.html');
    }
    

