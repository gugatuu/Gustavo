<?php

$numInt = 5;  //PHP faz a declaracao do tipo de variavel internamente
$boo = (boolean) $numInt; //faz o cast automaticamente de acordo com o valor de $num

if ($boo)
	print "inteiro verdadeiro";
else
	print " inteiro falso";

$numFloat = 0.000;
$boo = (boolean) $numFloat;

print "<br>";

if ($boo)
	print "float verdadeiro";
else
	print " float falso";

$numStr = "";
$boo = (boolean) $numStr;

print "<br>";

if ($boo)
	print "string verdadeiro";
else
	print " string falso";

?>