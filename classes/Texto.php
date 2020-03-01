<?php 

    class Texto{

        var $Texto;

        public function setTexto($texto){

            $this->Texto = $texto;

        }
        public function cadastrarMensagem($codigoRemetente, $codigoDestinatario)
        {
            if($codigoDestinatario == $this->getCodigo()){
                if($codigoRemetente == $this->getCodigo()){
                    $this->cadastrarMensagemBanco($this->Texto);
                }
            }
        }
    }