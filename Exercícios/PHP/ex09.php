<?php

$a = 7;
if ($a==1)
	print "o valor de a eh igual a 1";
elseif ($a==2)
	print "o valor de a eh igual a 2";
elseif ($a==3)
    print "o valor de a eh igual a 3";	
elseif ($a==4)	
	print "o valor de a eh igual a 4";	
elseif ($a==5)	
	print "o valor de a eh igual a 5";		
elseif ($a==6)	
	print "o valor de a eh igual a 6";			
else
	print "outro valor";	

echo "<br>";

$a = 8;

switch ($a)
{
case 1: 
  print "valor de a igual a 1 <br>";
  break;
case 2: 
  print "valor de a igual a 2 <br>";
  break;
case 3: 
  print "valor de a igual a 3 <br>";
  break;
case 4: 
  print "valor de a igual a 4 <br>";
  break;
case 5: 
  print "valor de a igual a 5 <br>";
  break;
case 6: 
  print "valor de a igual a 6 <br>";
  break;
case 7: 
  print "valor de a igual a 7 <br>";
  break;
default: 
  print "outro valor <br>";  
}  






?>