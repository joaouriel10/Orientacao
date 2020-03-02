<?php 

    class Texto{

        var $Texto;
        var $codigoRemetente;
        var $codigoDestinatario;

        public function __construct($texto, $codRemetente, $codDestinatario)
        {
            $this->Texto = $texto;
            $this->codigoRemetente = $codRemetente;
            $this->codigoDestinatario = $codDestinatario;
        }
        public function setTexto($texto)
        {
            $this->Texto = $texto;
        }
        public function setCodigoRemetente($codigoRemetente)
        {
            $this->codigoRemetente = $codigoRemetente;
        }
        public function setCodigoDestinatario($codigoDestinatario)
        {
            $this->codigoDestinatario = $codigoDestinatario;
        }
         public function getTexto()
        {
            return $this->Texto;
        }
        public function getCodRemetente()
        {
            return $this->codigoRemetente;
        }
        public function getCodDestinatario()
        {
            return $this->codigoDestinatario;
        }


    }
