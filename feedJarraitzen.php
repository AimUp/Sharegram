<?php
	include "connect.php";
	$query = "SELECT I.jabea, I.irudia, I.positiboak, I.negatiboak FROM ((erabiltzailea E INNER JOIN jarraitzen J ON E.erabiltzailea = J.profila) INNER JOIN irudia I ON I.jabea = J.jarraitzen) WHERE E.erabiltzailea = '".$_SESSION['erabiltzailea']."';";
	
	$erantzuna = $conn->query($query);
	if ($erantzuna){
		if($erantzuna->num_rows > 0) {
			while($lerroa = $erantzuna->fetch_assoc()) {
				echo "<div>";
					echo "<img src='data:image/png;base64,".base64_encode( $lerroa['irudia'] )."' style='width: 200px;' />";
					echo "<a href='erabiltzailea.php?nick=".$lerroa['jabea']."'>".$lerroa['jabea']."</a>";
				echo "</div>";
			}
		}
	}
	else{
		echo "<p class='mezua'>EZ DAGO ARGAZKIRIK ZURE FEED-ean</p>";
		echo "<p class='mezua'>HASI ERABILTZAILEAK JARRAITZEN ARGAZKIAK IKUSTEKO</p>";
	}
	$conn->close();
?>