<HTML>
<HEAD> <TITLE> Exercício 11 </TITLE>   </HEAD>
<BODY>

<?php 
 
  $diaMes = date('d');
  print "dia do mes: ".$diaMes;
  echo "<br>";
  print "dia da semana: ".date('D');
  
  echo "<br>";
  print "nome do mes: ".date('F');  
  
  echo "<br>";
  print "hora sem zero: ".date('g');    
  
  echo "<br>";
  print "hora sem zero: ".date('G');      
  echo "<br>";
  print "hora formato 12 horas  com zero: ".date('h');        
  
  echo "<br>";
  print "hora formato 24 horas com zero: ".date('H');          


  echo "<br>";
  print "minutos com zero: ".date('i');          
  
  echo "<br>";
  print "se for dia retorna 1 se for noite retorna 0: ".date('I');            
  
  echo "<br>";
  print "dia do mes sem o zero: ".date('j');            
  
  echo "<br>";
  print "dia da semana completo: ".date('l');              
  
  echo "<br>";
  print "numero do mes: ".date('m');                
  
  echo "<br>";
  print "tres caracteres do mes: ".date('M');                  
  
  
  echo "<br>";
  print "numero do mes sem o zero: ".date('n');                    
  
  echo "<br>";
  print "segundos com o zero: ".date('s');                      
  
  echo "<br>";
  print "qtd de dias do mes atual: ".date('t');                        
  
  echo "<br>";
  print "numero do dia da semana: ".date('w');                          
  
  echo "<br>";
  print "ano com quatro digitos: ".date('Y');                            
  
  
  echo "<br>";
  print "ano com dois digitos: ".date('y');                              
  
  echo "<br>";
  print "dia atual do ano: ".date('z');                                
  
  echo "<br>";
  print "data inteira: ".date('c');                                  
        
?> 

</BODY>

</HTML>