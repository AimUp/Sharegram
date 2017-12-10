function argazkiaCheck(did, id){
	deskripzioa = document.getElementById(did);
	irudia = document.getElementById(id).files[0];
	if(deskripzioa.length > 500){
		document.getElementById("errorea").innerHTML = "<center class='errorea'>Deskripzio luzeegia</center><br>";
		return false;
	}
	if(irudia==null){
		document.getElementById("errorea").innerHTML = "<center class='errorea'>Argazki bat aukeratu</center><br>";
		return false;
	}
	if(irudia.size > 999000){
		document.getElementById("errorea").innerHTML = "<center class='errorea'>Argazkia handiegia da. 999KB baino txikiagoko argazki bat aukeratu, mesedez.</center><br>";
		return false;
	}
	return true;
}

function erabiltzaileLogCheck(){

}

function erabiltzaileSignCheck(){

}