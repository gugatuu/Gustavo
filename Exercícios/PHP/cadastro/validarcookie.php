<?php
  //verifica se a variavel foi iniciada
  if (IsSet($_COOKIE["nome_usuario"]))
	  $usuario = $_COOKIE["nome_usuario"];
  
  if (IsSet($_COOKIE["senha_usuario"]))
	  $senha = $_COOKIE["senha_usuario"];  
  
  
  if  (!((empty($usuario)) or (empty($senha))))
  {
      print "cookie usuario: ".$usuario."<br>";
      print "senha: $senha";
  
	  include("conexao.php");
	  
	  
      $sql = "select * from login where login = '$usuario' and senha = '$senha' and ativo = 'S' ";
      $query = mysql_query($sql);  
  
      $qtd_reg = mysql_num_rows($query);
  
     // print $qtd_reg;
  
      if ($qtd_reg = 0) 
      {  	 
		  setcookie("nome_usuario"); //excluindo o coockie (quando nao passa valor no parametro)
          setcookie("senha_usuario");
	      header("location:login.php");	  
		  exit;
      }
  }
  else
  {
    header("location:login.php");	  	  	  
	exit;
  }
?>