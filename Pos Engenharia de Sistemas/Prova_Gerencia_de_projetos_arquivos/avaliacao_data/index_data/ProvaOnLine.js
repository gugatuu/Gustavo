// JavaScript Document
	<!--
	// This will be the Javascript DOM object
	// for the <div id='message'></div> in the HTML code below.
	var clock;

	// init globals and start timer running.
	function timer(minutes)
	{
		if (document.all)         			clock = document.all['clock'];
		else if (document.layers) 			clock = document.layers['clock'];
		else if (document.getElementById) 	clock = document.getElementById('clock');

		seconds = minutes * 60;	   
		doTimer(seconds);
	}

	// refresh time every second
	function doTimer(seconds)
	{
		clock.innerHTML = currentTime(seconds);
		sec = seconds - 1;

		if (sec >= 0)
		{
			setTimeout("doTimer(sec)", 1000);          // repeat this command every second.
		}

		if (sec==0)
		{
			alert('O tempo da prova esgotou. Suas respostas ser�o corrigidas agora.');
			document.IBEOProva.submit();
		}
	}

	function currentTime(seconds)
	{
		var mins = parseInt(seconds / 60);
		var secs = seconds - (mins * 60);

		if (mins<10) {mins="0"+mins;}
		if (secs<10) {secs="0"+secs;}
		return mins+":"+secs;
	 }
	 
	 
	function Valida_VF(cont)
	{
		var resp = 0;
		if(document.form.enunciado.value == "")
		{
			 alert('Defina o enunciado da qeust�o');
			 return false;
		}
		if(document.form.justificativa.value == "")
		{
			 alert('Defina uma justificativa para a quest�o');
			 return false;
		}
		for (i=0;i<cont;i++)
		{
			if(document.getElementById('resposta'+i).value == "")
				resp = 1;
		}
		if (resp == 1)
		{
			alert('A resposta n�o deve ficar em branco');
			return false;
		}
	}
	function Valida_CC(cont)
	{
		var resp1 = 0;
		var resp2 = 0;
		if(document.form.enunciado.value == "")
		{
			 alert('Defina o enunciado da qeust�o');
			 return false;
		}
		if(document.form.justificativa.value == "")
		{
			 alert('Defina uma justificativa para a quest�o');
			 return false;
		}
		for (i=0;i<cont;i++)
		{
			if(document.getElementById('respostac1'+i).value == "")
				resp1 = 1;
		}
		if (resp1 == 1)
		{
			alert('As op��es da coluna 1 n�o podem\nficar em branco.');
			return false;
		}
		for (i=0;i<cont;i++)
		{
			if(document.getElementById('respostac2'+i).value == "")
				resp2 = 1;
		}
		if (resp2 == 1)
		{
			alert('As op��es da coluna 2 n�o podem\nficar em branco.');
			return false;
		}
	}
//-->
