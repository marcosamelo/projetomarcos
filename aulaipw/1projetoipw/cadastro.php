<meta charset="utf-8">
<?php

    if (isset($_POST)){
        if((isset ($_POST["nome"]))&&
            isset ($_POST["email"])&&
            isset ($_POST["login"])&&
            isset ($_POST["senha"])&&
            isset ($_POST["ativo"]))
    {
   
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $login=$_POST['login'];
    $senha=$_POST['senha'];
    $ativo=$_POST['ativo'];
 
     include ("classeusuario.php");
     $cadastro=new usuario();
     $retorne = $cadastro-> cadastrarUsuario($nome,$email,$login,$senha,$ativo);
            if ($retorne){
                echo "$nome gravado com sucesso";
                }
                else{ echo "erro";
                }
    }
    else {echo "erro campo";}
    }
    else { echo "erro formulario";}

    

?>