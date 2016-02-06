<?php
  $host = "localhost";
  $usuario = "root";
  $senha = "";
  $banco = mysql_connect($host, $usuario, $senha) or die("não foi possível fazer a conexão com o servidor de banco de dados.");
  mysql_select_db("aulaphp",$banco) or die("não foi possível encontrar o banco de dados especificado.");  
?>