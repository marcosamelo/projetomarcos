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
                <label for="nome"> Digite email</label>
                <input type="text" id="nome" name="email" style="width: 10em" value="">
                <label for="nome"> Digite login </label>
                <input type="text" id="nome" name="login" style="width: 10em" value="">
                <label for="nome"> Digite senha  </label>
                <input type="text" id="nome" name="senha" style="width: 10em" value="">
                <label for="nome"> situação usuario  </label>
                <input type="radio" name="ativo" value="sim"> sim<br>
                <input type="radio" name="inativo" value="nao"> não<br>
                
            </div>
         </fieldset>
         
         <fieldset class="botao">

        <button type="submit" name="submit">Enviar</button>
        </fieldset>
    </fieldset>
</form>

</body>

</html>