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

            if($assunto == "" || $texto == ""){
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
        public function listarMensagens($codigoMensagem)
        {
            $logar = new ConectarBancoDados();

            $conexao = $logar::LogarBanco();

            $query = "SELECT t.Assunto, u.nome, t.texto FROM texto AS t Inner JOIN usuario AS u ON t.codigo = u.codigo where t.codigoRemetente = $codigoMensagem";

            $resultado = mysqli_query($conexao, $query);

            if($resultado){
                while($array=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
                            
                    foreach($array as $nome => $codigos){
                        if($nome == "Assunto"){
                            echo "<table>
                             <thead> <tr> <td>Assunto: $codigos</td></tr></thead>";
                        }if($nome == "nome"){
                            echo"<tbody> <tr> <td>Nome: $codigos </tr> </td>";                        
                        }if ($nome == "texto") {
                            echo "<tr> <td> Mensagem: $codigos </tr> </td> </tbody> </table> <br><br>";
                        }
                    } 
                }
                mysqli_close($conexao);
                return true;
            }
            return false;
        }
    }
