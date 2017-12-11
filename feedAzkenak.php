<?php
	include "connect.php";
	$query = "SELECT I.jabea, I.irudia, I.id, I.positiboak, I.negatiboak FROM irudia I ORDER BY I.igotzeData DESC;";
	$erantzuna = $conn->query($query);
	if ($erantzuna){
		if($erantzuna->num_rows > 0) {
			while($lerroa = $erantzuna->fetch_assoc()) {
				echo "<div class='feed-img-div'>";
					echo "<img src='data:image/png;base64,".base64_encode( $lerroa['irudia'] )."' /><br>";
					echo "<div>";
					echo "		<div class='profil-link'>
									<a href='erabiltzailea.php?nick=".$lerroa['jabea']."'>".$lerroa['jabea']."</a>
								</div>";
					echo "		<div class='puntu-botoi'>
									<i id='".$lerroa['id'].'p'."' class='p' onclick='like(".json_encode($lerroa['id']).")'></i>
									<i id='".$lerroa['id'].'n'."'class='n' onclick='dislike(".json_encode($lerroa['id']).")'></i>
								</div>";
					echo "</div>";
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