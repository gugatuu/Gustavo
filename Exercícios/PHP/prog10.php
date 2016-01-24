<HTML>
<HEAD> <TITLE> Exercício 11 </TITLE>   </HEAD>
<BODY>

<?php 
 
   $dia_da_semana = array("Domingo", "Segunda", "Terca", "Quarta", "Quinta", "Sexta", 
                          "Sabado");
        
		
  print "dia da semana: ".date('w');
  echo "<br>";
  
  $diaSem = date('w');
  $dia_extenso = $dia_da_semana[$diaSem];  
  
  print "dia por extenso: ".$dia_extenso;
?> 

</BODY>

</HTML>