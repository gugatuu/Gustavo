<?php
  include ("conexao.php");

  $usuario = $_POST["login"];
  $senha = $_POST["senha"];
  
  $sql = "select * from login where login = '$usuario' and senha = '$senha' and ativo = 'S' ";
  $query = mysql_query($sql);  
  
  $qtd_reg = mysql_num_rows($query);
  
 // print $qtd_reg;
  
  if ($qtd_reg > 0) 
  {  
	  setcookie("nome_usuario", $usuario);
      setcookie("senha_usuario", $senha); 
  
	  header("location:index.php?link=1");
  }	  
  else
	  print "Usuario nao encontrado. <br> <a href = 'login.php'> Voltar </a>";
  

?>