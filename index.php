<!--HTML fitxategiaren estruktura nagusia beste fitxategi batetik inportatuko dugu-->
<?php 
	//Sesioa konprobatuko da beste php honetan, sesioa hasita badago ez gara logeatu beharko
	include "sesioaKonprobatu.php";
	logAtala();
	$title = "Sharegram";
	include "estruktura.php";
?>
		<!--Fitxategi honetarako estiloa esleitu-->
		<link rel="stylesheet" href="CSS/estiloLogIn.css">
		
		<div class="saioa loga animated">
			<p>Logeatu zaitez</p>
			<form method="POST" name="logIn" id="login" class="login" action="index.php" onSubmit="logIn(erabiltzailea, pasahitza)">
				<label>Erabiltzailea:</label>&emsp;
				<input type="text" id="erabiltzailea" name="erabiltzailea"/></br>
				<label>Pasahitza:</label>&emsp;&emsp;
				<input type="password" id="pasahitza" name="pasahitza"/></br>
				<div class="lower lowerL">
	           		&emsp;<input type="checkbox"><label class="check" for="checkbox">Logeatuta mantendu</label>
	             	<input type="submit" value="Logeatu" class="loginBotoia logBotoia">
	       		</div>
			</form>
			<?php 
				if(isset($_POST['erabiltzailea'])){
					include "connect.php";
					$erabiltzailea = $_POST['erabiltzailea'];
					$pasahitza = $_POST['pasahitza'];
					$query = "SELECT pasahitza, admin, irudia FROM erabiltzailea WHERE erabiltzailea='$erabiltzailea'";
					$erantzuna = $conn->query($query);
					if ($erantzuna->num_rows > 0) {
						$lerroa = $erantzuna->fetch_assoc();
						//BCRYPT
					    if (password_verify($pasahitza, $lerroa["pasahitza"])) {
					    	$_SESSION['erabiltzailea'] = $erabiltzailea;
							$_SESSION['admin'] = $lerroa["pasahitza"];
							$_SESSION['irudia'] = base64_encode( $lerroa['irudia'] );
							header("Location: feed.php");
						}
						else{
							echo "<br/><br/><font color='red'>Erabiltzaile edo pasahitz okerra.</font>";
						}
						echo "<br/><br/><font color='red'>Erabiltzaile edo pasahitz okerra.</font>";
					}
					$conn->close();
				}
			?>
		</div>
<?php include "footer.php" ?>