<?php 
  include("validarcookie.php");
?>
<HTML>
<HEAD> 
  <TITLE> Curso Completo de PHP </TITLE>  
</HEAD>
<BODY>
<table width = "100%" border = "1" cellspacing = "0" cellpadding = "0">
  <tr>
    <td> 
	  <form name = "formcliente" method = "post" action = "gravar.php">
        <table width = "50%" border = "1" cellspacing = "0" align = "center" cellpadding = "0"  bordercolor = "#000000">	  
		  <tr align = "center">
		    <td colspan = "6"> Cadastro de Clientes</td>
          </tr>
		  
		  <tr>
		    <td>Nome:</td>
			<td colspan = "5"><input name = "nome" type = "text" size = "68"> </td>
		  </tr>
		  
		  <tr>
		    <td>Endereco:</td>
			<td colspan = "5"><input name = "endereco" type = "text" size = "68"> </td>
		  </tr>		  
		  
		  <tr>
		    <td>Bairro:</td>
			<td colspan = "5"><input name = "bairro" type = "text" size = "68"> </td>
		  </tr>		  		  
		  
		  <tr>
		    <td>Cidade:</td>
            <td width = "10%"><input name = "cidade" type = "text" size = "26"> </td>			
		    <td width = "7%">Cep:</td>
            <td width = "15%"><input name = "cep" type = "text" size = "15"> </td>						
			
		    <td width = "5%">UF:</td>
            <td width = "16%">
			  <select name = "uf" >
			    <option>AC</option>
			    <option>RJ</option>				
			    <option>MG</option>				
			    <option>SP</option>								
			  </select>
                               
			</td>												
		  </tr>
		  
		  <tr>
		    <td>Fone:</td>
            <td width = "10%"><input name = "fone" type = "text" size = "26"> </td>			
		    <td width = "7%">CPF:</td>
            <td width = "15%"><input name = "cpf" type = "text" size = "15"> </td>								  
		  </tr>
		  
		  <tr>
		    <td>Email:</td>
            <td colspan = "5"><input name = "email" type = "text" size = "68"> </td>					    
		  </tr>		  
		  
		  <tr>
		    <td>Sexo:</td>
            <td colspan = "5">
			  <input name = "sexo" type = "radio" value = "M"> Masculino 
			  <input name = "sexo" type = "radio" value = "F"> Feminino 			
			</td>					    
		  </tr>		  		  
		  
		  <tr>
		    
            <td colspan = "6" align = "center">
			  <input name = "enviar" type = "submit" value = "Salvar">
			  <input name = "cancelar" type = "reset" value = "Cancelar">			  
			  
			</td>					    
		  </tr>		  		  		  
		  
        </table> 		  
	  
	  </form>

	</td>
  </tr>
</table>




</BODY>
</HTML>