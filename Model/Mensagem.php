<?php 

    class Mensagem{

        protected $Texto;
        protected $CodigoRemetente;
        protected $CodigoDestinatario;
        protected $Assunto;

        public function setTexto($texto)
        {
            $this->Texto = $texto;
        }
        public function setCodigoRemetente($codigoRemetente)
        {
            $this->CodigoRemetente = $codigoRemetente;
        }
        public function setCodigoDestinatario($codigoDestinatario)
        {
            $this->CodigoDestinatario = $codigoDestinatario;
        }
        public function setAssunto($assunto)
        {
            $this->Assunto = $assunto;
        }
         public function getTexto()
        {
            return $this->Texto;
        }
        public function getCodRemetente()
        {
            return $this->CodigoRemetente;
        }
        public function getCodDestinatario()
        {
            return $this->CodigoDestinatario;
        }
        public function getAssunto()
        {
            return $this->Assunto;
        }


    }
