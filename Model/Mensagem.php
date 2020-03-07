<?php 

    class Mensagem{

        protected $Texto;
        protected $codigoRemetente;
        protected $codigoDestinatario;
        protected $Assunto;

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
            return $this->codigoRemetente;
        }
        public function getCodDestinatario()
        {
            return $this->codigoDestinatario;
        }
        public function getAssunto()
        {
            return $this->Assunto;
        }


    }
