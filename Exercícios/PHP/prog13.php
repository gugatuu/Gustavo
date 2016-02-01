<HTML>
<HEAD> <TITLE> Exercício 16 </TITLE>  

</HEAD>
<BODY>
<h2 align = "center"> www.mjailton.com.br  </h2>

<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%" border="1" cellspacing="0" cellpadding="0">  
	    <tr>
		  <td colspan="2"> <img src = "cabecalho.jpg"> </td>
		</tr>
		<tr>
		  <td width="24%">
		    <a href =prog13.php?link=1> Link1 </a><br>
		    <a href =prog13.php?link=2> Link2</a><br>
		    <a href =prog13.php?link=3> Link3</a><br>
		  </td>
          <td width="76%"><table width="100%" border="1" cellspacing="0" cellpadding="0"> 		  
			  <tr>
			    <td>
				  <?php
				                      
				    $link = $_GET["link"];					
					
					$pag[1] = "home.html";
					$pag[2] = "demos.html";					
					$pag[3] = "comprar.php";					
					
					if (!empty($link))
					{
						if (file_exists($pag[$link]))
						{
							include $pag[$link];
						}	
						else
							print "esta pagina nao existe";
						
					}						
				  ?>
				</td>
			  </tr>
			</table> </td>
		</tr>
	  </table></td>
  </tr>
</table>

</BODY>

</HTML>