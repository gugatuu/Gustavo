<?php
  include("conexao.php");
?>
<HTML>
<HEAD> 
  <TITLE> Curso Completo de PHP </TITLE>  
</HEAD>
<BODY>
<table width = "100%" border = "1" cellspacing = "0" cellpadding = "0" align = "center" bordercolor = "#000000">
	<tr>
		<td>Nome </td>
		<td>Endereco </td>
		<td>Cidade </td>
		<td>Bairro </td>
		<td>Cep </td>
		<td>Email </td>		
	</tr>
	<?php
		$sql = "select * from cliente";
		$query = mysql_query($sql);
		
		while ($resultado = mysql_fetch_array($query))
		{
			print "
			<tr>
			  <td> $resultado[nome] </td>
			  <td> $resultado[endereco] </td>
			  <td> $resultado[cidade] </td>
			  <td> $resultado[bairro] </td>
			  <td> $resultado[cep] </td>
			  <td> $resultado[email] </td>			
			  </tr>";	
		}			
	?>
</table>
</body>
</html>
