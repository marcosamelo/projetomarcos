<meta charset="utf-8">
<?php
include ("classeusuario.php");
$obj=new usuario();
$listarusuario=$obj->listartodos();
?>
<table border ="1">
    <th>Codigo</th>
    <th>Nome</th>
    <th>Email</th>
    <th>Login</th>
    <th>Senha</th>
    <th>Ativo</th>
    <th>Ação</th>
    <?php
    foreach ($listarusuario as $valor) {
     echo "<tr>";
     echo "<td>" . $valor["ID"] . " </td>";
     echo "<td>" . $valor["Nome"] . "</td>";
     echo "<td>" . $valor["Email"] . "</td>";
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