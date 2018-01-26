

<meta charset="utf-8">
<?php


    if (isset($_POST)){
        if((isset ($_POST["nome"]))&&
            isset($_POST["endereco"]) && 
            isset($_POST["bairro"]) && 
            isset($_POST["cidade"]) &&
            isset($_POST["estado"]) && 
            isset($_POST["email"]) &&
            isset($_POST["telefone"]) && 
            isset($_POST["login"]) && 
            isset($_POST["senha"]) &&
            isset ($_POST["ativo"]))
           
    {

    $nome=$_POST['nome'];
    $endereco=$_POST['endereco'];
    $bairro=$_POST['bairro'];
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $login=$_POST['login'];
    $senha=$_POST['senha'];
    $ativo=$_POST['ativo'];
    

 
 
     include ("../classe/classeusuario.php");
     $cadastro=new usuario();
                   $retorne = $cadastro-> cadastrarUsuario($nome,$endereco,$bairro,$cidade,$estado,$email,$telefone,$login,$senha,$ativo);
                 $mensagem1=" incluido com sucesso" ;
                if ($retorne){
                    header('location: ../view/listar.php?nome=' . $nome . '&mensagem1='.$mensagem1.'&mensagem=sucesso');
                    echo "$nome .$mensagem1";
                }
                else{ 
                    echo "erro na inclusão ";
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