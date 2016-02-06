
/*Confirma um comando de Submit ou um hiperlink*/
function ConfirmaForm(msg) {
	var ok = confirm(msg);
	if (ok) return true ;
	else return false ;	
}


function ConfirmaDisabled(msg,obj) {
	var ok = confirm(msg);
	if (ok) {
		obj.disabled = true;
		return true;
	}
	else {
		return false;
	}
}