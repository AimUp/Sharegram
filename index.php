<?php 
	include "sesioaKonprobatu.php";
	logAtala();
	$title = "Sharegram";
	include "estruktura.php";
?>

		<link rel="stylesheet" href="CSS/estiloLogIn.css">
		<div class="saioa loga animated">
			<form method="POST" name="logIn" id="login" class="login" action="index.php">
				<label>Erabiltzailea:</label>&emsp;
				<input type="text" id="erabiltzailea" name="erabiltzailea"/></br>
				<label>Pasahitza:</label>&emsp;&emsp;
				<input type="password" id="pasahitza" name="pasahitza"/></br>
				<div class="lowerL">
               		&emsp;<input type="checkbox"><label class="check" for="checkbox">Logeatuta mantendu</label>
                 	<input type="submit" value="Logeatu" class="logBotoia">
           		</div>
			</form>
			<?php 
				if(isset($_POST['erabiltzailea'])){
					include "connect.php";
					$erabiltzailea = $_POST['erabiltzailea'];
					$pasahitza = $_POST['pasahitza'];
					$query = "SELECT pasahitza, admin FROM erabiltzailea WHERE erabiltzailea='$erabiltzailea'";
					$erantzuna = $conn->query($query);
					if ($erantzuna->num_rows > 0) {
						$lerroa = $erantzuna->fetch_assoc();
						//BCRYPT
					    if (password_verify($pasahitza, $lerroa["pasahitza"])) {
					    	$_SESSION['erabiltzailea'] = $erabiltzailea;
							$_SESSION['admin'] = $lerroa["pasahitza"];
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
	</body>
</html>
