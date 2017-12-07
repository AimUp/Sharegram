function argazkiaIgo(path){
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if ((xhttp.readyState==4)&&(xhttp.status==200)){
			location.reload(); 
		}
	};
	xhttp.open("GET","argazkiaIgo.php", true);
	xhttp.send();
	return false;
}