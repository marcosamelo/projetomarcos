<!DOCTYPE html>
<html larg="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Marcos - Desenvolvimento web </title>
	<link rel="stylesheet" type="text/css" href="estilo2.css"/>

</head>
<body>
    <h1>ALTERAR USUARIO</h1>
<?php

$codigo = filter_input(INPUT_GET, 'codigo', FILTER_SANITIZE_SPECIAL_CHARS);
include ("../classe/classeusuario.php");
$cadastro = new usuario();
$retorne = $cadastro-> listarUm($codigo);
foreach($retorne as $linha);


?>
<form action="../controle/alterarusuario.php" method="POST">
    <fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <ul class="id">
                    <li>
                   <label for="nome">ID </label>
                <input type="text" id="nome" name="ID" style="width: 5em" value="<?php echo $linha["ID"]; ?>" disabled>
                  </li>
                  <li>
                <label for="nome"> nome   </label>
                    </li>
                    <li>
                        <input type="text" id="nome" name="nome" style="width: 30em"value="<?php echo $linha["Nome"]; ?>">
                    </li>
                </ul>
                <ul class="endereco">
                  <li>
                        <label for="nome"> Endereço</label>
                  </li> 
                  <li>
                        <input type="text" id="nome" name="endereco" style="width: 20em" value="<?php echo $linha["Endereco"]; ?>">
                  </li> 
                
                
                  <li>
                        <label for="nome"> Bairro</label>
                  </li> 
                  <li>
                        <input type="text" id="nome" name="bairro" style="width: 7em" value="<?php echo $linha["Bairro"]; ?>">
                  </li> 
                
                
                  <li>
                        <label for="nome"> Cidade </label>
                  </li> 
                  <li>
                        <input type="text" id="nome" name="cidade" style="width: 10em" value<?php echo $linha["Cidade"]; ?>
                  </li> 
             
                  <li>
                        <label for="nome"> Estado</label>
                  </li> 
                  <li>
                        <input type="text" id="nome" name="estado" style="width: 2em" value="<?php echo $linha["Estado"]; ?>">
                  </li> 
                </ul>
                
                 <ul>
                  <li>
                        <label for="nome"> email</label>
                  </li> 
                  <li>
                        <input type="text" id="nome" name="email" style="width: 20em" value="<?php echo $linha["Email"]; ?>">
                  </li> 
               
                  <li>
                        <label for="nome"> Telefone</label>
                  </li> 
                  <li>
                        <input type="text" id="nome" name="telefone" style="width: 10em" value="<?php echo $linha["Telefone"]; ?>">
                  </li> 
                </ul>
                <ul>
                   <li>
                       <label for="nome"> login </label>
                   </li> 
                   <li>
                       <input type="text" id="nome" name="login" style="width: 10em" value="<?php echo $linha["Login"]; ?>"disabled>
                   </li>
                </ul> 
                <ul>
                    <li>
                        <label for="nome"> Senha  </label>
                    </li>
                    <li>
                         <input type="text" id="nome" name="senha" style="width: 10em" value="<?php echo $linha["Senha"]; ?>">
                    </li>
                </ul>
                
                <ul class="ativo">
                     <li>
                         <label for="nome"> situação usuario  </label>
                     </li>
                </ul>
                </div>
                <div>
                 <ul class="radio">
                     <li>
                        <input type="radio" name="ativo" value="sim"> ativo<br> 
                     </li>
                     <li>
                          <input type="radio" name="ativo" value="nao"> inativo<br>
                     </li>
                 </ul>
                
            </div>

         </fieldset>
         
         <fieldset class="botao">
<input type="hidden" id="id" name="ID" value="<?php echo $linha["ID"]; ?>">
        <button type="submit" name="submit">Alterar</button>
        </fieldset>
    </fieldset>
</form>

</body>

</html>