<?php

    include_once '../Service/MensagemServices.php';

    class MensagemService
    {
        public function codigosIguais($codigoUm, $codigoDois)
        {
            if($codigoUm == $codigoDois){
                echo "Codigos iguais";
                return header("Location: ");
            }
            return true;
        }
        public function compoNulo($assunto, $texto)
        {
            if($assunto == "" || $texto == ""){
                return false;
            }
            return true;
        }

        public function validarCadastro($conexao, $query, $opcao)
        {
            $cadastrar = mysqli_query($conexao, $query);

            if ($cadastrar) {
                if ($opcao == "MENSAGEM") {
                    return header('Location: http://localhost/projeto01/Trabalho_Logica/html/EnviarMensagem.php');
                    die;
                }
                return header('Location: http://localhost/projeto01/Trabalho_Logica/html/CadastroUsuario.php');
                die;
            }
            echo "Falha ao enviar mensagem \n";
            mysqli_close($conexao);
            return header('Location: ../html/index.html');
        }
        
    }