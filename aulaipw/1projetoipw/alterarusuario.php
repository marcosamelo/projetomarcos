<meta charset="utf-8">
<?php

    if (isset($_POST)){
        if(isset($_POST["ID"]) && 
        isset($_POST["nome"]) && 
        isset($_POST["email"]) &&
        isset($_POST["senha"]) && 
        isset($_POST["ativo"]))
            {
                
                $id=$_POST['ID'];
                $nome=$_POST['nome'];
                $email=$_POST['email'];
                $senha=$_POST['senha'];
                $ativo=$_POST['ativo'];
            
                 include ("classeusuario.php");
                 $pessoa = new usuario();
                 $retorne = $pessoa-> alterar($id, $nome,$email,$senha,$ativo);
                if ($retorne){
                    echo "$nome Alterado  com sucesso";
                }
                else{ echo "erro na alteracao ";
                }
            }
            else {
                echo "erro campo";
            }
        }
        else { 
            echo "erro formulario";
        }
?>