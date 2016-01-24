<HTML>
<HEAD> <TITLE> Exercício 16 </TITLE>  
<?php include ("biblio.fcn"); ?>

</HEAD>
<BODY>
<h2 align = "center"> www.mjailton.com.br  </h2>
<?= data() ?>

<FORM action = "Prog11.php" method = "post">
Nome: <input type = "text" name = "nome" size = "30" maxlength = "30"> <br>
Endereco: <input type = "text" name = "endereco" size = "40" maxlength = "40"> <br>
Estado:
<select size = "1" name = "estado">
<option value = "AC"> AC </option>
<option value = "RJ"> RJ </option>
<option value = "SP" selected> SP </option>
</select> <br>
Sexo:
<input type = "radio" name = "sexo" value = "masc"> Masculino 
<input type = "radio" name = "sexo" value = "fem" checked> Feminino <br>

Profissao:
<select size = "1" name = "profissao">
	<option value = "prog"> programador </option>
	<option value = "des"> designer </option>
    <option value = "eng"> engenheiro </option>
	<option value = "med"> medico </option>		
</select> <br>

Preferencias: <br>
<input type = "checkbox" name = "opt1" value = "esporte"> Esporte <br>
<input type = "checkbox" name = "opt2" value = "danca"> danca <br>
<input type = "checkbox" name = "opt3" value = "musica"> musica <br>
<input type = "checkbox" name = "opt4" value = "livros"> livros <br>
<input type = "checkbox" name = "opt5" value = "carros"> carros <br>

<input type = "submit" value = "enviar">
<input type = "reset" value = "limpar">
</FORM>
</BODY>

</HTML>