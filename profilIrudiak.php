<?php
	include "connect.php";
	$query = "SELECT I.id, I.irudia, I.positiboak, I.negatiboak FROM (erabiltzailea E INNER JOIN irudia I ON I.jabea = E.erabiltzailea) WHERE E.erabiltzailea = '".$_SESSION['erabiltzailea']."';";
	$erantzuna = $conn->query($query);
	if ($erantzuna){
		if($erantzuna->num_rows > 0) {
			while($lerroa = $erantzuna->fetch_assoc()) {
				echo "<div class='show-image'>";
					echo "<img src='data:image/png;base64,".base64_encode( $lerroa['irudia'] )."' style='width: 200px;'/>";
					echo "<input type='button' class='ezabatu' value='EZABATU' onclick='ezabatuIrudia(".$lerroa['id'].")'/>";
				echo "</div>";
			}
		}
	}
	else{
		echo "<p class='mezua'>EZ DAGO ARGAZKIRIK ZURE PROFILEAN-ean</p>";
		echo "<p class='mezua'>PARTEKATU IRUDIREN BAT ZURE JARRAITZAILEEKIN</p>";
	}
	$conn->close();
?>