<?php

     class Usuario extends ComandosBanco{

        private $Nome;
        private $Codigo;


        public function __construct($nome, $codigo)
        {
            $this->Nome = $nome;
            $this->Codigo = $codigo;
            if($this->getCodigo() == $this->Codigo){
                return false;
            }else{
                $this->cadastrarUsuario($this->Nome, $this->Codigo); 
                return true;
            }
        }
    }

