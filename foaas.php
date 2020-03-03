<?php

    include_once 'Controller/ConectarBancoDados.php';

    $codRemetente = $_POST['codigo_remetente'];
    $codDestinatario = $_POST['codigo_destinatario'];

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
    curl_setopt($url, CURLOPT_HTTPHEADER, array('Accept: application/xml'));
    curl_exec($url);
    curl_close($url);
    