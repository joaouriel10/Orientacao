<?php

    include_once '../Controller/ConectarBancoDados.php';


    class Api{

        public function response($codRemetente, $codDestinatario)
        {
            $logar = new ConectarBancoDados();
            $conexao = $logar::LogarBanco();

            $nomeRemetente = "SELECT nome FROM usuario where codigo = $codRemetente";
            $nomeDestinatario = "SELECT nome FROM usuario where codigo = $codDestinatario";
        
        
            $queryRem = mysqli_query($conexao, $nomeRemetente);
            $queryDest = mysqli_query($conexao, $nomeDestinatario);
        
            $codigoRem = mysqli_fetch_object($queryRem);
            $codigoDest = mysqli_fetch_object($queryDest);

            $url = curl_init();
            curl_setopt($url, CURLOPT_URL, "https://foaas.com/problem/$codigoDest->nome/$codigoRem->nome");
            curl_setopt($url, CURLOPT_HTTPHEADER, array('Accept: application/json'));
            curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
            $test = curl_exec($url);
            curl_close($url);

            $json = json_decode($test);

            $texto = $json->message;

            print_r($texto);

            return $texto;
        }

    }
    ?>

    <?php
    $teste = new Api;
    $teste->response(2,1);