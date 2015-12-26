<?php
$variavel = "teste";
$cor = "Azul";

print 'o valor da variavel eh $variavel \$'; //aspa simples nao pega valor da variavel
echo "<br>";
print "o valor da variavel eh $variavel \$ \" ";
echo "<br>";
print "o valor da variavel eh $cor"; 

$valor = true;
$str = (string) $valor;  //faz o tipecast de boolean para string 

print "<br>";
print "o valor de str eh: $str";

$str = "10teste" + 1;
$int = (integer) $str;  //faz o tipecast de string para integer

print "<br>";
print "o valor de int eh: $int";


?>