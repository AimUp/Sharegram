<?php
	if(isset($_GET['nick'])){
		$nick = $_GET['nick'];
		include "sesioaKonprobatu.php";
		erabiltzaileAtala();
		$title = $nick;
		include "estruktura.php";
?>
		<div>
	

<?php
	
		include "connect.php";

		$query = "SELECT E.erabiltzailea, E.izena, E.kokapena, E.irudia FROM erabiltzailea E WHERE E.erabiltzailea='".$nick."';";

		$erantzuna = $conn->query($query);
		if ($erantzuna){
			if($erantzuna->num_rows > 0) {
				while($lerroa = $erantzuna->fetch_assoc()) {
					echo "<table class='erabTaula'>";
					echo "	<tr>";
					echo "		<td rowspan='4' class='irudia'>";
					echo "			<img src='data:image/png;base64,".base64_encode( $lerroa['irudia'] )."' style='width: 200px;' />";
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
		
		<script type='text/javascript'>erabiltzaile( <?php echo json_encode($nick)?> );</script>
		<div id="erabiltzaileIrudiak" class="erabiltzaileIrudiak">
		</div>

<?php 
		include "footer.php"; 
	}
	else{
		header("Location: feed.php");
		exit();
	}
?>