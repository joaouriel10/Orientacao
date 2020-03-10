<?php

    include_once '../Service/MensagemServices.php';

    class MensagemService
    {
        public function codigosIguais($codigoUm, $codigoDois)
        {
            if($codigoUm == $codigoDois){
                echo "Codigos iguais";
                return header('Location: http://localhost/projeto01/Trabalho_Logica/View/index.html');
                die;
            }
            return true;
        }
        public function compoNulo($assunto, $texto)
        {
            if($assunto == "" || $texto == ""){
                return header('Location: http://localhost/projeto01/Trabalho_Logica/View/index.html');
                die;
            }
            return true;
        }

        public function validarCadastro($codigoRemetente, $texto, $codigoDestinatario, $assunto)
        {

            $bancoDados = new ConectarBancoDados;

            $query = "INSERT INTO texto (codigoRemetente, texto, codigo, Assunto) VALUES('$codigoRemetente','$texto','$codigoDestinatario','$assunto')";

            $cadastrar = mysqli_query($bancoDados->LogarBanco(), $query);

            if ($cadastrar) {
                    return true;
            }
            echo "Falha ao enviar mensagem \n";
            mysqli_close($bancoDados->LogarBanco());
            return false;
        }
        
    }