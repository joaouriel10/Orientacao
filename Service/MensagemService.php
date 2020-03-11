<?php

    include_once '../Service/MensagemServices.php';

    class MensagemService
    {
        public function codigosIguais($codigoUm, $codigoDois)
        {
            if($codigoUm == $codigoDois){
                echo "Codigos iguais";
                exit;
                return header('Location: http://localhost/projeto01/Trabalho_Logica/View/index.html');
                exit;
            }
            return true;
        }
        public function compoNulo($assunto, $texto)
        {
            if($assunto == "" || $texto == ""){
                echo "Campo Nulo";
                exit;
                return header('Location: http://localhost/projeto01/Trabalho_Logica/View/index.html');
                exit;
            }
            return true;
        }
        public function mostrarMensagem($resultado)
        {
            while($array = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
                            
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
        }
        
    }