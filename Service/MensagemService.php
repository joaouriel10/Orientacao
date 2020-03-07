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

        public function validarCadastro($conexao, $query)
        {
            $cadastrar = mysqli_query($conexao, $query);

            if ($cadastrar) {
                return header('Location: ../html/EnviarMensagem.php');;
            }
            echo "Falha ao enviar mensagem \n";
            mysqli_close($conexao);
            return header('Location: ../html/index.html');
        }
    }