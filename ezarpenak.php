<!--HTML fitxategiaren estruktura nagusia beste fitxategi batetik inportatuko dugu-->
<?php 
	//Sesioa konprobatuko da beste php honetan, sesioa hasita badago ez gara logeatu beharko
	include "sesioaKonprobatu.php";
	erabiltzaileAtala();
	$title = "Ezarpenak";
	include "estruktura.php" 
?>

	<?php
		//Erabiltzailearen informazioa lortuko da datu basetik
		include "connect.php";
		$query = "SELECT E.erabiltzailea, E.izena, E.kokapena, E.irudia FROM erabiltzailea E WHERE E.erabiltzailea='".$_SESSION['erabiltzailea']."';";

		$erantzuna = $conn->query($query);
		if ($erantzuna){
			if($erantzuna->num_rows > 0) {
				$lerroa = $erantzuna->fetch_assoc();
				$kokapena = $lerroa['kokapena'];
				$erabiltzailea = $lerroa['erabiltzailea'];
				$izena = $lerroa['izena'];
				$irudia = $lerroa['irudia'];
			}
		}
	?>

	<div class='aukerak' style="border: 1px solid black; padding: 50px;">
		<div style="display: inline-block; width: 100%;">
			<form method="POST" name="signUp" onsubmit="return profilUpdate('img')" action="profilaUpdate.php" enctype="multipart/form-data">
				<label>Erabiltzailea: </label><label style="font-weight: bold"><?php echo $erabiltzailea; ?></label><br>
				<label>Izena: </label><input name="izena" type="text" placeholder=<?php echo json_encode($izena); ?>><br>
				<label>Kokapena: </label><input name="kokapena" type="text" placeholder=<?php echo json_encode($kokapena); ?>><br>
				<label>Profileko irudi aldatu: </label><input name="img" id="img" type="file"><br><br>
				<input type="submit" name="submit" value="Eguneratu" style="margin-left: 15px">
			</form>
		</div> 
		<div style="display: inline-block; width: 100%; height: 150px">
			<?php echo "<img src='data:image/png;base64,".base64_encode( $lerroa['irudia'] )."' style='height: 150px'> </img>"; ?>
		</div>
	</div>	

	<div id="errorea"></div>

	<button>EZABATU PROFILA</button>

<?php include "footer.php" ?>