<?php
	include "connect.php";
	$query = "SELECT I.irudia, I.positiboak, I.negatiboak FROM irudia I ORDER BY I.igotzeData DESC;";
	$erantzuna = $conn->query($query);
	if ($erantzuna){
		if($erantzuna->num_rows > 0) {
			while($lerroa = $erantzuna->fetch_assoc()) {
				echo "<img src='data:image/png;base64,".base64_encode( $lerroa['irudia'] )."' style='width: 200px;' />";
			}
		}
	}
	else{
		echo "<p class='mezua'>EZ DAGO ARGAZKIRIK ZURE FEED-ean</p>";
		echo "<p class='mezua'>HASI ERABILTZAILEAK JARRAITZEN ARGAZKIAK IKUSTEKO</p>";
	}
	$conn->close();
?>