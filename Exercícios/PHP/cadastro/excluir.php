<?php
  include ("conexao.php");
  
  $codigo    = $_POST["codigo"];
  
  $sql = 
  " DELETE FROM cliente where id_cliente = '$codigo'";
	
  $query = mysql_query($sql) or die("Houve um erro na gravação dos dados, verifique os valores informados.");
  
  print "Operação realizada com sucesso. Codigo: $codigo";
  
  header("location:index.php?link=1");

?>