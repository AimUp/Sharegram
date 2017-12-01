<?php 
	$title = "Sharegram";
	include "estruktura.php" 
?>
		<div class="saioa">
			<form method="POST" id="login" action="">
			Hasi saioa:<br>
			Erabiltzailea:	<input type="text" id="erabiltzailea" name="erabiltzailea"/><br>
			Pasahitza:		<input type="password" id="pasahitza" name="pasahitza"/><br>
			<input type="submit" value="Log in"/>
			</form>
			<?php 
				if(isset($_POST['eposta'])){
					include "connect.php";
					$eposta = $_POST['erabiltzailea'];
					$pasahitza = $_POST['pasahitza'];
					$query = "SELECT pasahitza FROM erabiltzailea WHERE erabiltzailea='$erabiltzailea'";
					$erantzuna = $conn->query($query);
					if ($erantzuna->num_rows > 0) {
						$lerroa = $erantzuna->fetch_assoc();
						//BCRYPT
					    if (password_verify($pasahitza, $lerroa["pasahitza"])) {
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
		<div class="erregistratu">
			<a href="signup.php">Sign up<a/> 
		</div>
	</body>
</html>
