<?php

    include_once 'BancoDados.php';
    include_once 'ComandosBancoUsuario.php';

    class ComandoMensagem{

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
                                
                            }
                        }
                    }

                }else{
                    $cadastro = mysqli_query($con, $insert);
                    if ($cadastro) {
                        $resposta = "Usuario cadastrado \n";
                    }else{
                        $cadastro = "Erro no banco";
                        return print $cadastro;
                    }
                }   
            }

            if($cadastro){
                if($codigoDestinatario == $codigoRemetente){
                    return print "O usuario não pode mandar para mensagem para ele mesmo";
                }
            }
        }
    }