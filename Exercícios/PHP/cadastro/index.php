<HTML>
<HEAD> 
  <TITLE> Curso Completo de PHP </TITLE>  
</HEAD>
<BODY>
<a href="index.php?link=4"> </a>  
<table width = "100%" border = "1" cellspacing = "0" cellpadding = "0">
<tr>
<td> 
	<table width = "100%" border = "1" cellspacing = "0" cellpadding = "0">
	<tr>
		<td colspan = "2"> cabecalho </td>
	</tr>
	<tr>
		<td width = "20%"> 
			<table width = "100%" border = "1" cellspacing = "0" cellpadding = "0">		
			  <tr>
			    <td>Menu de Opcoes </td>
			  </tr>
			  <tr>
			    <td><a href="index.php?link=1"> Home </a> </td>
			  </tr>			  			  
			  <tr>
			    <td><a href="index.php?link=2"> Inserir </a> </td>
			  </tr>
			  <tr>
			    <td><a href="index.php?link=3"> Alterar </a> </td>
			  </tr>
			  <tr>
			    <td> Excluir </td>
			  </tr>
			  <tr>
			    <td>Consultar </td>
			  </tr>			  
			</table>
		</td>
		<td> 
		
			<table width = "100%" border = "1" cellspacing = "0" cellpadding = "0">				
			  <tr>
			    <td> 
				  <?php
				    $link = $_GET["link"];
					
					$pag[1] = "home.php";
					$pag[2] = "formcliente.php";					
					$pag[3] = "selecionaalterar.php";										
					$pag[4] = "formeditar.php";															
					
					if (!empty($link))
					{
						if (file_exists($pag[$link]))
						{
							include $pag[$link];
						}	
						else
						{
							print "a pagina não existe";
						}	
					}	
				  ?>
				</td>
			  </tr>
			</table>
		
		</td>		
	</tr>	
	</table>

</td>
</tr>

</table>




</BODY>
</HTML>