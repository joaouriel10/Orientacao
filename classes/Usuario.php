<?php

     class Usuario{

        private $Nome;
        private $Codigo;


        public function setUsuario($nome){
            $this->Nome = $nome;
        }
        public function setCodigo($codigo){
            $this->Codigo = $codigo;
        }
        public function getUsuario(){
            return $this->Nome;
        }
        public function getCodigo(){
            return $this->Codigo;
        }
    }

