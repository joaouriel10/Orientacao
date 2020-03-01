<?php

    include_once 'BancoDados.php';
    include_once 'ComandosBancoUsuario.php';

    class ComandoMensagem
    {

        public function cadastrarMensagem($codigoRemetente, $texto, $codigoDestinatario)
        {
            $con = $this->Conexao->connect();

            $insert = "INSERT INTO texto (codigoRemetente, texto, codigo) VALUES('$codigoRemetente','$texto','$codigoDestinatario')";

            //$cadastro = mysqli_query($con, $insert);

            if(getCodigo() == null || getCodigo() == 0){
                return false;
            }
            
            foreach(getCodigo() as $codigos){
                if($codigos == $codigoRemetente){
                    foreach(getCodigo() as $codigos){
                        if ($codigos == $codigoDestinatario) {
                            if ($codigoDestinatario != $codigoRemetente) {  
                                $cadastro = mysqli_query($con, $insert);
                                if ($cadastro) {
                                    return true;
                                }
                                    return false;
                            }
                        }
                    }

                }else{
                    return false;
                }
            }
            return false;
        }
    }