// Original:  Mattias Sjoberg -->

// This script and many more are available free online at -->
// The JavaScript Source!! http://javascript.internet.com -->

function getCookieVal (offset) {  
	var endstr = document.cookie.indexOf (";", offset);  
	if (endstr == -1) {endstr = document.cookie.length; }	 
	return unescape(document.cookie.substring(offset, endstr));
}

function GetCookie (name) {  
	var arg = name + "=";
	var alen = arg.length;
	var clen = document.cookie.length;
	var i = 0;
	while (i < clen) {
		var j = i + alen;
		if (document.cookie.substring(i, j) == arg)
		return getCookieVal (j);
		i = document.cookie.indexOf(" ", i) + 1;
		if (i == 0) break;
	}
	return null;
}


function SetCookie (name, value) {
	var argv = SetCookie.arguments;
	var argc = SetCookie.arguments.length;
	var expires = (argc > 2) ? argv[2] : null;
	var path = (argc > 3) ? argv[3] : null;
	var domain = (argc > 4) ? argv[4] : null;
	var secure = (argc > 5) ? argv[5] : false;
	document.cookie = name + "=" + escape (value) +
	((expires == null) ? "" : ("; expires=" + expires.toGMTString())) +
	((path == null) ? "" : ("; path=" + path)) +
	((domain == null) ? "" : ("; domain=" + domain)) +
	((secure == true) ? "; secure" : "");
}

function DeleteCookie (name) {  
	var expire = new Date();  
	expire.setTime (expire.getTime() - 1);  
	var cval = GetCookie (name);  
	document.cookie = name + "=" + cval + "; expires=" + expire.toGMTString();
}



// Salva as opções de um ou mais forms numa string no cookie
function cookieFormToString() {
	for(f=0; f<cookieFormToString.arguments.length; f++) {		
			formName = cookieFormToString.arguments[f];	
			cookieValue = '';

			for(i=0; i<document[formName].elements.length; i++) {
				fieldType = document[formName].elements[i].type;

				if(fieldType == 'password') { 
					passValue = ''; // não salva passwords
				}

				else if(fieldType == 'checkbox') { 
					passValue = document[formName].elements[i].name+","+document[formName].elements[i].value+","+document[formName].elements[i].checked; 
				}

				else if(fieldType == 'radio') { 
					passValue = document[formName].elements[i].name+","+document[formName].elements[i].value+","+document[formName].elements[i].checked; 
				}

				else if(fieldType == 'select-one') { 
					passValue = document[formName].elements[i].name+","+document[formName].elements[i].options.selectedIndex; 
				}

				else { passValue = document[formName].elements[i].name+","+document[formName].elements[i].value; }

				cookieValue = cookieValue + passValue + '|';
			}

			var expDays = 1;
			var expire = new Date(); 
			expire.setTime(expire.getTime() + (expDays*24*60*60*1000));
			
			cookieValue = cookieValue.substring(0, cookieValue.length-4); // Remove last delimiter
			SetCookie('saved_'+formName, cookieValue, expire);	
	}
}

function geraTimestamp()
{
	var data		= new Date();
	var ano			= '' + data.getYear();
	var mes			= '' + (data.getMonth() + 1);
	var dia			= '' + data.getDate();
	var hora		= '' + data.getHours();
	var minuto		= '' + data.getMinutes();
	var segundo		= '' + data.getSeconds();

	if (ano.length == 3) { ano = '20' + ano.charAt(1) + ano.charAt(2); }
	if (mes.length == 1) { mes = '0' + mes; }
	if (dia.length == 1) { dia = '0' + dia; }
	if (hora.length == 1) { hora = '0' + hora; }
	if (minuto.length == 1) { minuto = '0' + minuto; }
	if (segundo.length == 1) { segundo = '0' + segundo; }

	var TimeStamp	= '{ts \'' + ano + '-' + mes + '-' + dia + ' ' + hora + ':' + minuto + ':' + segundo + '\'}';

	return TimeStamp;
	//{ts 'aaaa-mm-dd HH:mm:ss'}
}

function cookieAcessoFim (acessoFim) 
{
	expDays = 100;
	exp = new Date(); 
	exp.setTime(exp.getTime() + (expDays*24*60*60*1000));	
	return SetCookie('acessoFim', acessoFim + ',' + geraTimestamp(), exp, '/');
}


// End 