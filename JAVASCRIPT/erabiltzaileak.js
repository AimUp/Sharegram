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

function like(id){
	if(document.getElementById(id+"n").className == 'dislike-press'){
		document.getElementById(id+"n").className = 'n';
	}
	document.getElementById(id+"p").className = 'like-press';
}

function dislike(id){
	if(document.getElementById(id+"p").className == 'like-press'){
		document.getElementById(id+"p").className = 'p';
	}
	document.getElementById(id+"n").className = 'dislike-press';
}