<?php

    class Validacoes{

        public function codigosIguais($codigoUm, $codigoDois)
        {
            if($codigoUm == $codigoDois){
                echo "Codigos iguais";
                return true;
            }
            return false;
        }
        
        public function compoNulo($assunto, $texto)
        {
            if($assunto == "" || $texto == ""){
                return true;
            }
            return false;
        }

        public function validarCadastro($conexao, $query)
        {
            $cadastrar = mysqli_query($conexao, $query);

            if ($cadastrar) {
                echo "texto Enviado com sucesso \n";
                mysqli_close($conexao);
                return true;
            }
            echo "Falha ao enviar mensagem \n";
            mysqli_close($conexao);
            return false;
        }

    }