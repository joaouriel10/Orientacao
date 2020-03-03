<?php

    include_once 'ConectarBancoDados.php';

    class MensagemController
    {
        public function cadastrarMensagem($codigoRemetente, $texto, $codigoDestinatario, $assunto)
        {
            $logar = new ConectarBancoDados();

            $conexao = $logar::LogarBanco();

            $query = "INSERT INTO texto (codigoRemetente, texto, codigo, Assunto) VALUES('$codigoRemetente','$texto','$codigoDestinatario','$assunto')";
            
            if($$codigoDestinatario == $codigoRemetente){
                echo "Codigos iguais";
                return false;
            }

            $cadastrar = mysqli_query($conexao, $query);

            if ($cadastrar) {
                echo "texto Enviado com sucesso \n";
                mysqli_close($conexao);
                return true;
            }
            echo "Falha ao enviar mensagem \n";
            mysqli_close($conexao);
            return false;
        }
        public function listarMensagemEnviada($codigoMensagem)
        {
            $logar = new ConectarBancoDados();

            $conexao = $logar::LogarBanco();

            $query = "SELECT t.Assunto, u.nome, t.texto FROM texto AS t Inner JOIN usuario AS u ON t.codigo = u.codigo where codigoRemetente = $codigoMensagem";

            $resultado = mysqli_query($conexao, $query);

            while($array=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
                            
                foreach($array as $nome => $codigos){
                    echo "$nome => $codigos \n";
                }
                
            }
            
            mysqli_close($conexao);

        }
        public function listarMensagemRecebida($codigoMensagem)
        {
            $logar = new ConectarBancoDados();

            $conexao = $logar::LogarBanco();

            $query = "SELECT * FROM texto WHERE  codigo = $codigoMensagem";

            $resultado = mysqli_query($conexao, $query);

            while($array=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
                            
                foreach($array as $codigos){
                    $contador = 1;
                    if($contador == 1){
                        echo "$codigos - Recebida                       ";
                    }if($contador == 2){
                        echo"Recebida por: $codigos \n";
                    }else{
                        echo "$codigos";
                    }
                    //var_dump($contador);
                    $contador++;
                } 
            }
            
            mysqli_close($conexao);

        }
    }

    
  //  <table>
  //  <tbody>
  //    <tr>
  //      <td>test</td>
  //      <td>test 2</td>
  //    </tr>
  //  </tbody>
  //  
  //</table>