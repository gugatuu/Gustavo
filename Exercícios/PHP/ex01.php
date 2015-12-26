<?php
$a = 2;
$b = 15;
$c = $a + $b;

function soma()
{
	global  $c;
	echo "<br>";	
	echo "usei a funcao";	
	echo "<br>";
    echo "O valor da variavel c eh: ". $c;	
	echo "<br>";
	echo "transformando variavel a em variavel global: O valor da variavel a eh: ". $GLOBALS['a'];	
}

echo "Estou estudando variaveis ";
echo "<br>";
echo "O valor da variavel a eh: ". $a;
echo "<br>";
echo " O valor da variavel b eh: ". $b;
echo "<br>";
echo " O valor da variavel c eh: ". $c;

soma();
?>