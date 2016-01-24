<HTML>
<HEAD> <TITLE> Exercício 15 </TITLE>  
</HEAD>
<BODY>
<h2 align = "center"> www.mjailton.com.br  </h2>

<?php
  $nome = $_POST["nome"];
  $endereco = $_POST["endereco"];
  $estado = $_POST["estado"];  
  $sexo = $_POST["sexo"];
  $profissao = $_POST["profissao"];
  $opt1 = $_POST["opt1"];
  $opt2 = $_POST["opt2"];
  $opt3 = $_POST["opt3"];
  $opt4 = $_POST["opt4"];
  $opt5 = $_POST["opt5"];

?>

Nome: ------------- <?=$nome?><br>
Endereco: --------- <?=$endereco?><br>
Estado: ----------- <?=$estado?><br>
Sexo: ------------- <?=$sexo?><br>
Profissao: -------- <?=$profissao?> <br>
Preferencias: <br>
<?php
  if (!empty($opt1))
	  print "esporte<br>";
  
  if (!empty($opt2))
	  print "dança<br>";

  if (!empty($opt3))
      print "musica<br>";
  
  if (!empty($opt4))
	  print "livros<br>";

  if (!empty($opt5))
	  print "carros<br>";  
?>

</BODY>
</HTML>