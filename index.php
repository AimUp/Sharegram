<?php 
	include "sesioaKonprobatu.php";
	logAtala();//Sesioa konprobatuko da, sesioa hasita badago ez da berriz logeatu beharko
	$title = "Sharegram";
	include "estruktura.php";//HTML orriaren estruktura nagusia beste fitxategi batetik inportatuko dugu
?>
		<div class="saioa loga animated">
			<p>Logeatu zaitez</p>
			<form method="POST" name="logIn" id="login" class="login" onsubmit="return logIn('erabiltzailea', 'pasahitza');" action="loginQuery.php">
				<label>Erabiltzailea:</label>&emsp;
				<input type="text" id="erabiltzailea" name="erabiltzailea"/></br>
				<label>Pasahitza:</label>&emsp;&emsp;
				<input type="password" id="pasahitza" name="pasahitza"/></br>
				<div class="lower lowerL">
	           		&emsp;<input type="checkbox"><label class="check" for="checkbox">Logeatuta mantendu</label>
	             	<input type="submit" name="logeatu" value="Logeatu" class="loginBotoia logBotoia">
	       		</div>
			</form>
		</div>

<!--Footerraren HTML zatia jarriko du-->
<?php include "footer.php" ?>