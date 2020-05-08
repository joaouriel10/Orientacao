<?php

require '../Controller/UsuarioController.php';

$cadastrarUsuario = new UsuarioController();

$nome = $_POST['nome'];
$codigo = $_POST['codigo'];

$result = $cadastrarUsuario->cadastrarUsuario($nome, $codigo);

if($result){
    header('Location: ../View/CadastroUsuario.php');
}else{
    header('Location: ../View/index.html');
}

