<?php

    include_once '../Repository/ConectarBancoDados.php';
    include_once '../Service/UsuarioServices.php';

    class MensagemController
    {
        public function cadastrarMensagem($codigoRemetente, $texto, $codigoDestinatario, $assunto)
        {
            $logar = new ConectarBancoDados();
            $validacao = new Service();

            $conexao = $logar::LogarBanco();

            $query = "INSERT INTO texto (codigoRemetente, texto, codigo, Assunto) VALUES('$codigoRemetente','$texto','$codigoDestinatario','$assunto')";
            
            $validacao->codigosIguais($codigoRemetente, $codigoDestinatario);

            $validacao->compoNulo($assunto, $texto);

            $opcao = "MENSAGEM";

            $validacao->validarCadastro($conexao, $query, $opcao);

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