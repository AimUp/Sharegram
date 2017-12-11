<?php 
	include "sesioaKonprobatu.php";
	logAtala();	//Sesioa konprobatuko da, sesioa hasita badago ez da berriz logeatu beharko
	$title = "Sign Up";
	include "estruktura.php";//HTML orriaren estruktura nagusia beste fitxategi batetik inportatuko dugu
?>
		<div class="signUp loga">
			<p>Sortu kontu berria</p>
			<form method="POST" name="signUp" action="signupQuery.php" onsubmit="return signUp('izena', 'email', 'erabiltzailea', 'pasahitza', 'pasahitza2')">
				<input type="text" id="izena" class="inpName" name="izena" placeholder="Izena"/><br>
				<input type="email" id="email" class="inpEmail" name="email" placeholder="Email-a"/><br>
				<input type="text" id="erabiltzailea" class="inpUser" name="erabiltzailea" placeholder="Erabiltzailea"/><br>
				<input type="password" id="pasahitza" class="inpPass" name="pasahitza" placeholder="Pasahitza"/><br>
				<input type="password" id="pasahitza2" class="inpPass" name="pasahitza2" placeholder="Errepikatu pasahitza" /><br>
              	<div class="lower lowerS">
              		<input type="submit" value="Bidali" class="logBotoia">
              	</div>
			</form>
		</div>

<!--Footerraren HTML zatia jarriko du-->
<?php include "footer.php" ?>