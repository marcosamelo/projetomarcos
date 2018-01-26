<meta charset="utf-8">
<?php
    //include("conexao1.php");
    include("conecta_bd.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $senha= $_POST['senha'];
    $ativo= $_POST['ativo'];
    
    
    

    
    $sql = "INSERT INTO  usuario(Nome,Email,Login,Senha,Ativo) VALUES";
    $sql .= "('$nome','$email','$login','$senha','$ativo')";

    if($conectar->query($sql)===TRUE){
        echo "Usuário $nome,  incluído com sucesso !" ;
        }    
     else{
        echo "Erro:".$sql ."<br>" . $conectar->error;
    }
   $conectar->close();

?>