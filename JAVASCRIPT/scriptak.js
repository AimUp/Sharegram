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

function logIn(erabiltzailea, pasahitza){
	if(document.getElementById(erabiltzailea).value=="" || document.getElementById(pasahitza).value==""){
		return false;
	}else{
		return true;
	}
}

function signUp(izena, email, erabiltzailea, pasahitza, pasahitza2){
	if(document.getElementById(izena).value=="" || document.getElementById(email).value=="" || document.getElementById(erabiltzailea).value=="" || document.getElementById(pasahitza).value=="" || document.getElementById(pasahitza2).value==""){
		return false;
	}else{
		if(document.getElementById(pasahitza).value == document.getElementById(pasahitza2).value){
			return true;
		}
	}
}

$(document).ready(function(){

	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 && $(this).scrollTop() < 15 ){

		}
		else if( $(this).scrollTop() > 15 ){
			$('.goiburua').addClass('goiburua2');

		} else {
			$('.goiburua').removeClass('goiburua2');
		}
	});
});