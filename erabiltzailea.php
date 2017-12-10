<?php
	if(isset($_GET['nick'])){

		include "sesioaKonprobatu.php";
		erabiltzaileAtala();
		$title = $_GET['nick'];
		include "estruktura.php";

		include "connect.php";

		$query = "SELECT E.erabiltzailea, E.izena, E.kokapena, E.irudia FROM erabiltzailea E WHERE E.erabiltzailea='".$_GET['nick']."';";

		$erantzuna = $conn->query($query);
		if ($erantzuna){
			if($erantzuna->num_rows > 0) {
				while($lerroa = $erantzuna->fetch_assoc()) {
					echo "<table>";
					echo "	<tr>";
					echo "		<td rowspan='4' style='padding-right: 100px'>";
					echo "			<img src='data:image/png;base64,".base64_encode( $lerroa['irudia'] )."' style='width: 200px;' />";
					echo "		</td>";
					echo "	    <td style='text-align: left;'>";
					echo "			<label class='parametroa'>Nick: </label>";
					echo "			<label class='balioa'>".$lerroa['erabiltzailea']."</label>";
					echo "			</td>";
					echo "	</tr>";
					echo "	<tr>";
					echo "		<td style='text-align: left;'>";
					echo "			<label class='parametroa'>Izena: </label>";
					echo "			<label class='balioa'>".$lerroa['izena']."</label>";
					echo "		</td>";
					echo "	</tr>";
					echo "	<tr>";
					echo "		<td style='text-align: left;'>";
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

		include "footer.php";
	}
	else{
		header("Location: feed.php");
		exit();
	}	
?>