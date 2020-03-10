<?php

    require_once '../Repository/ConectarBancoDados.php';

    class MensagemRepository{

        public function cadastrarMensagem($codigoRemetente, $texto, $codigoDestinatario, $assunto)
        {

            $validacaoCadastroMensagem = new MensagemService();
            
            $validacaoCadastroMensagem->codigosIguais($codigoRemetente, $codigoDestinatario);
    
            $validacaoCadastroMensagem->compoNulo($assunto, $texto);
    
            $validacaoCadastroMensagem->validarCadastro($codigoRemetente, $texto, $codigoDestinatario, $assunto);
    
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
