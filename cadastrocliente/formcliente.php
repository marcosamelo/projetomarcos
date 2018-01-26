<!DOCTYPE html>
<html larg="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Marcos - Desenvolvimento web </title>
	<link rel="stylesheet" type="text/css" href="estilo.css"/>

</head>
<body>

<form action="banco.php" method="POST">
    <fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">Digite nome   </label>
                <input type="text" id="nome" name="nome" style="width: 10em" value="">
                <label for="nome"> Digite rg </label>
                <input type="text" id="nome" name="rg" style="width: 10em" value="">
                <label for="nome"> Digite cpf </label>
                <input type="text" id="nome" name="cpf" style="width: 10em" value="">
                <label for="nome"> Digite Data de Nascimento </label>
                <input type="date" id="nome" name="data_nasc" style="width: 10em" value="">
            </div>
         </fieldset>
         
         <fieldset class="botao">

        <button type="submit" name="submit">Enviar</button>
        </fieldset>
    </fieldset>
</form>

</body>

</html>