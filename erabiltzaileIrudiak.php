<?php
	if(isset($_GET['nick'])){
		include "connect.php";
		$query = "SELECT I.id, I.irudia, I.positiboak, I.negatiboak FROM (erabiltzailea E INNER JOIN irudia I ON I.jabea = E.erabiltzailea) WHERE E.erabiltzailea = '".$_GET['nick']."';";
		$erantzuna = $conn->query($query);
		if ($erantzuna){
			if($erantzuna->num_rows > 0) {
				while($lerroa = $erantzuna->fetch_assoc()) {
					echo "<img src='data:image/png;base64,".base64_encode( $lerroa['irudia'] )."' style='width: 200px;'/>";
				}
			}
		}
		else{
			echo "<p class='mezua'>ERABILTZAILE HONEK EZ DU ARGAZKIRIK IGO</p>";
		}
		$conn->close();
	}
?>