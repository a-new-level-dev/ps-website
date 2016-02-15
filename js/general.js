// This is a simple JavaScript comment for example purposes
function copyright() {
	var date = new Date();
	var year = date.getUTCFullYear();

	document.getElementById('copyright').innerHTML = year;
}

copyright();