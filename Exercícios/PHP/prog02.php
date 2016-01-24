<HTML>
<HEAD> <TITLE> Exercício 11 </TITLE>   </HEAD>
<BODY>

<?php
$nome = $_POST["nome"];

print "o numero eh: ". $nome;
echo "<br>";
$dobro = $nome * 2;
print "o dobro eh: ". $dobro;

/*& antes do parametro eh passagem por referencia*/
function fdobro(&$nome)
{
	$nome*=2;
	return $nome;
}

print "<br>";
print "o numero antes eh: ". $nome;
print "<br>";
print "chamando funcao o dobro eh: ". fdobro($nome);
print "<br>";
print "o numero depois eh: ". $nome. " (passagem de parametro por referencia)";


print "<br>";
$valFaren = $_POST["tempfare"];
$valCelsus = 5/9 * ($valFaren-32);
print "valor em celsius: ". $valCelsus;

echo "<br>";

$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$nota4 = $_POST["nota4"];
$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

print "media do aluno: $media";

echo "<br>";

$cont = 1;
$numTab = $_POST["numTabuada"];
print "Utilizando While <br>";
while ($cont <= 10)
{
	print "$cont"." X "."$numTab". " = ".$cont*$numTab. "<br>";
	$cont++;
}

print "Utilizando for <br>";
for ($cont = 1; $cont<=10; $cont++)
{
	print "$cont"." X "."$numTab". " = ".$cont*$numTab. "<br>";
}

print "Imprime multiplos de 5 entre 100 e 200 <br>";

  for ($cont=100;$cont<=200;$cont++)
  {
	  if ($cont % 5 == 0)
	  {
		  print "$cont eh multiplio de 5";
		  print "<br>";
	  }
  }  
  
  $lado1 = $_POST["lado1"];
  $lado2 = $_POST["lado2"];
  $lado3 = $_POST["lado3"];
  
  if (($lado1 < ($lado2+$lado3)) && ($lado2 < ($lado1+$lado3)) && ($lado3 < ($lado1 + $lado2)))
  {
	  print "eh um triangulo <br>";
	  
	  if (($lado1 == $lado2) && ($lado2 == $lado3))
		  print "eh um triangulo equilatero";
	  elseif (($lado1 <> $lado2) && ($lado2 <> $lado3) && ($lado1 <> $lado3))
		  print "eh um triangulo escaleno";
   	else
      print "triangulo isosceles";		
  }
  else
	  print "Nao eh triangulo";
	  
?>

</BODY>

</HTML>