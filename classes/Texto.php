<?php 

    class Texto{

        var $Texto;
        var $codigoRemetente;
        var $codigoDestinatario;

        public function setTexto($texto){
            $this->Texto = $texto;
        }
        public function setCodigoRemetente($codigoRemetente){
            $this->codigoRemetente = $codigoRemetente;
        }
        public function setCodigoDestinatario($codigoDestinatario){
            $this->codigoDestinatario = $codigoDestinatario;
        }

    }
