<HTML>
<HEAD> <TITLE> Exerc�cio 16 </TITLE>  
<?php include ("biblio.fcn"); ?>
<script language = "javascript">
	function validadados(formulario)
	{
		if (formulario.nome.value == "")
		{
			alert("o campo nome � obrigatorio");
			return false;
		}
		
		if (formulario.nome.value.indexOf('@',0) == -1)
		{
			alert("email inv�lido");
			formulario.nome.value = "eta nois";
			formulario.nome.size = 5;			
			return false;
		}		
		
		if (formulario.endereco.value == "")
		{
			alert("o campo endereco � obrigatorio");
			return false;
		}		
		
		if (!formulario.sexo[0].checked && !formulario.sexo[1].checked)
		{
			alert("o campo sexo � obrigatorio");
			return false;
		}		
		
		if (formulario.estado.value=="UF")
		{
			alert("o campo estado � obrigatorio");
			return false;
		}				
		
		if ((!formulario.opt1.checked) && (!formulario.opt2.checked) && (!formulario.opt3.checked) &&
		    (!formulario.opt4.checked) && (!formulario.opt5.checked))
		{
			alert("marque pelo menos uma opcao");
			return false;
		}						
		
		return true;
	}
</script>
</HEAD>
<BODY>
<h2 align = "center"> www.mjailton.com.br  </h2>
<?= data() ?>

<FORM action = "Prog11.php" method = "post" onSubmit = "return validadados(this)">
Nome: <input type = "text" name = "nome" size = "30" maxlength = "30"> <br>
Endereco: <input type = "text" name = "endereco" size = "40" maxlength = "40"> <br>
Estado:
<select size = "1" name = "estado">
<option value = "UF" checked> UF </option>
<option value = "AC"> AC </option>
<option value = "RJ"> RJ </option>
<option value = "SP"> SP </option>
</select> <br>
Sexo:
<input type = "radio" name = "sexo" value = "masc"> Masculino 
<input type = "radio" name = "sexo" value = "fem" > Feminino <br>

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