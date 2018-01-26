<!DOCTYPE html>
<html larg="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Marcos - Desenvolvimento web </title>
	<link rel="stylesheet" type="text/css" href="estilo2.css"/>
<style type="text/css">
    .teste1{
        padding:10%;
        width: 80%;
    position: relative;
    margin: 0 auto;
   /* border: 1px dashed #669966;
    background-color: #ccffcc;*/
    
    }
    .teste{
        
        /*opacity: 0.8;*/
        z-index: 1;
        position: absolute;
        width: 350px;
        height: 100px;
        left: 40%;
	    top: 5%;
        border: 1px dashed #990000;
        background-color: #ffdddd;
        text-align: center;
    }
    .teste, h2{
        text-align: center;
        font-weight: bold;
        color: green;
        
    }
</style>
</head>
<body>
<div class="teste">
<?php
if (isset($_GET["nome"]) && isset($_GET["mensagem1"]) && isset($_GET["mensagem"])){
    $nome = $_GET["nome"];
    $mensagem1 = $_GET["mensagem1"];
    $mensagem = $_GET["mensagem"];
    
    if ($mensagem=="sucesso"){
        echo "<h2>" . $nome . $mensagem1 ."!!!</h2>";
    }else {
        echo "Erro ao Alterar o registro do " . $nome;
    }
}else{
    echo "Erro ao receber as variáveis";
}
include ("../classe/classeusuario.php");
$obj=new usuario();
$listarusuario=$obj->listartodos();
?>
</div>
<div class="teste1">
<table>
    <th>Codigo</th>
    <th>Nome</th>
    <th>Endereço</th>
    <th>Bairro</th>
    <th>Cidade</th>
    <th>Estado</th>
    <th>Email</th>
    <th>Telefone</th>
    <th>Login</th>
    <th>Senha</th>
    <th>Ativo</th>
    <th>Ação</th>
    <?php
    sort($listarusuario);
    foreach ($listarusuario as $valor) {
     echo "<tr>";
     echo "<td>" . $valor["ID"] . " </td>";
     echo "<td>" . $valor["Nome"] . "</td>";
     echo "<td>" . $valor["Endereco"] . "</td>";
     echo "<td>" . $valor["Bairro"] . "</td>";
     echo "<td>" . $valor["Cidade"] . "</td>";
     echo "<td>" . $valor["Estado"] . "</td>";
     echo "<td>" . $valor["Email"] . "</td>";
     echo "<td>" . $valor["Telefone"] . "</td>";
     echo "<td>" . $valor["Login"] . "</td>";
     echo "<td>" . $valor["Senha"] . "</td>";
     echo "<td>" . $valor["Ativo"] . "</td>";
     
     
     
     ?>
     <td><a href ="formAlterar.php?codigo= <?php echo $valor ["ID"];?>" >alterar</a>
     </td>
     </tr>
     <?php
    }
    ?>
    
    
    
    
</table>
</div>
</body>

</html>