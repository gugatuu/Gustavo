<?php

define("nome", "Jailton");
define("Idade", 30, true); //parametro opcional caseinsensitive = true
$teste = "testes";

echo "Seu nome eh: ".nome;
echo "<br>";
echo "sua idade eh : ".idade;
echo "<br>";
echo "sua idade eh : ".constant("IDADE");
echo "<br>";

echo "variavel eh: ".$teste; 
echo "<br>";
//print faz a mesma coisa que o echo
print "variavel eh: ".$teste;
print "<br>";

if (defined('nome'))
  print "o nome foi definido e eh: ".nome;
else
  print "o nome nao foi definido. ";		

print "<br>";
print_r(get_defined_constants()); //print_r para imprimir uma lista de array





?>