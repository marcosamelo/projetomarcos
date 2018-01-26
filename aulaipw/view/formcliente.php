<!DOCTYPE html>
<html larg="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Marcos - Desenvolvimento web </title>
	<link rel="stylesheet" type="text/css" href="estilo2.css"/>

</head>
<body>
<h1>CADASTRAR USUARIO</h1>
<form action="../controle/cadastro.php" method="POST">
    <fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <ul class="id">
                    <li>
                        <label for="nome">Nome</label>
                    </li>
                    <li>
                        <input type="text" id="nome" name="nome" style="width: 30em"    value="">
                    </li>
                </ul>
                <ul class="endereco">
                  <li>
                        <label for="nome"> Endereço</label>
                  </li> 
                  <li>
                        <input type="text" id="nome" name="endereco" style="width: 20em" value="">
                  </li> 
                
                
                  <li>
                        <label for="nome"> Bairro</label>
                  </li> 
                  <li>
                        <input type="text" id="nome" name="bairro" style="width: 7em" value="">
                  </li> 
                
                
                  <li>
                        <label for="nome"> Cidade </label>
                  </li> 
                  <li>
                        <input type="text" id="nome" name="cidade" style="width: 10em" value="">
                  </li> 
             
                  <li>
                        <label for="nome"> Estado</label>
                  </li> 
                  <li>
                        <input type="text" id="nome" name="estado" style="width: 2em" value="">
                  </li> 
                </ul>
                
                 <ul>
                  <li>
                        <label for="nome"> Email</label>
                  </li> 
                  <li>
                        <input type="text" id="nome" name="email" style="width: 20em" value="">
                  </li> 
               
                  <li>
                        <label for="nome">Telefone</label>
                  </li> 
                  <li>
                        <input type="text" id="nome" name="telefone" style="width: 10em" value="">
                  </li> 
                </ul>
                <ul>
                   <li>
                       <label for="nome"> login </label>
                   </li> 
                   <li>
                       <input type="text" id="nome" name="login" style="width: 10em" value="">
                   </li>
                </ul> 
                <ul>
                    <li>
                        <label for="nome"> Senha  </label>
                    </li>
                    <li>
                         <input type="text" id="nome" name="senha" style="width: 10em" value="">
                    </li>
                </ul>
                
                <ul>
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

        <button type="submit" name="submit">cadastrar</button>
         <button type="reset" name="submit">limpar</button>
        
        </fieldset>
    </fieldset>
</form>

</body>

</html>