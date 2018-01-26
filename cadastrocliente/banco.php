<meta charset="utf-8">
<?php
    //include("conexao1.php");
    include("conecta_bd.php");
    $nome = $_POST['nome'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $datanasc = $_POST['data_nasc'];
    
    

    
    $sql = "INSERT INTO  cliente(nome,rg,cpf,data_nascimento) VALUES";
    $sql .= "('$nome','$rg','$cpf', STR_TO_DATE('$datanasc','%d/%m/%Y'))";

    if($conectar->query($sql)===TRUE){
        echo "Usuário $nome,  incluído com sucesso !" ;
        }    
     else{
        echo "Erro:".$sql ."<br>" . $conectar->error;
    }
   $conectar->close();

?>