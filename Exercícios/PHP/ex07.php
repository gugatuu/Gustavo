<?php

$a = 12;
$b = 21;
$c = $a+$b;

print "adicao: ". "$c";
print "<br>";

$c = $a-$b;

print "subtracao: ". $c;		 		 

echo "<br>";

$c = $a*$b;

print "multiplicacao: ". $c;

print "<br>";

$c = $a/$b;

print "divisao: $c";

print "<br>";

$a = 14;
$b = 2;
$c = $a%$b;

print "resto da divisao: $c";

echo "<br>";
print "valor de a antes: $a <br>";
$a += $b;
print "valor de a depois: $a <br>";

print "valor de a antes: $a <br>";
$a -= $b;
print "valor de a depois: $a <br>";

print "valor de a antes: $a <br>";
$a *= $b;
print "valor de a depois: $a <br>";

print "valor de a antes: $a <br>";
$a .= $b;
print "valor de a depois: $a <br>";

print "valor de a antes: $a <br>";
$a %= $b;
print "valor de a depois: $a <br>";

$a = 50;
$b = 50;

if ($a==$b)
	print "verdadeiro";
else
	print "falso";

print "<br>";

if ($a!=$b)
	print "verdadeiro";
else
	print "falso";

print "<br>";

if ($a<>$b)
	print "verdadeiro";
else
	print "falso";

print "<br>";

if ($a>=$b)
	print "verdadeiro";
else
	print "falso";
print "<br>";

$a = 10;
$b = 20;
if (($a>=10) && ($b<=20))
	print "verdadeiro";
else
	print "falso";

print "<br>";

$a = 10;
$b = 20;
if (($a>10) || ($b<=20))
	print "verdadeiro";
else
	print "falso";

print "<br>";

$a = 10;
$b = 20;
if (!($a==10) && ($b==20))
	print "20 verdadeiro";
else
	print "20 falso";

echo "<br>";

print 'utilizando ++$b';
print "<br>";
$c = $a + (++$b);
print "valor de b: $b <br>";
print "valor de c: $c";


echo "<br>";

$a = 10;
$b = 20;

print 'utilizando $b++';
print "<br>";
$c = $a + ($b++);
print "valor de b: $b <br>";
print "valor de c: $c";

print "<br>";
$a = 15;
$a = -$a + 0;
print "valor de a: $a";

?>