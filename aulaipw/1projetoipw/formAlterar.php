<!DOCTYPE html>
<html larg="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Marcos - Desenvolvimento web </title>
	<link rel="stylesheet" type="text/css" href="estilo.css"/>

</head>
<body>
<?php

$codigo = filter_input(INPUT_GET, 'codigo', FILTER_SANITIZE_SPECIAL_CHARS);
include ("classeusuario.php");
$cadastro = new usuario();
$retorne = $cadastro-> listarUm($codigo);
foreach($retorne as $linha);


?>
<form action="alterarusuario.php" method="POST">
    <fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">ID </label>
                <input type="text" id="nome" name="ID" style="width: 10em" value="<?php echo $linha["ID"]; ?>" disabled>
                <label for="nome">Alterar nome   </label>
                <input type="text" id="nome" name="nome" style="width: 10em" value="<?php echo $linha["Nome"]; ?>">
                <label for="nome"> Alterar email</label>
                <input type="text" id="nome" name="email" style="width: 10em" value="<?php echo $linha["Email"]; ?>">
                <label for="nome"> Alterar login </label>
                <input type="text" id="nome" name="login" style="width: 10em" value="<?php echo $linha["Login"]; ?>" disabled>
                <label for="nome"> Alterar senha  </label>
                <input type="text" id="nome" name="senha" style="width: 10em">
                <label for="nome"> situação usuario  </label>
                <input type="radio" name="ativo" value="sim"> sim<br>
                <input type="radio" name="ativo" value="nao"> não<br>
                
                
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