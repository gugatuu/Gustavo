<HTML>
<HEAD> <TITLE> Exercício 16 </TITLE>  

</HEAD>
<BODY>
<h2 align = "center"> www.mjailton.com.br  </h2>
<?php
$nome = $_POST["nome"];

$antes = $nome;
$quant = substr_count($nome,"@");
/*$nome = str_replace(" ","",$nome);
$nome = str_replace("@.","@",$nome);
$nome = str_replace(".@","@",$nome);
$nome = str_replace(".@.","",$nome);
$nome = str_replace("/","",$nome);*/
$erro = 0;

/*verifica se existe espaço vazio, se encontrar emite mensagem*/
if (strstr($nome, ' ') != false)
{
	/*print "existe um caracter vazio, verifique o valor<br>";*/
	$msg = "existe um caracter vazio, verifique o valor";
	$erro = 1;
}
/*else
print "tudo OK<br>";	*/

if (strlen($nome) < 5)
{
	/*print "a quantidade de caracteres é menor que cinco<br>";*/
	$msg = "a quantidade de caracteres é menor que cinco";
	$erro = 1;
}
/*else
print "quantidade maior igual a cinco<br>";	*/

if ((strlen($nome) < 10) || ($quant !=1))
{
	/*print "email inválido<br>";*/
	$msg = "email inválido";
	$erro = 1;
}
/*else
print "email ok<br>";	*/

if (!is_numeric($nome)) 
{
	/*print "somente é aceito valores numéricos, digite outro valor<br>";*/
	//$msg = "somente é aceito valores numéricos, digite outro valor";
	//$erro = 1;
}
/*else
print "só existem números, tudo OK!<br>";	*/

//verificar se aconteceu algum erro
if ($erro > 0)
{
	print $msg;
	print "<br>";
	print "<a href = 'javascript:history.back()'> voltar </a>";
}	
else
{
  print "tudo ok, pode enviar as informações";
}	

?>

<?=$antes?><br>
<?=$nome?>
</BODY>
</HTML>