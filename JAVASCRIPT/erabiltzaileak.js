function follow(erab){
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if ((xhttp.readyState==4)&&(xhttp.status==200)){
			document.getElementById("errorea").innerHTML = xhttp.responseText;
			erabiltzaileInfo(erab);
		}
	};
	xhttp.open("GET","follow.php?nick="+erab);
	xhttp.send();
}

function unfollow(erab){
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if ((xhttp.readyState==4)&&(xhttp.status==200)){
			document.getElementById("errorea").innerHTML = xhttp.responseText;
			erabiltzaileInfo(erab);
		}
	};
	xhttp.open("GET","unfollow.php?nick="+erab);
	xhttp.send();
}