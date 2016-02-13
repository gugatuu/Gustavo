<?php 
  include("conexao.php");
?>
<HTML>
<HEAD> 
  <TITLE> Curso Completo de PHP </TITLE>  
</HEAD>
<BODY>
	<form name = "alterar" method = "post" action = "index.php?link=4">
	  Selecione o nome:
	  <select  name = "selecao" size = "1"> 
	  <?php
	    $sql = "select nome from cliente order by nome";
		$resultado = mysql_query($sql) or die ("não foi possivel fazer a consulta, verifique conexão");
		
		/*$registro = mysql_fetch_array($resultado);*/
		
		while ($registro = mysql_fetch_array($resultado))
		{          	  		
		  print "<option> $registro[nome] </option>";			
		}	
		mysql_free_result($resultado);	    
	  ?>
	  
	  </select>
	  <input name = "ok" type = "submit" value = "OK">
	</form>

</BODY>
</HTML>