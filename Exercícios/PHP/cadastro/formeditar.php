<?php
  include("conexao.php");
  $nome_alterar = $_POST["selecao"];
  $sql = "select * from cliente where nome = '$nome_alterar' ";
  $resultado = mysql_query($sql) or die("nao foi possivel executar a consulta");
  
  $linha = mysql_fetch_array($resultado);
  
  $codigo = $linha["id_cliente"];
  $nome = $linha["nome"];
  $nome = '\''. $nome.'\''; 
  $endereco = $linha["endereco"];
  $endereco = '\''.$endereco.'\'';   
  $bairro = $linha["bairro"];
  $bairro = '\''.$bairro.'\'';     
  $cidade = $linha["cidade"];
  $cidade = '\''.$cidade.'\'';       
  $cep = $linha["cep"];
  $cep = '\''.$cep.'\'';       
  $fone = $linha["fone"];
  $fone = '\''.$fone.'\'';         
  $cpf = $linha["cpf"];
  $cpf = '\''.$cpf.'\'';           
  $email = $linha["email"];
  $email = '\''.$email.'\'';             
  $sexo = $linha["sexo"];
 /* $sexo = '\''.$sexo.'\'';               */
  
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
		    <td colspan = "6"> Edicao de Clientes</td>
          </tr>
		  
		  <tr>
		    <td>Nome:</td>
			<td colspan = "5"><input name = "nome" type = "text" size = "68" value = <?=$nome ?>> </td>			
		  </tr>
		  		  
		  <tr>
		    <td>Endereco:</td>
			<td colspan = "5"><input name = "endereco" type = "text" size = "68" value = <?=$endereco?> > </td>			
		  </tr>		  		  
		  
		  <tr>
		    <td>Bairro:</td>
			<td colspan = "5"><input name = "bairro" type = "text" size = "68" value = <?=$bairro ?>> </td>
		  </tr>		  		  
		  
		  <tr>
		    <td>Cidade:</td>
            <td width = "10%"><input name = "cidade" type = "text" size = "26" value = <?=$cidade?>> </td>			
		    <td width = "7%">Cep:</td>
            <td width = "15%"><input name = "cep" type = "text" size = "15" value = <?=$cep?>> </td>						
			
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
            <td width = "10%"><input name = "fone" type = "text" size = "26" value = <?=$fone?>> </td>			
		    <td width = "7%">CPF:</td>
            <td width = "15%"><input name = "cpf" type = "text" size = "15" value = <?=$cpf?>> </td>								  
		  </tr>
		  
		  <tr>
		    <td>Email:</td>
            <td colspan = "5"><input name = "email" type = "text" size = "68" value = <?=$email?> > </td>					    
		  </tr>		  
		  
		  <tr>
		    <td>Sexo:</td>
            <td colspan = "5">			  
			  <?php
			    $marcarM = "";
			    $marcarF = "";
				
			    if ($sexo == "M")
					$marcarM = "checked";
			    if ($sexo == "F")
					$marcarF = "checked";				
				
				print "<input name = sexo type = radio value = M $marcarM> Masculino";			  
			    print "<input name = sexo type = radio value = F $marcarF> Feminino"; 						  
			  ?>			   			
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

<?print $nome?>


</BODY>
</HTML>