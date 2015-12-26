<?php
$vet = array(1=> "Domingo", 2=> "Segunda", 3=> "terca", 4=> "quarta",
             "outro"=> "outro valor");

print $vet[4];
print "<br>";
print $vet["outro"];

$vet2[1] = "Domingo";
$vet2[2] = "Segunda";
$vet2[3] = "Terca";
$vet2["outro"] = "outro valor";

print "<br>";
print $vet2[3];


$vet3 = array("dia" => array(1=> "Domingo", 2=> "Segunda", 3=> "terca", 4=> "quarta",
             "outro"=> "outro valor"), "mes" => array(1=> "janeiro", 2=> "fevereiro",
			 3 => "marco"), 2=> "Dois", 3=> "Tres", 15,28);
			 
print "<br>";
print $vet3["dia"][3];			 
print "<br>";
print $vet3[3];			 
print "<br>";
print $vet3["mes"][3];
print "<br>";
print $vet3[4];
print "<br>";
print $vet3[5];

print "<br>";

$vet4 = array("Domingo", "Segunda", "terca", "quarta",
             "quinta", "sexta", "sabado");
			 
  foreach ($vet4 as $vetor) {
	  print "Hoje eh: $vetor <br>";
  }			 
			 

?>