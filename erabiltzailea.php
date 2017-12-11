<?php
	//Nick parametroa GET bezala pasatzen ez bazaio feed.php-ra joango da
	//	if hau fitxategi honen amaieran bukatzen da
	if(isset($_GET['nick'])){
		$nick = $_GET['nick'];
		include "sesioaKonprobatu.php";
		erabProfila($nick);//Sesio bat hasita dagoela konprobatuko du, bestela login egitera bidaliko du, gainera erabiltzaile hau gure profila izatekotan gure profilera bidaliko gaitu
		$title = $nick;
		include "estruktura.php";//HTML orriaren estruktura nagusia beste fitxategi batetik inportatuko dugu
?>

		<div id="erabiltzaileInfo" class="erabiltzaileInfo">
			<?php
				//Erabiltzailearen informazioa lortuko da datu basetik
				include "connect.php";
				$query = "SELECT E.erabiltzailea, E.izena, E.kokapena, E.irudia FROM erabiltzailea E WHERE E.erabiltzailea='".$nick."';";

				$erantzuna = $conn->query($query);
				if ($erantzuna){
					if($erantzuna->num_rows > 0) {
						while($lerroa = $erantzuna->fetch_assoc()) {
							$query = "SELECT J.jarraitzen FROM jarraitzen J WHERE J.profila='".$_SESSION['erabiltzailea']."' and J.jarraitzen='".$nick."';";
							$e = $conn->query($query);
							if ($e){ 
								if($e->num_rows > 0){ $j = True;}
								else{ $j = False;}
							}
							
							echo "<table class='erabTaula'>";
							echo "	<tr>";
							echo "		<td rowspan='4' class='irudia'>";
							echo "			<div class='profil-img'>";
							echo "				<img src='data:image/png;base64,".base64_encode( $lerroa['irudia'] )."' style='width: 200px;'/>";
							if($j){	echo "		<input type='button' class='follow jarraitzen' value='JARRAITZEARI UTZI' onclick='unfollow(". json_encode($nick) .")'/>";}
							else{ 	echo "		<input type='button' class='follow follow1' value='JARRAITU' onclick='follow(". json_encode($nick).")'/>"; }
							echo "			</div>";
							echo "		</td>";
							echo "	    <td class='datuak'>";
							echo "			<label class='parametroa'>Nick: </label>";
							echo "			<label class='balioa'>".$lerroa['erabiltzailea']."</label>";
							echo "			</td>";
							echo "	</tr>";
							echo "	<tr>";
							echo "		<td class='datuak'>";
							echo "			<label class='parametroa'>Izena: </label>";
							echo "			<label class='balioa'>".$lerroa['izena']."</label>";
							echo "		</td>";
							echo "	</tr>";
							echo "	<tr>";
							echo "		<td class='datuak'>";
							echo "			<label class='parametroa'>Kokapena: </label>";
							echo "			<label class='balioa'>".$lerroa['kokapena']."</label>";
							echo "		</td>";
							echo "	</tr>";
							if($j){
								echo "	<tr>";
								echo "		<td class='jarraitu'>";
								echo "			<label class='parametroa'>JARRAITZEN </label>";
								echo "		</td>";
								echo "	</tr>";
							}
							echo "</table>";
						}
					}
				}
				else{
					echo "<p class='mezua'>EZ DAGO ARGAZKIRIK ZURE FEED-ean</p>";
					echo "<p class='mezua'>HASI ERABILTZAILEAK JARRAITZEN ARGAZKIAK IKUSTEKO</p>";
				}
				$conn->close();
			?>
		</div>

		<!--AJAX-ean erroreren bat egotekotan div honetan inprimatuko da-->
		<div id="errorea"></div>
		
		<!--AJAX erabiliz erabiltzailearen irudiak kargatuko ditugu erabiltzaileIrudiak div-ean-->
		<script type='text/javascript'>erabiltzaile( <?php echo json_encode($nick)?> );</script>
		<div id="erabiltzaileIrudiak" class="erabiltzaileIrudiak"></div>

<?php 
		//Footerraren HTML zatia jarriko du
		include "footer.php"; 
	}
	else{
		header("Location: feed.php");
		exit();
	}
?>