function logIn(erab, pass){
	if(document.getElementById(erab).value=="" || document.getElementById(pass).value==""){
		return false;
	}
	return true;
}

function signUp(izena, email, erab, pass, pass2){
	if(document.getElementById(izena).value=="" || document.getElementById(email).value=="" || document.getElementById(erab).value=="" || document.getElementById(pass).value=="" || document.getElementById(pass2).value==""){
		return false;
	}else if(document.getElementById(pass).value == document.getElementById(pass2).value){
		return true;
	}
	return false;
}

function profilUpdate(id){
	irudia = document.getElementById(id).files[0];
	if(irudia!=null){
		if(irudia.size > 999000){
			document.getElementById("errorea").innerHTML = "<center class='errorea'>Argazkia handiegia da. 999KB baino txikiagoko argazki bat aukeratu, mesedez.</center><br>";
			return false;
		}
	}	
	return true;
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