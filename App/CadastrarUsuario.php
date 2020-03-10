<?php

    include_once '../Controller/UsuarioController.php';

    $cadastro = new UsuarioController;
    
    $cadastrado = $cadastro->Usuario($_POST['nome'], $_POST['codigo']);

