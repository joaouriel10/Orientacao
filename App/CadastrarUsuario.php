<?php

    include_once '../Controller/UsuarioController.php';

    $cadastrarUsuario = new UsuarioController;
    
    $cadastrar = $cadastrarUsuario->Usuario($_POST['nome'], $_POST['codigo']);

