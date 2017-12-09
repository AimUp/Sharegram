function jarraitzen(){
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if ((xhttp.readyState==4)&&(xhttp.status==200)){
			document.getElementById("feed").innerHTML = xhttp.responseText;
		}
	};
	xhttp.open("GET","feedJarraitzen.php", true);
	xhttp.send();
}

function topPost(){
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if ((xhttp.readyState==4)&&(xhttp.status==200)){
			document.getElementById("feed").innerHTML = xhttp.responseText;
		}
	};
	xhttp.open("GET","feedTop.php", true);
	xhttp.send();
}

function azkenak(){
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if ((xhttp.readyState==4)&&(xhttp.status==200)){
			document.getElementById("feed").innerHTML = xhttp.responseText;
		}
	};
	xhttp.open("GET","feedAzkenak.php");
	xhttp.send();
}
