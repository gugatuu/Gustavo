function adjustFrame(frame){
	var frmTemp;

	var w = frame.document.body.scrollWidth;
	var h = frame.document.body.scrollHeight;

	if(frame.document.body.scrollWidth > frame.document.body.offsetWidth) {
		document.all[frame.name].height = h + 60;
	}
	else {
		document.all[frame.name].height = h + 120;
	}
	
	
/*	if (document.all) {
		var w = frame.document.body.scrollWidth;
		var h = frame.document.body.scrollHeight;

		if(frame.document.body.scrollWidth > frame.document.body.offsetWidth) {
			document.all[frame.name].height = h + 60;
		}
		else {
			document.all[frame.name].height = h + 120;
		}
	}
	else if (document.getElementById) {

		var w = frame.document.width;
		var h = frame.document.height;

		if(frame.document.body.scrollWidth > frame.document.body.offsetWidth) {
			document.getElementById(frame.name).height = h + 60;
		}
		else {
			document.getElementById(frame.name).height = h + 120; 
		}
	}	*/
	
	return false;
}
