<?php
$a = "manoel";
$$a = "jailton";  //variavel dinamica: o valor da
                  //variavel primitiva se torna o 
				  //nome de uma nova variavel 
echo $a;
echo "<br>";
echo $manoel;
echo "<br>";
echo "$a ${$a}";


?>