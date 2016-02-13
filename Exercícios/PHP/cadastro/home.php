<?php
  include("conexao.php");
?>
<HTML>
<HEAD> 
  <TITLE> Curso Completo de PHP </TITLE>  
</HEAD>
<BODY>
<table width = "100%" border = "0" cellspacing = "0" cellpadding = "0" align = "center" bordercolor = "#000000">
	 <tr bgcolor = "#6A5ACD" font color = "white">
		<td><font color="white"> Nome </font> </td>
		<td><font color="white">Endereco</font> </td>
		<td><font color="white">Cidade</font> </td>
		<td><font color="white">Bairro</font> </td>
		<td><font color="white">Cep</font> </td>
		<td><font color="white">Email</font> </td>		
	</tr>
  
	
	<?php
		$sql = "select * from cliente";
		$query = mysql_query($sql);
		$bgcolor = "#4682B4";
		
		while ($resultado = mysql_fetch_array($query))
		{
			if ($bgcolor == "#708090")
			  $bgcolor = "#4682B4";
			else
              $bgcolor = "#708090";
				
			print "
			<tr bgcolor = '#708090'>
			  <td bgcolor = \"$bgcolor\"> <font color = white> $resultado[nome] </font> </td>
			  <td bgcolor = \"$bgcolor\"> $resultado[endereco] </td>
			  <td bgcolor = \"$bgcolor\"> $resultado[cidade] </td>
			  <td bgcolor = \"$bgcolor\"> $resultado[bairro] </td>
			  <td bgcolor = \"$bgcolor\"> $resultado[cep] </td>
			  <td bgcolor = \"$bgcolor\"> $resultado[email] </td>			
			  </tr>";	
		}			
	?>
</table>
</body>
</html>
