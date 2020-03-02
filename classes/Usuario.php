<?php

     class Usuario{

        private $Nome;
        private $Codigo;

        public function setNome($nome)
        {
            $this->Nome = $nome;
        }
        public function setCodigo($codigo)
        {
            $this->Codigo = $codigo;
        }
        public function getNome()
        {
            return $this->Nome;
        }
        public function getCodigo()
        {
            return $this->Codigo;
        }
    }

