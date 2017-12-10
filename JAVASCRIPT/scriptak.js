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

function argazkiaDiva(id){
	element = document.getElementById(id);
	if(element.style.opacity=="0"){
		element.style="opacity:1; max-height: 300px;";
	}
	else{
		element.style="opacity:0; max-height: 0;";
	}
	
}

function irudiPreload(input, id){
	if (input.files && input.files[0]) {
        document.getElementById(id).style = "background-image: url("+window.URL.createObjectURL(input.files[0])+"); background-position: center; background-size: auto 100%;";
    }
}

$(document).ready(function(){
	$(window).scroll(function(){
		if( $(this).scrollTop() > 15 ){
			$('.goiburua').addClass('goiburua2');

		} else {
			$('.goiburua').removeClass('goiburua2');
		}
	});
});