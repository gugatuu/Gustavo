<?php
  include("validarcookie.php");
  $usuario = $_COOKIE["nome_usuario"];
  $senha = $_COOKIE["senha_usuario"];  
?>
<HTML>
<HEAD> 
  <TITLE> Curso Completo de PHP </TITLE>  
  
<style type = "text/css">
<!--
body {color: #039;
     background: #f6faff;
    font: 12px arial, helvetica, sans-serif;
	}
a.efeito {
	position: relative;    
    display: block;
	font: 12px arial, helvetica, sans-serif;
	color: #00f;
	padding: 4px 10px;
	text-decoration: none;	
 }
 	
 a.efeito:hover {
    color: #fff; 
	background-color: #000;
 }
 
-->
</style>  
  
  
</HEAD>
<BODY>
<a href="index.php?link=4"> </a>  
<table width = "100%" border = "1" cellspacing = "0" cellpadding = "0">
<tr>
<td> 
	<table width = "100%" border = "1" cellspacing = "0" cellpadding = "0">
	<tr>
		<td colspan = "2"> <img src = "fd.gif"> </td>
	</tr>
	<tr>
		<td width = "20%"> 
			<table width = "100%" border = "1" cellspacing = "0" cellpadding = "0">		
			  <tr>
			    <td>Menu de Opcoes </td>
			  </tr>
			  <tr>
			    <td><a class = "efeito" href="index.php?link=1"> Home </a> </td>
			  </tr>			  			  
			  <tr>
			    <td><a class = "efeito" href="index.php?link=2"> Inserir </a> </td>
			  </tr>
			  <tr>
			    <td><a class = "efeito" href="index.php?link=3"> Alterar </a> </td>
			  </tr>
			  <tr>
			    <td><a class = "efeito" href="index.php?link=5"> Excluir </td>
			  </tr>
			  <tr>
			    <td><a class = "efeito" href="index.php?link=7">Consultar </td>
			  </tr>	
				<tr>
				   <td> <a class = "efeito" href = "logout.php"> Logout </a> </td>
				</tr>
              <tr>
			     <td> usuario:  <?=$usuario?> <br>
						 senha: <?=$senha?>				         
				 </td>
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
					$pag[5] = "selecionaexcluir.php";																				
					$pag[6] = "formexcluir.php";																									
					$pag[7] = "consulta.php";																														
					
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